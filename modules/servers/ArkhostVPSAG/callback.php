<?php
/**
 *	VPSAG WHMCS Server Provisioning version 1.2
 *
 *	@package     WHMCS
 *	@copyright   ArkHost
 *	@link        https://arkhost.com
 *	@author      ArkHost <support@arkhost.com>
 */

if (empty($_POST)) {
    exit(header('Location: https://arkhost.com'));
}

require_once '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'init.php';
require_once ROOTDIR . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'servers' . DIRECTORY_SEPARATOR . 'ArkhostVPSAG' . DIRECTORY_SEPARATOR . 'ArkhostVPSAG.php';

use WHMCS\Database\Capsule;

$_POST = array_map('html_entity_decode', $_POST);

$customField = Capsule::table('tblcustomfieldsvalues')->where('value', 'VPSAG-' . $_POST['server_id'])->first();
$service = WHMCS\Service\Service::find($customField->relid);

if (!$service) exit(header('Location: https://arkhost.com'));

$server = Capsule::table('tblservers')->where('id', $service->server)->first();

$rawSig = '';
ksort($_POST, SORT_STRING);

foreach ($_POST as $key => $value) {
    if ($key === 'sig') continue;
    $rawSig .= $value;
}

$rawSig .= hash('sha512', decrypt($server->password));
$signature = hash('sha256', $rawSig);

if ($_POST['sig'] != $signature) exit(header('Location: https://arkhost.com'));

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
