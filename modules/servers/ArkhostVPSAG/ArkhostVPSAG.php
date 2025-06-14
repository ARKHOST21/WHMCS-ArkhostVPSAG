<?php
/**
 *	WHMCS Server Module - VPSAG
 *
 *	@package     WHMCS
 *	@version     1.1
 *	@copyright   Copyright (c) ArkHost 2024
 *	@author      ArkHost <support@arkhost.com>
 *  @link        https://arkhost.com
 */

if (!defined('WHMCS')) {
    exit(header('Location: https://arkhost.com'));
}

use WHMCS\Config\Setting;
use WHMCS\Database\Capsule;

function ArkhostVPSAG_GetVPSID(array $params) {
    $vpsId = $params['model']->serviceProperties->get('vpsag');
    // Handle both VPSAG-xxx and VPS-xxx formats, return just the numeric ID
    return str_replace(['VPSAG-', 'VPS-'], '', $vpsId);
}

function ArkhostVPSAG_API(array $params) {
    $url = 'https://www.vpsag.com/api/v1/';
    $data = [];
    $method = '';

    switch ($params['action']) {
        case 'Packages':
            $url .= 'plans';
            $method .= 'GET';
            break;

        case 'Operating Systems':
            $url .= 'os/plan/' . $params['plan_id'];
            $method .= 'GET';
            break;
            
        case 'Upgrades':
            $url .= 'upgrade/plans';
            $method .= 'GET';
            break;

        case 'Discount':
            $url .= 'discount';
            $method .= 'GET';
            break;

        case 'Balance':
            $url .= 'balance';
            $method .= 'GET';
            break;
           
        case 'Order':
            $url .= 'order/plan';
            $method .= 'POST';
            
            $billingCycles = array(
                'Monthly' => 1,
                'Quarterly' => 3,
                'Semi-Annually' => 6,
                'Annually' => 12,
                'Biennially' => 24,
                'Triennially' => 36
            );

            $data += array(
                'plan_id' => ArkhostVPSAG_GetOption($params, 'planid'),
                'notify_url' => Setting::getValue('SystemURL') . '/modules/servers/ArkhostVPSAG/callback.php',
                'os_id' => ArkhostVPSAG_GetOption($params, 'osid'),
                'billing_term' => $billingCycles[$params['model']['billingcycle']] ?? 1,
            );
            break;

        case 'Server Info':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params);
            $method .= 'GET';
            break;
        
        case 'Label':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/label';
            $method .= 'POST';

            $data += array(
                'val' => $params['label'],
            );
            break;

        case 'Graphs':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/graph/' . $params['time'];
            $method .= 'GET';
            break;

        case 'Operating Systems - Server':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/os';
            $method .= 'GET';
            break;

        case 'Cancel':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/cancel';
            $method .= 'POST';

            $data += array(
                'when' => $params['when'],
            );
            break;

        case 'Stop Cancellation':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/stop-cancellation';
            $method .= 'POST';
            break;

        case 'VNC Console':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/vnc';
            $method .= 'GET';
            break;

        case 'Reinstall':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/reinstall';
            $method .= 'POST';

            $data += array(
                'os' => $params['os'],
                'notify_url' => Setting::getValue('SystemURL') . '/modules/servers/ArkhostVPSAG/callback.php',
            );
            
            // Add optional SSH key if provided
            if (!empty($params['ssh_key'])) {
                $data['ssh_key'] = $params['ssh_key'];
            }
            
            // Add optional post-install script if provided
            if (!empty($params['run_on_install'])) {
                $data['run_on_install'] = base64_encode($params['run_on_install']);
            }
            
            // Set SSH password policy (1 = disable, 2 = enable)
            $data['no_ssh_password'] = isset($params['no_ssh_password']) && $params['no_ssh_password'] ? 1 : 2;
            break;

        case 'Reboot':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/action/reboot';
            $method .= 'POST';
            break;

        case 'Stop':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/action/stop';
            $method .= 'POST';
            break;

        case 'Shutdown':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/action/shutdown';
            $method .= 'POST';
            break;

        case 'Start':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/action/start';
            $method .= 'POST';
            break;

        case 'Disable':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/action/disable';
            $method .= 'POST';
            break;

        case 'Enable':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/action/enable';
            $method .= 'POST';
            break;

        case 'IPv4 Addresses':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/ipv4';
            $method .= 'GET';
            break;

        case 'Reverse DNS':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/rdns/' . $params['ip'];
            $method .= 'POST';

            $data += array(
                'rdns' => $params['rdns']
            );
            break;

        case 'Addons':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/addons';
            $method .= 'GET';
            break;

        case 'Upgrade':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/upgrade/plan';
            $method .= 'POST';

            $data += array(
                'plan_id' => ArkhostVPSAG_GetOption($params, 'planid'),
            );
            break;

        case 'Hostname rDNS':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/hostname';
            $method .= 'POST';

            $data += array(
                'hostname' => $params['hostname']
            );
            break;

        case 'Create backup':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/backup';
            $method .= 'POST';
            break;

        case 'Delete backup':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/backup/' . $params['file'];
            $method .= 'DELETE';
            break;

        case 'List backups':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/backup';
            $method .= 'GET';
            break;

        case 'Restore backup':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/restore/' . $params['file'];
            $method .= 'POST';
            break;

        case 'Get Firewall rules':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/firewall';
            $method .= 'GET';
            break;

        case 'Add Firewall rules':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/firewall';
            $method .= 'POST';

            $data += array(
                'action' => $params['firewallAction'],
                'protocol' => $params['protocol'],
                'source' => $params['source'],
                'port' => $params['port'],
                'note' => $params['note'],
            );
            break;

        case 'Delete Firewall rule':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/firewall/' . $params['rule_id'];
            $method .= 'DELETE';
            break;

        case 'Commit Firewall rules':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/firewall/resync';
            $method .= 'POST';
            break;

        case 'ISO Images':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/iso';
            $method .= 'GET';
            break;

        case 'Load ISO':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/iso/' . $params['iso_id'];
            $method .= 'POST';
            break;

        case 'Eject ISO':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/iso/0';
            $method .= 'POST';
            break;

        case 'Reset root':
            $url .= 'vps/' . ArkhostVPSAG_GetVPSID($params) . '/reset-root';
            $method .= 'POST';
            break;

        default:
            throw new Exception('Invalid action: ' . $params['action']);
            break;
    }

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_TIMEOUT, 15);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POSTREDIR, CURL_REDIR_POST_301);
    curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
            curl_setopt($curl, CURLOPT_USERAGENT, 'ArkHost - VPSAG WHMCS');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('X_API_USER: ' . $params['serverusername'], 'X_API_KEY:  ' . $params['serverpassword']));

    if ($method === 'POST' || $method === 'PATCH') {
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    }

    $responseData = curl_exec($curl);
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    
    $responseData = json_decode($responseData, true);

    if ($statusCode === 0) throw new Exception('cURL Error: ' . curl_error($curl));

    curl_close($curl);

    logModuleCall(
                    'ArkHost - VPSAG',
        $url,
        !empty($data) ? json_encode($data) : '',
        print_r($responseData, true)
    );

    if (isset($responseData['status']) && $responseData['status'] === 0) throw new Exception($responseData['result']);

    return $responseData['result'];
}

