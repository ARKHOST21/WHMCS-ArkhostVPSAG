<?php
/**
 * WHMCS Hook - Hide Default Product Details for ArkhostVPSAG
 *
 * Installation: Copy this file to /path/to/whmcs/includes/hooks/
 *
 * @package     WHMCS
 * @version     1.4
 * @copyright   Copyright (c) ArkHost 2025
 * @author      ArkHost <support@arkhost.com>
 * @link        https://arkhost.com
 */

if (!defined('WHMCS')) {
    die('This file cannot be accessed directly');
}

use WHMCS\Database\Capsule;

/**
 * Hide default WHMCS product details for ArkhostVPSAG products in client area
 * This applies to all product statuses including suspended services
 */
add_hook('ClientAreaPage', 1, function($vars) {
    // Check if we're on a product details page
    if ($vars['templatefile'] !== 'clientareaproductdetails') {
        return;
    }

    // Get the service ID from the request
    $serviceId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    if (!$serviceId) {
        return;
    }

    // Check if this service uses the ArkhostVPSAG module
    try {
        $service = Capsule::table('tblhosting')
            ->where('id', $serviceId)
            ->first();

        if (!$service || $service->servertype !== 'ArkhostVPSAG') {
            return;
        }
    } catch (Exception $e) {
        // Fail silently if there's a database error
        return;
    }

    // Inject CSS to hide WHMCS default product details for this module
    // This will work regardless of service status (active, suspended, terminated, etc.)
    return <<<HTML
<style>
    /* Hide WHMCS default product details (Domain, Username, Server Name, IP, Visit Website) for ArkhostVPSAG */
    #domain > .row {
        display: none !important;
    }
    #domain > br {
        display: none !important;
    }
    #domain > p {
        display: none !important;
    }
</style>
HTML;
});
