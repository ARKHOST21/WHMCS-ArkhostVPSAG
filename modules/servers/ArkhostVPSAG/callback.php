<?php
/**
 *	VPSAG WHMCS Server Provisioning version 1.4
 *
 *	@package     WHMCS
 *	@copyright   ArkHost
 *	@link        https://arkhost.com
 *	@author      ArkHost <support@arkhost.com>
 */

if (empty($_POST)) {
    http_response_code(400);
    exit('Bad Request');
}

require_once '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'init.php';
require_once ROOTDIR . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'servers' . DIRECTORY_SEPARATOR . 'ArkhostVPSAG' . DIRECTORY_SEPARATOR . 'ArkhostVPSAG.php';

use WHMCS\Database\Capsule;

$_POST = array_map('html_entity_decode', $_POST);

// Look for the service by VPSAG ID in service properties
$serviceProperty = Capsule::table('tblservice_properties')
    ->where('property', 'vpsag|VPSAG ID')
    ->where('value', 'VPSAG-' . $_POST['server_id'])
    ->first();

if (!$serviceProperty) {
    // Fallback: try to find in custom fields for backward compatibility
    $customField = Capsule::table('tblcustomfieldsvalues')->where('value', 'VPSAG-' . $_POST['server_id'])->first();
    if ($customField) {
        $service = WHMCS\Service\Service::find($customField->relid);
    } else {
        http_response_code(404);
        exit('Service not found');
    }
} else {
    $service = WHMCS\Service\Service::find($serviceProperty->service_id);
}

if (!$service) {
    http_response_code(404);
    exit('Service not found');
}

$server = Capsule::table('tblservers')->where('id', $service->server)->first();

$rawSig = '';
ksort($_POST, SORT_STRING);

foreach ($_POST as $key => $value) {
    if ($key === 'sig') continue;
    $rawSig .= $value;
}

$rawSig .= hash('sha512', decrypt($server->password));
$signature = hash('sha256', $rawSig);

if ($_POST['sig'] != $signature) {
    http_response_code(403);
    exit('Invalid signature');
}

$params = array(
    'serverusername' => $server->username,
    'serverpassword' => decrypt($server->password),
    'action' => 'Label',
    'label' => 'WHMCS ' . $service->id,
    'model' => $service
);
ArkhostVPSAG_API($params);

if (gettype($_POST['ips']) !== 'array') $_POST['ips'] = json_decode($_POST['ips'], true);

$_POST['ips'] = array_map(function ($ip) {
    return $ip['ip'];
}, $_POST['ips']);

$mainIP = $_POST['mainip'];

$_POST['ips'] = array_filter($_POST['ips'], function ($ip) use ($mainIP) {
    return $ip !== $mainIP;
});

Capsule::table('tblhosting')->where('id', $service->id)->update(array(
    'username' => $_POST['username'],
    'password' => encrypt($_POST['root']),
    'dedicatedip' => $mainIP,
    'assignedips' => (!array_shift($_POST['ips']) ? $_POST['ipv6'] : implode('\n', $_POST['ips']) . '\n' . $_POST['ipv6']),
));

echo '*ok*';