function ArkhostVPSAG_Error($func, $params, Exception $err) {
    logModuleCall('ArkHost - VPSAG', $func, $params, $err->getMessage(), $err->getTraceAsString());
}

function ArkhostVPSAG_MetaData() {
    return array(
        'DisplayName' => 'ArkHost - VPSAG',
        'APIVersion' => '1.1',
        'RequiresServer' => true,
    );
}

function ArkhostVPSAG_ConfigOptions() {
    $error = array(
        'error' => array(
            'FriendlyName' => 'Error',
            'Description' => 'Please double check if you selected a Server Group and/or your details are correct.',
            'Type' => '',
        ),
    );

    $array = array(
        'planid' => array(
            'FriendlyName' => 'Plan',
            'Description' => 'The Plan desired (Configurable option: planid).',
            'Type' => 'dropdown',
            'Options' => array(),
        ),
        'osid' => array(
            'FriendlyName' => 'Operating System',
            'Description' => 'The Operating System desired (Configurable option: osid).',
            'Type' => 'dropdown',
            'Options' => array(),
        ),
        // Extra resource options removed - now handled via plan selection
        // Plans have fixed resources defined within them in the new API
    );
    
    try {
        if (basename($_SERVER['SCRIPT_NAME'], '.php') === 'configproducts' && ($_REQUEST['action'] === 'module-settings' || $_POST['action'] === 'module-settings')) {
            $id = 0;
            $product;
            $serverGroup = 0;

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = (int) $_POST['id'];

                $product = Capsule::table('tblproducts')->where('id', $id)->first();
                $serverGroup = (int) $_POST['servergroup'];
            } else {
                $id = (int) $_REQUEST['id'];
        
                $product = Capsule::table('tblproducts')->where('id', $id)->first();
                $serverGroup = (int) $product->servergroup;
            }
            
            // Only proceed if a server group is actually selected
            if ($serverGroup == 0) {
                return $array; // Return basic array structure when no server group selected
            }
            
            $serverGroup = Capsule::table('tblservergroupsrel')->where('groupid', $serverGroup)->first();
            if (!$serverGroup) {
                // Return basic array if server group not found, don't throw exception
                return $array;
            }

            $server = Capsule::table('tblservers')->where('id', $serverGroup->serverid)->first();
            if (!$server) {
                // Return basic array if server not found, don't throw exception
                return $array;
            }
        
            $params = array(
                'serverusername' => $server->username,
                'serverpassword' => decrypt($server->password),
            );
    
            $params['action'] = 'Packages';
            $packageslist = ArkhostVPSAG_API($params);
        
            foreach ($packageslist as $package) {
                $array['planid']['Options'] += array(
                    $package['id'] => $package['name'] . ' (' . $package['price'] . '€)'
                );
            }
            
            if ($product->configoption1 == '') return $array;
        
            $params['action'] = 'Operating Systems';
            $params['plan_id'] = $product->configoption1;
            $operatingSystems = ArkhostVPSAG_API($params);
        
            foreach ($operatingSystems as $operatingSystem) {
                $array['osid']['Options'] += array(
                    $operatingSystem['id'] => $operatingSystem['name']
                );
            }
        
            // Note: Extra resource upgrades are now handled via plan selection in the new API
            // Plans have fixed resources defined within them, no individual resource pricing
        }
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);

        $error['error']['Description'] = 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
        return $error;
    }
    
    return $array;
}

function ArkhostVPSAG_GetOption(array $params, $id, $default = NULL) {
    $options = ArkhostVPSAG_ConfigOptions();

    $friendlyName = $options[$id]['FriendlyName'];

    if (isset($params['configoptions'][$friendlyName]) && $params['configoptions'][$friendlyName] !== '') {
        return $params['configoptions'][$friendlyName];
    } else if (isset($params['configoptions'][$id]) && $params['configoptions'][$id] !== '') {
        return $params['configoptions'][$id];
    } else if (isset($params['customfields'][$friendlyName]) && $params['customfields'][$friendlyName] !== '') {
        return $params['customfields'][$friendlyName];
    } else if (isset($params['customfields'][$id]) && $params['customfields'][$id] !== '') {
        return $params['customfields'][$id];
    }

    $found = false;
    $i = 0;
    
    foreach ($options as $key => $value) {
        $i++;
        if ($key === $id) {
            $found = true;
            break;
        }
    }

    if ($found && isset($params['configoption' . $i]) && $params['configoption' . $i] !== '') {
        return $params['configoption' . $i];
    }

    return $default;
}

function ArkhostVPSAG_TestConnection(array $params) {
    $err = '';

    try {
        $params['action'] = 'Balance';
        ArkhostVPSAG_API($params);
    } catch (Exception $e) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $e);
        $err = 'Received the error: ' . $e->getMessage() . ' Check module debug log for more detailed error.';
    }

    return [
        'success' => $err === '',
        'error' => $err,
    ];
}

function ArkhostVPSAG_CreateAccount(array $params) {
    try {
        $params['action'] = 'Order';
        $create = ArkhostVPSAG_API($params);

        $params['model']->serviceProperties->save([
            'vpsag|VPSAG ID' => 'VPSAG-' . $create['vps_id'],
        ]);
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }
    
    return 'success';
}

function ArkhostVPSAG_SuspendAccount(array $params) {
    try {
        $params['action'] = 'Disable';
        ArkhostVPSAG_API($params);
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }

    return 'success';
}

function ArkhostVPSAG_UnsuspendAccount(array $params) {
    try {
        $params['action'] = 'Enable';
        ArkhostVPSAG_API($params);
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }

    return 'success';
}

function ArkhostVPSAG_TerminateAccount(array $params) {
    try {
        $params['action'] = 'Cancel';
        $params['when'] = 'now';
        ArkhostVPSAG_API($params);
        
        Capsule::table('tblhosting')->where('id', $params['serviceid'])->update(array(
            'username' => '',
            'password' => '',
        ));
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }

    return 'success';
}



function ArkhostVPSAG_ChangePackage(array $params) {
    try {
        $params['action'] = 'Upgrade';
        ArkhostVPSAG_API($params);
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }

    return 'success';
}

function ArkhostVPSAG_Start(array $params) {
    try {
        ArkhostVPSAG_API($params);
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }

    return 'success';
}

function ArkhostVPSAG_Reboot(array $params) {
    try {
        ArkhostVPSAG_API($params);
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }

    return 'success';
}

function ArkhostVPSAG_Stop(array $params) {
    try {
        ArkhostVPSAG_API($params);
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }

    return 'success';
}

function ArkhostVPSAG_VNC(array $params) {
    try {
        $params['action'] = 'VNC Console';
        $vnc = ArkhostVPSAG_API($params);

        echo '<style>body{margin: 0px;}</style><iframe src="' . $vnc['vnc_url'] . '" scrolling="none" height="100%" width="100%" frameborder="0"></iframe>';
        // header('Location: ' . $vnc['vnc_url']);
        WHMCS\Terminus::getInstance()->doExit();
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);

        return array(
            'templatefile' => 'template/error',
            'templateVariables' => array(
                'error' => $err->getMessage(),
            ),
        );
    }
}

function ArkhostVPSAG_AdminCustomButtonArray() {
    return array(
        'Start' => 'Start',
        'Stop'=> 'Stop',
        'Reboot' => 'Reboot',
        'VNC Console'=> 'VNC',
	);
}

function ArkhostVPSAG_AdminLink(array $params) {
    try {
        $params['action'] = 'Balance';
        $balance = ArkhostVPSAG_API($params);

        $params['action'] = 'Discount';
        $discount = ArkhostVPSAG_API($params);

        return '<i class="fa fa-coins"></i> Balance: ' . $balance['balance'] . '€<br><i class="fa fa-badge-percent"></i> Discount: ' . $discount['percent'] . '%';
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return 'Received the error: ' . $err->getMessage() . ' Check module debug log for more detailed error.';
    }
}

function ArkhostVPSAG_ClientAreaAPI(array $params) {
    try {
        $action = App::getFromRequest('api');
        $actions = array('Server Info', 'Graphs', 'Reinstall', 'Reboot', 'Stop', 'Start', 'IPv4 Addresses', 'Hostname rDNS', 'Create backup', 'Delete backup', 'List backups', 'Restore backup', 'Get Firewall rules', 'Add Firewall rules', 'Delete Firewall rule', 'Commit Firewall rules', 'ISO Images', 'Load ISO', 'Eject ISO', 'Reset root');
        $results = array('result' => 'success');

        if (in_array($action, $actions)) {
            foreach ($_POST as $key => $value) {
                $params[$key] = $value;
            }

            $params['action'] = $action;
            $result = ArkhostVPSAG_API($params);
            
            // Special handling for specific responses
            if ($action === 'Graphs') {
                // If result contains graphs data, format it properly
                if (isset($result['graphs'])) {
                    $results['graphs'] = $result['graphs'];
                } else if (isset($result['cpu_img']) || isset($result['mem_img']) || isset($result['net_img']) || isset($result['disk_img'])) {
                    // If the response has individual graph fields, group them
                    $results['graphs'] = array(
                        'cpu_img' => isset($result['cpu_img']) ? $result['cpu_img'] : null,
                        'mem_img' => isset($result['mem_img']) ? $result['mem_img'] : null,
                        'net_img' => isset($result['net_img']) ? $result['net_img'] : null,
                        'disk_img' => isset($result['disk_img']) ? $result['disk_img'] : null
                    );
                } else {
                    // If no graph data found, set empty graphs
                    $results['graphs'] = array(
                        'cpu_img' => null,
                        'mem_img' => null,
                        'net_img' => null,
                        'disk_img' => null
                    );
                }
            } else if ($action === 'List backups') {
                // Handle backup list response - VPSAG returns array directly
                // Pass the result directly - let JavaScript handle the parsing
                $results = $result;
            } else {
                $results = array_merge($results, is_array($result) ? $result : array('data' => $result));
            }

            return array('jsonResponse' => $results);
        } else {
            throw new Exception('Action not allowed');
        }
    } catch (Exception $e) {
        return array('jsonResponse' => array('result' => 'error', 'message' => $e->getMessage()));
    }
}

function ArkhostVPSAG_DeliverFile(array $params) {
    try {
        $dir = __DIR__ . '/template/';
        $file = App::getFromRequest('file');
        $files = array('app.min.css', 'app.min.js');

        if (in_array($file, $files)) {
            $type = '';

			if (function_exists('ob_gzhandler')) {
				ob_start('ob_gzhandler');
			}
            
            if (strpos($file, '.js') !== false) {
                $dir .= 'js/';
                $type = 'application/javascript';
            } else if (strpos($file, '.css') !== false) {
                $dir .= 'css/';
                $type = 'text/css';
            } else {
                $type = 'text/html';
            }

            header('Content-Type: ' . $type . '; charset=utf-8');
            header('Cache-Control: max-age=604800, public');
            
            echo file_get_contents($dir . $file);
            WHMCS\Terminus::getInstance()->doExit();
        } else {
            throw new Exception('File not found');
        }
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);
        return array('jsonResponse' => array('result' => 'error', 'message' => $err->getMessage()));
    }
}



function ArkhostVPSAG_ClientAreaCustomButtonArray() {
    $_LANG = ArkhostVPSAG_Translation();

    return array(
        $_LANG['Start'] => 'Start',
        $_LANG['Stop'] => 'Stop',
        $_LANG['Restart'] => 'Reboot',
        $_LANG['VNC'] => 'VNC',
	);
}

function ArkhostVPSAG_ClientAreaAllowedFunctions() {
    return array('ClientAreaAPI', 'DeliverFile');
}

function ArkhostVPSAG_ClientArea(array $params) {
    if ($params['moduletype'] !== 'ArkhostVPSAG') return;

    try {
        // Check if VPS ID is available
        $vpsId = $params['model']->serviceProperties->get('vpsag');
        if (empty($vpsId)) {
            throw new Exception('VPS ID not found in service properties. This service may not be properly provisioned yet.');
        }
        
        // Get clean VPS ID
        $cleanVpsId = ArkhostVPSAG_GetVPSID($params);
        if (empty($cleanVpsId)) {
            throw new Exception('Invalid VPS ID format: ' . $vpsId . '. Expected format: VPS-xxxxx or VPSAG-xxxxx');
        }

        // Get server info and operating systems data
        $params['action'] = 'Server Info';
        $serverInfo = ArkhostVPSAG_API($params);

        // Check if server info is valid
        if (!is_array($serverInfo) || empty($serverInfo)) {
            throw new Exception('Unable to retrieve server information from API. VPS ID: ' . $vpsId);
        }

        $params['action'] = 'Operating Systems - Server';
        $operatingSystemsTemp = ArkhostVPSAG_API($params);

        // Check if operating systems data is valid
        if (!is_array($operatingSystemsTemp)) {
            $operatingSystemsTemp = array();
        }

        $dirImages = __DIR__ . '/template/img/';
        $availableImages = glob($dirImages . '*.png');
        $images = array();
        
        foreach ($availableImages as $key => $image) {
            $images[explode('.png', explode($dirImages, $image)[1])[0]] = 'data:image/png;base64,' . base64_encode(file_get_contents($image));
        }

        $dirOS = __DIR__ . '/template/img/os/';
        $availableOS = glob($dirOS . '*.png');
        $operatingSystems = array();
        
        foreach ($availableOS as $key => $os) {
            $availableOS[$key] = explode('.png', explode($dirOS, $os)[1])[0];
        }

        // Only process operating systems if we have valid data
        if (!empty($operatingSystemsTemp)) {
            foreach ($operatingSystemsTemp as $key => $operatingSystem) {
                // Create separate groups for different Linux distributions
                $osName = strtolower($operatingSystem['name']);
                
                // Determine the proper group based on OS name
                if (strpos($osName, 'almalinux') !== false || strpos($osName, 'alma') !== false) {
                    $group = 'almalinux';
                    $groupName = 'AlmaLinux';
                } elseif (strpos($osName, 'rocky') !== false || strpos($osName, 'rockylinux') !== false) {
                    $group = 'rocky';
                    $groupName = 'Rocky Linux';
                } elseif (strpos($osName, 'centos') !== false) {
                    $group = 'centos';
                    $groupName = 'CentOS';
                } elseif (strpos($osName, 'debian') !== false) {
                    $group = 'debian';
                    $groupName = 'Debian';
                } elseif (strpos($osName, 'ubuntu') !== false) {
                    $group = 'ubuntu';
                    $groupName = 'Ubuntu';
                } elseif (strpos($osName, 'windows') !== false) {
                    $group = 'windows';
                    $groupName = 'Windows';
                } else {
                    // Fallback to original group
                    $group = $operatingSystem['group'];
                    $groupName = $operatingSystem['group_name'];
                }
                
                if (!isset($operatingSystems[$group])) {
                    // Map group names to correct image filenames
                    $imageFile = $group;
                    if ($group === 'rocky') {
                        $imageFile = 'rockylinux';
                    }
                    
                    $image = file_get_contents($dirOS . (in_array($imageFile, $availableOS) ? $imageFile : 'others') . '.png');
                    
                    $operatingSystems[$group] = array(
                        'name' => $groupName,
                        'image' => 'data:image/png;base64,' . base64_encode($image),
                        'versions' => array(),
                    );
                }
                
                $operatingSystems[$group]['versions'][] = $operatingSystem;
            }
            
            // Process operating system info only if we have data
            if (isset($serverInfo['os']) && !empty($operatingSystemsTemp)) {
                $osId = $serverInfo['os'];
                $osIndex = array_search($osId, array_column($operatingSystemsTemp, 'id'));
                
                if ($osIndex !== false && isset($operatingSystemsTemp[$osIndex])) {
                    $currentOS = $operatingSystemsTemp[$osIndex];
                    $osName = strtolower($currentOS['name']);
                    
                    // Determine the proper group based on current OS name
                    if (strpos($osName, 'almalinux') !== false || strpos($osName, 'alma') !== false) {
                        $group = 'almalinux';
                    } elseif (strpos($osName, 'rocky') !== false || strpos($osName, 'rockylinux') !== false) {
                        $group = 'rocky';
                    } elseif (strpos($osName, 'centos') !== false) {
                        $group = 'centos';
                    } elseif (strpos($osName, 'debian') !== false) {
                        $group = 'debian';
                    } elseif (strpos($osName, 'ubuntu') !== false) {
                        $group = 'ubuntu';
                    } elseif (strpos($osName, 'windows') !== false) {
                        $group = 'windows';
                    } else {
                        $group = $currentOS['group'];
                    }
                    
                    // Use the specific OS information instead of the generic group
                    $serverInfo['operatingSystem'] = array(
                        'name' => $currentOS['name'],
                        'image' => isset($operatingSystems[$group]) ? $operatingSystems[$group]['image'] : 'data:image/png;base64,' . base64_encode(file_get_contents(__DIR__ . '/template/img/os/others.png'))
                    );
                } else {
                    // Fallback if OS not found in list
                    $serverInfo['operatingSystem'] = array(
                        'name' => 'OS ID: ' . $osId,
                        'image' => 'data:image/png;base64,' . base64_encode(file_get_contents(__DIR__ . '/template/img/os/others.png'))
                    );
                }
            }
        }

        // Set default OS info if not available
        if (!isset($serverInfo['operatingSystem']) || !is_array($serverInfo['operatingSystem'])) {
            $serverInfo['operatingSystem'] = array(
                'name' => 'Unknown OS',
                'image' => 'data:image/png;base64,' . base64_encode(file_get_contents($dirOS . 'others.png'))
            );
        }

        $serverInfo['status'] = isset($serverInfo['status']) ? ($serverInfo['status'] !== 'ok' ? $serverInfo['status'] : (isset($serverInfo['vm_status']) ? $serverInfo['vm_status'] : 'unknown')) : 'unknown';
        $serverInfo['statusImage'] = isset($images[$serverInfo['status']]) ? $images[$serverInfo['status']] : (isset($images['unknown']) ? $images['unknown'] : '');
        $serverInfo['statusDescription'] = ucfirst($serverInfo['status']);

        // Set default values for missing data
        $serverInfo['hostname'] = isset($serverInfo['hostname']) ? $serverInfo['hostname'] : 'N/A';
        $serverInfo['ip'] = isset($serverInfo['ip']) ? $serverInfo['ip'] : 'N/A';
        $serverInfo['uptime_text'] = isset($serverInfo['uptime_text']) ? $serverInfo['uptime_text'] : 'N/A';
        $serverInfo['cpu_usage'] = isset($serverInfo['cpu_usage']) ? $serverInfo['cpu_usage'] : 0;
        $serverInfo['ram_usage'] = isset($serverInfo['ram_usage']) ? $serverInfo['ram_usage'] : 0;
        $serverInfo['ram'] = isset($serverInfo['ram']) ? $serverInfo['ram'] : 1;
        
        // Handle disk usage data (API may not always return this field)
        
        $serverInfo['disk_used'] = isset($serverInfo['disk_usage']) ? $serverInfo['disk_usage'] : 
                                  (isset($serverInfo['disk_used']) ? $serverInfo['disk_used'] : 0);
        $serverInfo['disk'] = isset($serverInfo['disk']) ? $serverInfo['disk'] : 1;
        $serverInfo['bandwidth_used'] = isset($serverInfo['bandwidth_used']) ? $serverInfo['bandwidth_used'] : 0;
        $serverInfo['bandwidth'] = isset($serverInfo['bandwidth']) ? $serverInfo['bandwidth'] : 1;

        return array(
            'templatefile' => 'template/clientarea_direct',
            'templateVariables' => array(
                'images' => $images,
                'serverInfo' => $serverInfo,
                'operatingSystems' => $operatingSystems,
                'token' => generate_token('plain'),
                '_LANG' => ArkhostVPSAG_Translation(),
            )
        );
    } catch (Exception $err) {
        ArkhostVPSAG_Error(__FUNCTION__, $params, $err);

        return array(
            'templatefile' => 'template/error',
            'templateVariables' => array(
                'error' => $err->getMessage(),
                'image' => 'data:image/png;base64,' . base64_encode(file_get_contents(__DIR__ . '/template/img/notice.png'))
            )
        );
    }
}

function ArkhostVPSAG_Translation() {
    $lang = Setting::getValue('Language');
    $language = Lang::getName();
    $_ADDONLANG = [];

    if ($language === '') {
        $language = $lang;
    }

    if ($language) {
        $addonLangFile = ROOTDIR . '/modules/servers/ArkhostVPSAG/lang/' . $language . '.php';
    
        if (file_exists($addonLangFile)) {
            swapLang($language);

            ob_start();
            require $addonLangFile;
            ob_end_clean();
        }
    }

    if (count($_ADDONLANG) === 0) {
        $addonLangFile = ROOTDIR . '/modules/servers/ArkhostVPSAG/lang/' . $lang . '.php';

        if (file_exists($addonLangFile)) {
            swapLang($lang);
            
            ob_start();
            require $addonLangFile;
            ob_end_clean();
        }
    }

    if (count($_ADDONLANG) === 0) {
        $addonLangFile = ROOTDIR . '/modules/servers/ArkhostVPSAG/lang/english.php';

        if (file_exists($addonLangFile)) {
            ob_start();
            require $addonLangFile;
            ob_end_clean();
        }
    }

    return $_ADDONLANG;
}
