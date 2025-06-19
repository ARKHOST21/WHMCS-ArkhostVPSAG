{*
 *	WHMCS Server Module - VPSAG
 *	@package     WHMCS
 *	@copyright   ArkHost 2024
 *	@link        https://arkhost.com
 *	@author      ArkHost <support@arkhost.com>
 *}



<style>
    .arkhost-vps-container {
        font-family: 'Arial', sans-serif;
        margin: 15px 0;
    }
    .arkhost-vps-container .title-block {
        color: #575d6f;
        margin-top: 20px;
        font-size: 16px;
        font-weight: 600;
    }
    .arkhost-vps-container .dashboard-value {
        font-size: 18px;
        color: #3c7fb4;
    }
    .arkhost-vps-container .usage-details {
        font-size: 14px;
        color: #888;
        margin-top: 5px;
    }
    .arkhost-vps-container .progress {
        height: 20px;
        margin-bottom: 20px;
    }
    .arkhost-vps-container .nav-tabs {
        border-bottom: 1px solid #dee2e6;
    }
    .arkhost-vps-container .nav-tabs .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 500;
        border-radius: 12px 12px 0 0;
        padding: 12px 20px;
        transition: all 0.2s ease;
        margin-right: 4px;
    }
    .arkhost-vps-container .nav-tabs .nav-link:hover {
        background-color: #f8f9fa;
        color: #495057;
    }
    .arkhost-vps-container .nav-tabs .nav-link.active {
        background-color: #e9ecef;
        color: #495057;
        border-radius: 12px 12px 0 0;
    }
    .arkhost-vps-container .overview-label {
        color: #575d6f;
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 14px;
    }
    .arkhost-vps-container .submit-btn {
        background: linear-gradient(135deg, #3c7fb4 0%, #2d5a87 100%);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .arkhost-vps-container .danger-btn {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .arkhost-vps-container .head {
        border-bottom: 2px solid #3c7fb4;
        margin-bottom: 20px;
        padding-bottom: 15px;
        margin-top: 10px;
    }
    .arkhost-vps-container .head img {
        width: 32px;
        height: 32px;
        margin-right: 10px;
        margin-top: -8px;
        vertical-align: middle;
    }
    .arkhost-vps-container .v-tabs-container .nav-link {
        padding: 10px 16px;
        margin: 3px 0;
        border-radius: 12px;
        transition: all 0.2s ease;
        color: #6c757d;
        font-weight: 500;
        text-decoration: none;
        display: block;
    }
    .arkhost-vps-container .v-tabs-container .nav-link:hover {
        background-color: #f8f9fa;
        color: #495057;
        text-decoration: none;
    }
    .arkhost-vps-container .v-tabs-container .nav-link.active {
        background-color: #e9ecef;
        color: #495057;
    }
    .arkhost-vps-container .os_badge {
        margin: 8px;
        border-radius: 16px;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        min-height: 140px;
        width: 100%;
        max-width: 400px !important;
        background: #ffffff;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        position: relative;
        z-index: 1;
    }
    
    .arkhost-vps-container .os_badge:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 40px rgba(60, 127, 180, 0.15);
        z-index: 10;
    }
    
    .arkhost-vps-container .os_badge .dropdown-toggle {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border: 2px solid #e9ecef;
        border-radius: 16px;
        padding: 24px 20px;
        transition: all 0.3s ease;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        justify-content: center;
        height: 100%;
        min-height: 140px;
    }
    

    
    .arkhost-vps-container .os_badge .dropdown-toggle:hover {
        border-color: #3c7fb4;
        background: linear-gradient(135deg, #ffffff 0%, #f0f4f8 100%);
    }
    
    .arkhost-vps-container .os_badge .media-body {
        min-width: 0;
        flex: 1;
        z-index: 2;
        position: relative;
        margin-top: 6px;
        text-align: center;
    }
    
    .arkhost-vps-container .os_badge .distro_name {
        font-size: 1.1rem;
        line-height: 1.3;
        margin-bottom: 4px;
        word-wrap: break-word;
        overflow-wrap: break-word;
        font-weight: 600;
        color: #2c3e50;
    }
    
    .arkhost-vps-container .os_badge .version {
        font-size: 0.85rem;
        line-height: 1.2;
        color: #6c757d;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .arkhost-vps-container .distro_img {
        width: 48px;
        height: 48px;
        margin-right: 0;
        margin-top: 8px;
        margin-bottom: 6px;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        z-index: 2;
        position: relative;
    }
    
    .arkhost-vps-container .os_badge:hover .distro_img {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    }
    
    /* Dropdown Menu Enhancements */
    .arkhost-vps-container .os_badge .dropdown-menu {
        border-radius: 12px;
        border: none;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
        padding: 8px 0;
        margin-top: 8px;
        z-index: 1050;
        min-width: 100%;
    }
    
    .arkhost-vps-container .os_badge .dropdown-item {
        padding: 12px 20px;
        transition: all 0.2s ease;
        color: #495057;
        font-weight: 500;
    }
    
    .arkhost-vps-container .os_badge .dropdown-item:hover {
        background: linear-gradient(135deg, #3c7fb4 0%, #2d5a87 100%);
        color: white;
        transform: translateX(4px);
    }
    #loading {
        text-align: center;
        padding: 2rem;
    }
    
    /* Rounded borders for containers */
    .arkhost-vps-container .border {
        border-radius: 12px !important;
        border: 1px solid #e3e6f0 !important;
    }
    
    /* VPS Control Button Styles */
    .arkhost-vps-container .vps-control-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 8px 16px;
        border-radius: 20px;
        margin: 8px 4px;
        transition: all 0.2s ease;
        text-decoration: none;
        color: white;
        font-size: 0.9rem;
        font-weight: 500;
        min-height: 36px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        border: none;
        position: relative;
        overflow: hidden;
    }
    
    .arkhost-vps-container .vps-control-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        text-decoration: none;
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn:active {
        transform: translateY(0);
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .arkhost-vps-container .vps-control-btn.start-btn {
        background: linear-gradient(45deg, #28a745, #34ce57);
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn.start-btn:hover {
        background: linear-gradient(45deg, #218838, #28a745);
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn.stop-btn {
        background: linear-gradient(45deg, #dc3545, #ff4757);
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn.stop-btn:hover {
        background: linear-gradient(45deg, #c82333, #dc3545);
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn.restart-btn {
        background: linear-gradient(45deg, #fd7e14, #ff9f43);
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn.restart-btn:hover {
        background: linear-gradient(45deg, #e65100, #fd7e14);
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn.vnc-btn {
        background: linear-gradient(45deg, #6f42c1, #8854d0);
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn.vnc-btn:hover {
        background: linear-gradient(45deg, #5a32a3, #6f42c1);
        color: white;
    }
    
    .arkhost-vps-container .vps-control-btn.vnc-btn img {
        width: 18px;
        height: 18px;
        margin-right: 6px;
    }
    
    .arkhost-vps-container .vps-control-btn i {
        margin-right: 6px;
        font-size: 1rem;
    }
    
    /* Mobile Responsive - Stack VPS Control Buttons Vertically */
    @media (max-width: 767px) {
        .arkhost-vps-container .vps-control-btn {
            display: block;
            width: 100%;
            margin: 8px 0;
            text-align: center;
        }
    }
    
    /* Graph Time Selection Buttons */
    .arkhost-vps-container .graph-time-btn {
        background: #f8f9fa;
        color: #6c757d;
        border: 1px solid #dee2e6;
        padding: 8px 14px;
        border-radius: 12px;
        margin: 0 3px;
        font-weight: 500;
        transition: all 0.2s ease;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        font-size: 0.9rem;
    }
    
    .arkhost-vps-container .graph-time-btn:hover {
        background: #e9ecef;
        text-decoration: none;
    }
    
    .arkhost-vps-container .graph-time-btn.active {
        background: #e9ecef;
        color: #495057;
        border-color: #ced4da;
    }
    
    .arkhost-vps-container .graph-time-btn.active:hover {
        background: #dee2e6;
    }
    
    /* OS Selection Enhancements */
    .arkhost-vps-container .os_badge {
        margin-bottom: 20px;
    }
    
    .arkhost-vps-container .os_badge .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-bottom: 0;
        border-left: .3em solid transparent;
        margin-bottom: 10px;
    }
    
    .arkhost-vps-container .os_badge .dropdown-toggle:hover::after {
        border-top-color: #495057;
    }
    
    .arkhost-vps-container .os_badge .dropdown-toggle.btn-success {
        border: 2px solid #28a745 !important;
        background: linear-gradient(135deg, #f8fff9 0%, #e8f5e8 100%);
        box-shadow: 0 6px 25px rgba(40, 167, 69, 0.3);
        color: #155724 !important;
        position: relative;
    }
    
    .arkhost-vps-container .os_badge .dropdown-toggle.btn-success::before {
        content: '✓';
        position: absolute;
        top: 8px;
        right: 12px;
        font-size: 18px;
        color: #28a745;
        font-weight: bold;
    }
    
    .arkhost-vps-container .os_badge .dropdown-toggle.btn-success .distro_name {
        color: #155724 !important;
        font-weight: 600;
    }
    
    .arkhost-vps-container .os_badge .dropdown-toggle.btn-success .version {
        color: #155724 !important;
    }
    
    .arkhost-vps-container .os_badge .dropdown-item.active {
        background-color: #007bff !important;
        color: white !important;
        font-weight: bold;
        position: relative;
    }
    
    .arkhost-vps-container .os_badge .dropdown-item.active::after {
        content: "✓";
        position: absolute;
        right: 15px;
        font-weight: bold;
        color: white;
    }
    
    .arkhost-vps-container .os_badge .dropdown-item:hover {
        background-color: #007bff;
        color: white !important;
    }
    
    .arkhost-vps-container .os_badge .dropdown-item.active:hover {
        background-color: #0056b3 !important;
        color: white !important;
    }
    
    /* Fix dropdown menu positioning and styling */
    .arkhost-vps-container .os_badge .dropdown-menu {
        z-index: 1050;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        padding: 8px 0;
        margin-top: 4px;
        max-height: 300px;
        overflow-y: auto;
        overflow-x: hidden;
    }
    
    .arkhost-vps-container .os_badge .dropdown-item {
        padding: 8px 16px;
        font-size: 0.9rem;
        transition: all 0.2s ease;
        border: none;
        background: none;
    }
    
    .arkhost-vps-container .os_badge .version .fa-check {
        color: #28a745 !important;
        margin-left: 5px;
        animation: checkmark-appear 0.3s ease-in;
    }
    
    @keyframes checkmark-appear {
        0% { opacity: 0; transform: scale(0.5); }
        100% { opacity: 1; transform: scale(1); }
    }
    
    /* Custom Notification System */
    .arkhost-notification {
        position: fixed;
        top: 20px;
        right: 20px;
        min-width: 300px;
        max-width: 400px;
        z-index: 9999;
        padding: 16px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        color: white;
        font-weight: 500;
        transform: translateX(450px);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 12px;
        font-family: 'Arial', sans-serif;
    }
    
    .arkhost-notification.show {
        transform: translateX(0);
    }
    
    .arkhost-notification.success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    }
    
    .arkhost-notification.error {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
    }
    
    .arkhost-notification.warning {
        background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%);
        color: #212529;
    }
    
    .arkhost-notification.info {
        background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);
    }
    
    .arkhost-notification i {
        font-size: 20px;
        flex-shrink: 0;
    }
    
    .arkhost-notification .close-btn {
        margin-left: auto;
        background: none;
        border: none;
        color: inherit;
        font-size: 18px;
        cursor: pointer;
        padding: 0;
        opacity: 0.8;
        transition: opacity 0.2s ease;
    }
    
    .arkhost-notification .close-btn:hover {
        opacity: 1;
    }
    
    /* Custom Confirm Dialog */
    .arkhost-confirm-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }
    
    .arkhost-confirm-overlay.show {
        opacity: 1;
        visibility: visible;
    }
    
    .arkhost-confirm-dialog {
        background: white;
        border-radius: 12px;
        padding: 24px;
        max-width: 400px;
        width: 90%;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        transform: scale(0.8);
        transition: transform 0.3s ease;
        font-family: 'Arial', sans-serif;
    }
    
    .arkhost-confirm-overlay.show .arkhost-confirm-dialog {
        transform: scale(1);
    }
    
    .arkhost-confirm-title {
        font-size: 18px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .arkhost-confirm-message {
        color: #6c757d;
        margin-bottom: 20px;
        line-height: 1.5;
    }
    
    .arkhost-confirm-buttons {
        display: flex;
        gap: 12px;
        justify-content: flex-end;
    }
    
    .arkhost-confirm-btn {
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
        font-family: inherit;
    }
    
    .arkhost-confirm-btn.cancel {
        background: #6c757d;
        color: white;
    }
    
    .arkhost-confirm-btn.cancel:hover {
        background: #5a6268;
    }
    
    .arkhost-confirm-btn.confirm {
        background: #dc3545;
        color: white;
    }
    
    .arkhost-confirm-btn.confirm:hover {
        background: #c82333;
    }
</style>

<script type="text/javascript">
    var productURL = '{$WEB_ROOT}/clientarea.php?action=productdetails&id={$serviceid}';
    var serverInfoInitial = JSON.parse('{$serverInfo|@json_encode}');
    var lang = {
        moduleactionfailed: 'Action failed!',
        moduleactionsuccess: 'Action completed successfully',
        backups: {
            available: 'Available',
            creating: 'Creating...',
            error: 'Error',
            automatic: 'Automatic',
            manual: 'Manual'
        },
        confirm: {
            stop: {
                title: "{$_LANG['Confirm']['Stop']['Title']|escape:'javascript'|default:'Stop VPS'}",
                message: "{$_LANG['Confirm']['Stop']['Message']|escape:'javascript'|default:'Do you want to stop this VPS. This will shutdown the server.'}"
            },
            restart: {
                title: "{$_LANG['Confirm']['Restart']['Title']|escape:'javascript'|default:'Restart VPS'}",
                message: "{$_LANG['Confirm']['Restart']['Message']|escape:'javascript'|default:'Do you want to restart this VPS. This will reboot the server.'}"
            },
            createBackup: {
                title: "{$_LANG['Confirm']['CreateBackup']['Title']|escape:'javascript'|default:'Create Backup'}",
                message: "{$_LANG['Confirm']['CreateBackup']['Message']|escape:'javascript'|default:'Do you want to create a backup. This may take several minutes.'}"
            },
            deleteBackup: {
                title: "{$_LANG['Confirm']['DeleteBackup']['Title']|escape:'javascript'|default:'Delete Backup'}",
                message: "{$_LANG['Confirm']['DeleteBackup']['Message']|escape:'javascript'|default:'Do you want to delete this backup. This action cannot be undone.'}"
            },
            restoreBackup: {
                title: "{$_LANG['Confirm']['RestoreBackup']['Title']|escape:'javascript'|default:'Restore Backup'}",
                message: "{$_LANG['Confirm']['RestoreBackup']['Message']|escape:'javascript'|default:'Do you want to restore this backup. This will overwrite all current data and cannot be undone.'}"
            }
        }
    };
    
    // VPS control functions
    console.log('Defining VPS control functions...');
    
    function confirmStop() {
        console.log('confirmStop called');
        showConfirm(lang.confirm.stop.message, lang.confirm.stop.title, function() {
            ArkHostVPS_API('Stop', true);
        });
        return false;
    }
    
    function confirmRestart() {
        console.log('confirmRestart called');
        showConfirm(lang.confirm.restart.message, lang.confirm.restart.title, function() {
            ArkHostVPS_API('Reboot', true);
        });
        return false;
    }
    
    console.log('VPS control functions defined!', typeof confirmRestart);
    
    // Custom notification functions
    function showNotification(message, type, duration) {
        type = type || 'success';
        duration = duration || 4000;
        
        // Remove existing notifications
        var existing = document.querySelectorAll('.arkhost-notification');
        for (var i = 0; i < existing.length; i++) {
            existing[i].remove();
        }
        
        // Create notification element
        var notification = document.createElement('div');
        notification.className = 'arkhost-notification ' + type;
        
        // Set icon based on type
        var icon = 'fa-check-circle';
        if (type === 'error') icon = 'fa-exclamation-circle';
        else if (type === 'warning') icon = 'fa-exclamation-triangle';
        else if (type === 'info') icon = 'fa-info-circle';
        
        notification.innerHTML = '<i class="fa ' + icon + '"></i><span>' + message + '</span><button class="close-btn" onclick="this.parentElement.remove()"><i class="fa fa-times"></i></button>';
        
        // Add to document
        document.body.appendChild(notification);
        
        // Trigger animation
        setTimeout(function() {
            notification.classList.add('show');
        }, 100);
        
        // Auto remove
        setTimeout(function() {
            notification.classList.remove('show');
            setTimeout(function() {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 300);
        }, duration);
    }
    
    function showConfirm(message, title, onConfirm) {
        title = title || 'Confirm Action';
        
        // Remove existing confirms
        var existing = document.querySelectorAll('.arkhost-confirm-overlay');
        for (var i = 0; i < existing.length; i++) {
            existing[i].remove();
        }
        
        // Create confirm dialog
        var overlay = document.createElement('div');
        overlay.className = 'arkhost-confirm-overlay';
        
        overlay.innerHTML = '<div class="arkhost-confirm-dialog"><div class="arkhost-confirm-title"><i class="fa fa-exclamation-triangle" style="color: #ffc107;"></i>' + title + '</div><div class="arkhost-confirm-message">' + message + '</div><div class="arkhost-confirm-buttons"><button class="arkhost-confirm-btn cancel">{$_LANG['Confirm']['Cancel']|escape:'javascript'|default:'Cancel'}</button><button class="arkhost-confirm-btn confirm">{$_LANG['Confirm']['Confirm']|escape:'javascript'|default:'Confirm'}</button></div></div>';
        
        // Add event listeners
        var cancelBtn = overlay.querySelector('.cancel');
        var confirmBtn = overlay.querySelector('.confirm');
        
        cancelBtn.onclick = function() {
            overlay.classList.remove('show');
            setTimeout(function() {
                if (overlay.parentElement) {
                    overlay.remove();
                }
            }, 300);
        };
        
        confirmBtn.onclick = function() {
            overlay.classList.remove('show');
            setTimeout(function() {
                if (overlay.parentElement) {
                    overlay.remove();
                }
            }, 300);
            if (onConfirm) {
                onConfirm();
            }
        };
        
        // Close on backdrop click
        overlay.onclick = function(e) {
            if (e.target === overlay) {
                overlay.classList.remove('show');
                setTimeout(function() {
                    if (overlay.parentElement) {
                        overlay.remove();
                    }
                }, 300);
            }
        };
        
        // Add to document and show
        document.body.appendChild(overlay);
        setTimeout(function() {
            overlay.classList.add('show');
        }, 100);
    }
    
    // Helper functions for API calls via WHMCS (use existing jQuery)
    function ArkHostVPS_API(action, showAlert, params) {
        if (showAlert === undefined) showAlert = true;
        if (params === undefined) params = {};
        
        var postData = Object.assign({ 
            action: 'productdetails',
            id: '{$serviceid}',
            modop: 'custom',
            a: 'ClientAreaAPI',
            api: action,
            token: '{$token}' // Add CSRF token to prevent session timeouts
        }, params);
        
        // Use existing WHMCS jQuery with proper headers
        if (typeof jQuery !== 'undefined') {
            jQuery.post({
                url: '{$WEB_ROOT}/clientarea.php',
                data: postData,
                dataType: 'json',
                beforeSend: function(xhr) {
                    // Add CSRF token header for additional security
                    xhr.setRequestHeader('X-CSRF-Token', '{$token}');
                },
                success: function(data) {
                    // Check for success - WHMCS might return different success indicators
                    var isSuccess = (data.result === 'success') || 
                                   (data && typeof data === 'object' && !data.error && !data.message) ||
                                   (Array.isArray(data)) ||
                                   (data && Object.keys(data).some(key => !isNaN(key))); // Has numeric keys
                    
                    if (isSuccess) {
                        if (showAlert) showNotification(lang.moduleactionsuccess, 'success');
                        // Handle specific responses
                        if (action === 'List backups') {
                            updateBackupTable(data);
                        }
                        if (action === 'Create backup') {
                            // Refresh backup list after creation
                            setTimeout(function() {
                                ArkHostVPS_API('List backups', false);
                            }, 1000);
                        }
                        if (action === 'Delete backup') {
                            // Refresh backup list after deletion
                            setTimeout(function() {
                                ArkHostVPS_API('List backups', false);
                            }, 1000);
                        }
                        if (action === 'Add Firewall rules') {
                            // Clear the form
                            document.getElementById('firewallAction').value = 'ACCEPT';
                            document.getElementById('firewallPort').value = '';
                            document.getElementById('firewallProtocol').value = 'ANY';
                            document.getElementById('firewallSource').value = '';
                            document.getElementById('firewallNote').value = '';
                            
                            // Refresh firewall rules after adding
                            setTimeout(function() {
                                ArkHostVPS_API('Get Firewall rules', false);
                            }, 1000);
                        }
                        if (action === 'Delete Firewall rule') {
                            // Refresh firewall rules after deletion
                            setTimeout(function() {
                                ArkHostVPS_API('Get Firewall rules', false);
                            }, 1000);
                        }
                        if (action === 'Get Firewall rules') updateFirewallTable(data);
                        if (action === 'ISO Images') updateISOSelect(data.iso || data);
                        if (action === 'Graphs') updateGraphsDisplay(data);

                        // Refresh page for server state changes
                        if (['Start', 'Stop', 'Reboot', 'Reinstall'].indexOf(action) !== -1) {
                            setTimeout(function() { location.reload(); }, 2000);
                        }
                    } else {
                        if (showAlert) showNotification(lang.moduleactionfailed + ': ' + (data.message || 'Unknown error'), 'error');
                        // Hide loading for graphs
                        if (action === 'Graphs') {
                            document.getElementById('graphs-loading').style.display = 'none';
                            document.getElementById('graphs-container').style.opacity = '1';
                        }
                    }
                },
                error: function(xhr, status, error) {
                    if (showAlert) showNotification(lang.moduleactionfailed + ': Network error', 'error');
                    // Hide loading for graphs
                    if (action === 'Graphs') {
                        document.getElementById('graphs-loading').style.display = 'none';
                        document.getElementById('graphs-container').style.opacity = '1';
                    }
                }
            });
        }
        
        return false;
    }
    
    function updateBackupTable(data) {
        var tableBody = document.querySelector('#backupTable tbody');
        tableBody.innerHTML = '';
        
        // Handle the VPSAG API response format
        var backupList = [];
        
        // Handle different response formats
        if (Array.isArray(data)) {
            // Direct array response
            backupList = data;
        } else if (data && typeof data === 'object') {
            // Check if there are numeric keys (0, 1, 2, etc.) indicating backup array
            var keys = Object.keys(data);
            var numericKeys = keys.filter(function(key) { return !isNaN(key); });
            if (numericKeys.length > 0) {
                backupList = numericKeys.map(function(key) { return data[key]; });
            } else if (data.result === 'success') {
                // WHMCS wrapper with result='success' - look for numeric keys excluding 'result'
                var filteredKeys = keys.filter(function(key) { return !isNaN(key) && key !== 'result'; });
                if (filteredKeys.length > 0) {
                    backupList = filteredKeys.map(function(key) { return data[key]; });
                }
            }
        }
        
        if (backupList.length > 0) {
            backupList.forEach(function(backup) {
                if (backup && backup.file) {
                    var row = document.createElement('tr');
                    
                    // Use the date field if available, otherwise extract from filename
                    var backupDate = backup.date || 'N/A';
                    if (backupDate !== 'N/A' && backupDate.includes(' ')) {
                        // Format the date to show only the date part (YYYY-MM-DD)
                        backupDate = backupDate.split(' ')[0];
                    }
                    
                    // Determine backup type using language strings
                    var backupType = backup.type === 'auto' ? lang.backups.automatic : lang.backups.manual;
                    
                    // Determine status badge using language strings
                    var statusBadge = '<span class="badge badge-success">' + lang.backups.available + '</span>';
                    if (backup.status === 'running') {
                        statusBadge = '<span class="badge badge-warning">' + lang.backups.creating + '</span>';
                    } else if (backup.status !== 'ok') {
                        statusBadge = '<span class="badge badge-danger">' + lang.backups.error + '</span>';
                    }
                    
                    row.innerHTML = 
                        '<td>' + backupDate + '</td>' +
                        '<td>' + (backup.size || 'N/A') + '</td>' +
                        '<td>' + backupType + '</td>' +
                        '<td>' + statusBadge + '</td>' +
                        '<td style="white-space: nowrap;">' +
                            '<button class="btn btn-xs btn-primary mr-1" style="padding: 4px 8px; font-size: 12px;" onclick="restoreBackup(\'' + backup.file + '\'); return false;" title="Restore">' +
                                '<i class="fa fa-undo"></i>' +
                            '</button>' +
                            '<button class="btn btn-xs btn-danger" style="padding: 4px 8px; font-size: 12px;" onclick="deleteBackup(\'' + backup.file + '\'); return false;" title="Delete">' +
                                '<i class="fa fa-trash"></i>' +
                            '</button>' +
                        '</td>';
                    tableBody.appendChild(row);
                }
            });
        } else {
            tableBody.innerHTML = '<tr><td colspan="5" class="text-center text-muted">No backups found</td></tr>';
        }
    }
    
    function createBackup() {
        showConfirm(
            lang.confirm.createBackup.message,
            lang.confirm.createBackup.title,
            function() {
                ArkHostVPS_API('Create backup', true);
            }
        );
        return false;
    }
    
    function deleteBackup(filename) {
        showConfirm(
            lang.confirm.deleteBackup.message,
            lang.confirm.deleteBackup.title,
            function() {
                ArkHostVPS_API('Delete backup', true, { file: filename });
            }
        );
        return false;
    }
    
    function restoreBackup(filename) {
        showConfirm(
            lang.confirm.restoreBackup.message,
            lang.confirm.restoreBackup.title,
            function() {
                ArkHostVPS_API('Restore backup', true, { file: filename });
            }
        );
        return false;
    }
    
    function updateFirewallTable(data) {
        // Implement firewall table update
        var tableBody = document.querySelector('#firewallTable tbody');
        if (!tableBody) return;
        
        // Clear existing rules (keep the add row)
        var rows = tableBody.querySelectorAll('tr');
        for (var i = rows.length - 1; i > 0; i--) {
            if (!rows[i].querySelector('#firewallAction')) {
                rows[i].remove();
            }
        }
        
        // Handle the API response format
        var rulesList = [];
        
        // Handle different response formats
        if (Array.isArray(data)) {
            // Direct array response
            rulesList = data;
        } else if (data && typeof data === 'object') {
            // Check if there are numeric keys (0, 1, 2, etc.) indicating rule array
            var keys = Object.keys(data);
            var numericKeys = keys.filter(function(key) { return !isNaN(key); });
            if (numericKeys.length > 0) {
                rulesList = numericKeys.map(function(key) { return data[key]; });
            } else if (data.rules && Array.isArray(data.rules)) {
                // Rules might be in a 'rules' property
                rulesList = data.rules;
            } else if (data.result === 'success') {
                // WHMCS wrapper with result='success' - look for numeric keys excluding 'result'
                var filteredKeys = keys.filter(function(key) { return !isNaN(key) && key !== 'result'; });
                if (filteredKeys.length > 0) {
                    rulesList = filteredKeys.map(function(key) { return data[key]; });
                }
            }
        }
        
        // Add firewall rules if any exist
        if (rulesList.length > 0) {
            rulesList.forEach(function(rule) {
                if (rule && rule.id) {
                    var row = document.createElement('tr');
                    row.innerHTML = 
                        '<td>' + (rule.action || 'N/A') + '</td>' +
                        '<td>' + (rule.port || 'N/A') + '</td>' +
                        '<td>' + (rule.protocol || 'N/A') + '</td>' +
                        '<td>' + (rule.source || 'N/A') + '</td>' +
                        '<td>' + (rule.note || 'N/A') + '</td>' +
                        '<td>' +
                            '<a href="#" onclick="ArkHostVPS_API(\'Delete Firewall rule\', true, { rule_id: \'' + rule.id + '\' }); return false;" title="Delete">' +
                                '<i class="fa fa-trash text-danger"></i>' +
                            '</a>' +
                        '</td>';
                    tableBody.insertBefore(row, tableBody.lastElementChild);
                }
            });
        }
    }
    
    function updateISOSelect(data) {
        var select = document.getElementById('isoID');
        if (!select) return;
        
        // Clear existing options except the first one
        select.innerHTML = '<option value="">Select ISO Image...</option>';
        
        // Function to check if a value looks like a valid ISO
        function isValidISO(value, name) {
            if (!value || !name) return false;
            
            // Convert to strings for comparison
            var valueStr = String(value).toLowerCase();
            var nameStr = String(name).toLowerCase();
            
            // Filter out common non-ISO values
            var invalidValues = ['success', 'error', 'status', 'result', 'message', 'data'];
            if (invalidValues.includes(valueStr) || invalidValues.includes(nameStr)) {
                return false;
            }
            
            // For VPSAG, if it has an ID and iso_image, it's valid
            return true;
        }
        
        // Handle different possible response formats from VPSAG API
        if (data) {
            // Format 1: Array of ISO objects (VPSAG format)
            if (Array.isArray(data)) {
                data.forEach(function(iso) {
                    if (iso && iso.id && iso.iso_image) {
                        var isoValue = iso.id;
                        var isoName = iso.iso_image;
                        
                        if (isValidISO(isoValue, isoName)) {
                            var option = document.createElement('option');
                            option.value = isoValue;
                            option.textContent = isoName;
                            select.appendChild(option);
                        }
                    }
                });
            }
            // Format 2: Object with ISO IDs as keys
            else if (typeof data === 'object') {
                Object.keys(data).forEach(function(key) {
                    var iso = data[key];
                    if (iso && typeof iso === 'object') {
                        var isoValue = iso.id || iso.iso_id || iso.filename || key;
                        var isoName = iso.name || iso.filename || iso.label || key;
                        
                        if (isValidISO(isoValue, isoName)) {
                            var option = document.createElement('option');
                            option.value = isoValue;
                            option.textContent = isoName;
                            select.appendChild(option);
                        }
                    } else if (typeof iso === 'string') {
                        // Simple key-value format
                        if (isValidISO(key, iso)) {
                            var option = document.createElement('option');
                            option.value = key;
                            option.textContent = iso;
                            select.appendChild(option);
                        }
                    }
                });
            }
        }
        
        // If no ISOs were added, show a message
        if (select.options.length === 1) {
            var option = document.createElement('option');
            option.value = '';
            option.textContent = 'No ISO images available';
            option.disabled = true;
            select.appendChild(option);
        }
    }
    
    // Helper function to resize graph images
    function resizeGraphImage(htmlContent) {
        if (htmlContent.includes('<img')) {
            // If it's HTML with img tag, modify the img tag to add our styling
            return htmlContent.replace(/<img([^>]*?)>/g, '<img$1 style="max-width: 96%; height: auto;">');
        }
        return htmlContent;
    }
    
    function updateGraphsDisplay(data) {
        // Hide loading indicator
        document.getElementById('graphs-loading').style.display = 'none';
        document.getElementById('graphs-container').style.opacity = '1';
        
        // Update graphs if data is available
        if (data.graphs) {
            // Update CPU graph
            if (data.graphs.cpu_img) {
                // Check if it's already HTML or just a URL
                if (data.graphs.cpu_img.includes('<img')) {
                    document.getElementById('cpu-graph').innerHTML = resizeGraphImage(data.graphs.cpu_img);
                } else {
                    document.getElementById('cpu-graph').innerHTML = '<img src="' + data.graphs.cpu_img + '" style="max-width: 96%; height: auto;" alt="CPU Usage">';
                }
            } else {
                document.getElementById('cpu-graph').innerHTML = '<p class="text-muted">CPU graph not available</p>';
            }
            
            // Update RAM graph (corrected ID)
            if (data.graphs.mem_img) {
                // Check if it's already HTML or just a URL
                if (data.graphs.mem_img.includes('<img')) {
                    document.getElementById('ram-graph').innerHTML = resizeGraphImage(data.graphs.mem_img);
                } else {
                    document.getElementById('ram-graph').innerHTML = '<img src="' + data.graphs.mem_img + '" style="max-width: 96%; height: auto;" alt="RAM Usage">';
                }
            } else {
                document.getElementById('ram-graph').innerHTML = '<p class="text-muted">RAM graph not available</p>';
            }
            
            // Update Network graph
            if (data.graphs.net_img) {
                // Check if it's already HTML or just a URL
                if (data.graphs.net_img.includes('<img')) {
                    document.getElementById('network-graph').innerHTML = resizeGraphImage(data.graphs.net_img);
                } else {
                    document.getElementById('network-graph').innerHTML = '<img src="' + data.graphs.net_img + '" style="max-width: 96%; height: auto;" alt="Network Usage">';
                }
            } else {
                document.getElementById('network-graph').innerHTML = '<p class="text-muted">Network graph not available</p>';
            }
            
            // Update Disk graph
            if (data.graphs.disk_img) {
                // Check if it's already HTML or just a URL
                if (data.graphs.disk_img.includes('<img')) {
                    document.getElementById('disk-graph').innerHTML = resizeGraphImage(data.graphs.disk_img);
                } else {
                    document.getElementById('disk-graph').innerHTML = '<img src="' + data.graphs.disk_img + '" style="max-width: 96%; height: auto;" alt="Disk Usage">';
                }
            } else {
                document.getElementById('disk-graph').innerHTML = '<p class="text-muted">Disk graph not available</p>';
            }
        } else {
            document.getElementById('cpu-graph').innerHTML = '<p class="text-muted">No graph data available</p>';
            document.getElementById('ram-graph').innerHTML = '<p class="text-muted">No graph data available</p>';
            document.getElementById('network-graph').innerHTML = '<p class="text-muted">No graph data available</p>';
            document.getElementById('disk-graph').innerHTML = '<p class="text-muted">No graph data available</p>';
        }
    }
            
    // Load initial graphs when tab is first opened
    var graphsLoaded = false;
    function loadInitialGraphs() {
        if (!graphsLoaded) {
            setTimeout(function() {
                loadGraphs('day', document.querySelector('.graph-time-btn.active'));
                graphsLoaded = true;
            }, 100);
        }
    }
    
    // Load backups when tab is first opened
    var backupsLoaded = false;
    function loadBackups() {
        if (!backupsLoaded) {
            // Show loading state
            var tableBody = document.querySelector('#backupTable tbody');
            if (tableBody) {
                tableBody.innerHTML = '<tr><td colspan="5" class="text-center"><i class="fa fa-spinner fa-spin"></i> Loading backups...</td></tr>';
            }
            
            setTimeout(function() {
                ArkHostVPS_API('List backups', false);
                backupsLoaded = true;
            }, 100);
        }
    }
    
    // Function to load graphs for different time periods
    function loadGraphs(timePeriod, buttonElement) {
        // Update active button
        document.querySelectorAll('.graph-time-btn').forEach(btn => btn.classList.remove('active'));
        buttonElement.classList.add('active');
        
        // Show loading indicator
        document.getElementById('graphs-loading').style.display = 'block';
        document.getElementById('graphs-container').style.opacity = '0.5';
        
        // Use the existing ArkHostVPS_API function which now handles sessions properly
        ArkHostVPS_API('Graphs', false, { time: timePeriod });
    }
    
    function ArkHostVPS_ChooseOS(element) {
        if (typeof jQuery !== 'undefined') {
            var osId = jQuery(element).data('os');
            var group = jQuery(element).data('group');
            jQuery('#newOS').val(osId);
            
            // FIRST: Reset ALL OS selections (clear all groups)
            jQuery('.os_badge .dropdown-toggle').removeClass('btn-success').addClass('btn-outline-secondary');
            jQuery('.os_badge .dropdown-item').removeClass('active bg-primary text-white');
            jQuery('.os_badge .version .fa-check').remove();
            jQuery('.os_badge .version').each(function() {
                var originalText = jQuery(this).text().replace(' ✓', '').replace(/\s*<i[^>]*><\/i>\s*/g, '');
                jQuery(this).text(originalText);
            });
            
            // THEN: Set the selected OS
            // Update the version text with the selected OS
            jQuery('#' + group + '-version').text(jQuery(element).text());
            
            // Add active class to the selected item
            jQuery(element).addClass('active bg-primary text-white');
            
            // Update the main button to show selected state
            var mainButton = jQuery('#' + group + '-os .dropdown-toggle');
            mainButton.removeClass('btn-outline-secondary').addClass('btn-success');
            
            // Add checkmark to show selection
            var versionSpan = jQuery('#' + group + '-version');
            versionSpan.append(' <i class="fa fa-check text-success"></i>');
            
            // Show/hide advanced options based on OS type
            var advancedOptions = document.getElementById('advancedReinstallOptions');
            if (advancedOptions) {
                // Hide advanced options for Windows (groups typically include 'windows', 'win', etc.)
                var isWindows = group.toLowerCase().includes('windows') || 
                               group.toLowerCase().includes('win') ||
                               jQuery(element).text().toLowerCase().includes('windows');
                
                if (isWindows) {
                    advancedOptions.style.display = 'none';
                    // Clear values when hiding
                    document.getElementById('reinstallSSHKey').value = '';
                    document.getElementById('reinstallScript').value = '';
                    document.getElementById('disableSSHPassword').checked = false;
                } else {
                    advancedOptions.style.display = 'block';
                    
                    // Update post-installation script placeholder based on OS type
                    var scriptTextarea = document.getElementById('reinstallScript');
                    if (scriptTextarea) {
                        var osName = jQuery(element).text().toLowerCase();
                        var groupName = group.toLowerCase();
                        
                        // Determine if it's Debian/Ubuntu based or RHEL/CentOS based
                        if (groupName.includes('debian') || groupName.includes('ubuntu') || 
                            osName.includes('debian') || osName.includes('ubuntu')) {
                            // Debian/Ubuntu based - use apt
                            scriptTextarea.placeholder = '#!/bin/bash\n# Example: Install and configure nginx\napt update && apt install -y nginx\nsystemctl enable nginx';
                        } else if (groupName.includes('centos') || groupName.includes('rhel') || 
                                   groupName.includes('rocky') || groupName.includes('alma') ||
                                   osName.includes('centos') || osName.includes('rhel') || 
                                   osName.includes('rocky') || osName.includes('alma')) {
                            // RHEL based - use yum/dnf
                            scriptTextarea.placeholder = '#!/bin/bash\n# Example: Install and configure nginx\nyum update -y && yum install -y nginx\nsystemctl enable nginx';
                        } else if (groupName.includes('fedora') || osName.includes('fedora')) {
                            // Fedora - use dnf
                            scriptTextarea.placeholder = '#!/bin/bash\n# Example: Install and configure nginx\ndnf update -y && dnf install -y nginx\nsystemctl enable nginx';
                        } else {
                            // Generic example
                            scriptTextarea.placeholder = '#!/bin/bash\n# Example: Install packages based on your distribution\n# For Debian/Ubuntu: apt update && apt install -y package\n# For RHEL/CentOS: yum update -y && yum install -y package';
                        }
                    }
                }
            }
        }
        return false;
    }
    
    function ArkHostVPS_ShowPassword() {
        if (typeof jQuery !== 'undefined') {
            var input = jQuery('#vpsPassword');
            var icon = jQuery('#showPasswordIcon');
            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                input.attr('type', 'password');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        }
        return false;
    }
    
    function reinstallWithAdvancedOptions() {
        var osId = document.getElementById('newOS').value;
        if (!osId || osId === '0') {
            showNotification('Please select an operating system first.', 'warning');
            return false;
        }
        
        // Gather advanced options
        var params = { os: osId };
        
        var sshKey = document.getElementById('reinstallSSHKey').value.trim();
        if (sshKey) {
            params.ssh_key = sshKey;
        }
        
        var postScript = document.getElementById('reinstallScript').value.trim();
        if (postScript) {
            params.run_on_install = postScript;
        }
        
        var disableSSHPassword = document.getElementById('disableSSHPassword').checked;
        if (disableSSHPassword) {
            params.no_ssh_password = true;
        }
        
        // Call the API with all parameters
        ArkHostVPS_API('Reinstall', true, params);
        return false;
    }
    
    function refreshRAMUsage() {
        // Add spinning animation to the button
        var button = event.target.closest('button');
        var icon = button.querySelector('i');
        icon.classList.add('fa-spin');
        
        // Disable button temporarily
        button.disabled = true;
        
        // Make API call to get fresh server info
        var productURL = '{$WEB_ROOT}/clientarea.php?action=productdetails&id={$serviceid}';
        if (typeof jQuery !== 'undefined') {
            jQuery.get(productURL + '&modop=custom&a=ClientAreaAPI&api=Server Info&token={$token}', function(data) {
                if (data && data.ram_usage && data.ram) {
                    // Update RAM usage display
                    var ramUsageGB = (data.ram_usage / 1024 / 1024 / 1024);
                    var ramPercent = (ramUsageGB / data.ram) * 100;
                    
                    // Update progress bar
                    var ramBar = document.getElementById('ramPercentBar');
                    ramBar.style.width = Math.round(ramPercent) + '%';
                    ramBar.textContent = Math.round(ramPercent) + '%';
                    
                    // Update text display
                    var ramText = document.getElementById('ramPercentVal');
                    ramText.textContent = ramUsageGB.toFixed(1) + ' / ' + data.ram + ' GB';
                }
            }).always(function() {
                // Re-enable button and stop spinning
                icon.classList.remove('fa-spin');
                button.disabled = false;
            });
        }
        return false;
    }
    
    function refreshCPUUsage() {
        // Add spinning animation to the button
        var button = event.target.closest('button');
        var icon = button.querySelector('i');
        icon.classList.add('fa-spin');
        
        // Disable button temporarily
        button.disabled = true;
        
        // Make API call to get fresh server info
        var productURL = '{$WEB_ROOT}/clientarea.php?action=productdetails&id={$serviceid}';
        if (typeof jQuery !== 'undefined') {
            jQuery.get(productURL + '&modop=custom&a=ClientAreaAPI&api=Server Info&token={$token}', function(data) {
                if (data && typeof data.cpu_usage !== 'undefined') {
                                         // Update CPU usage display
                     var cpuPercent;
                     if (data.cpu_usage <= 1) {
                         cpuPercent = Math.round(data.cpu_usage * 100);
                     } else {
                         cpuPercent = Math.ceil(data.cpu_usage);
                     }
                     
                     // Update progress bar
                     var cpuBar = document.getElementById('cpuPercentBar');
                     cpuBar.style.width = cpuPercent + '%';
                     cpuBar.textContent = cpuPercent + '%';
                     
                     // Update text display
                     var cpuText = document.getElementById('cpuPercentVal');
                     cpuText.textContent = cpuPercent + '% CPU Usage';
                }
            }).always(function() {
                // Re-enable button and stop spinning
                icon.classList.remove('fa-spin');
                button.disabled = false;
            });
                 }
         return false;
     }
     
     function refreshBandwidthUsage() {
         // Add spinning animation to the button
         var button = event.target.closest('button');
         var icon = button.querySelector('i');
         icon.classList.add('fa-spin');
         
         // Disable button temporarily
         button.disabled = true;
         
         // Make API call to get fresh server info
         var productURL = '{$WEB_ROOT}/clientarea.php?action=productdetails&id={$serviceid}';
         if (typeof jQuery !== 'undefined') {
             jQuery.get(productURL + '&modop=custom&a=ClientAreaAPI&api=Server Info&token={$token}', function(data) {
                 if (data && typeof data.bandwidth_used !== 'undefined' && data.bandwidth) {
                     // Update bandwidth usage display
                     var bandwidthUsedTB = data.bandwidth_used / 1024;
                     var bandwidthPercent = (bandwidthUsedTB / data.bandwidth) * 100;
                     
                     // Update progress bar
                     var bandwidthBar = document.getElementById('bandwidthPercentBar');
                     bandwidthBar.style.width = Math.round(bandwidthPercent) + '%';
                     bandwidthBar.textContent = Math.round(bandwidthPercent) + '%';
                     
                     // Update text display
                     var bandwidthText = document.getElementById('bandwidthPercentVal');
                     bandwidthText.textContent = bandwidthUsedTB.toFixed(1) + ' / ' + data.bandwidth + ' TB';
                 }
             }).always(function() {
                 // Re-enable button and stop spinning
                 icon.classList.remove('fa-spin');
                 button.disabled = false;
             });
         }
         return false;
     }
</script>

<div class="arkhost-vps-container">
    <div id="loading" class="fw-bold" style="display: none;">
        <span class="spinner-border spinner-border-sm" style="width: 3rem; height: 3rem;" id="loading-spinner" role="status" aria-hidden="true"></span>
    </div>

    <div id="ArkHostVPS">
        <div class="title-block text-center dashboard-title mb-3">{$_LANG['Title']}</div>

        <div class="row mb-3">
            <div class="col-lg-6 col-sm-6 col-md-12 mb-3 text-center">
                <div class="border p-2">
                    <div class="mb-2">
                        <span><img src="{$serverInfo['operatingSystem']['image']}" width="48px" height="48px" alt="{$serverInfo['operatingSystem']['name']}" style="margin-top: 8px;"/></span>
                    </div>
                    <div class="information">
                        <span class="form-label dashboard-value d-inline-block mb-2">{$serverInfo['operatingSystem']['name']}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-12 mb-3 text-center">
                <div class="border p-2">
                    <div class="mb-2">
                        <span><img src="{$serverInfo['statusImage']}" height="48px" style="margin-top: 8px;"/></span>
                    </div>
                    <div class="information">
                        <span class="form-label dashboard-value d-inline-block mb-2">{$serverInfo['statusDescription']}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 mb-3">
                <div class="border p-2">
                    <div class="row w-100">
                        <div class="col-4 text-center">
                            <a href="#" 
                               onclick="{if $serverInfo['status'] !== 'running'}return ArkHostVPS_API('Start');{else}return confirmStop();{/if}" 
                               class="vps-control-btn {if $serverInfo['status'] !== 'running'}start-btn{else}stop-btn{/if}"
                               title="{if $serverInfo['status'] !== 'running'}{$_LANG['Start']}{else}{$_LANG['Stop']}{/if}">
                                <i class="fa fa-{if $serverInfo['status'] !== 'running'}play{else}stop{/if}" aria-hidden="true"></i>
                                {if $serverInfo['status'] !== 'running'}{$_LANG['Start']}{else}{$_LANG['Stop']}{/if}
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="#" 
                               onclick="return confirmRestart();" 
                               class="vps-control-btn restart-btn"
                               title="{$_LANG['Restart']}">
                                <i class="fa fa-sync" aria-hidden="true"></i>
                                {$_LANG['Restart']}
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="{$WEB_ROOT}/clientarea.php?action=productdetails&id={$serviceid}&modop=custom&a=VNC" 
                               target="_blank" 
                               class="vps-control-btn vnc-btn"
                               title="{$_LANG['VNC']}">
                                <img src="{$images['vnc']}" alt="VNC Console"/>
                                {$_LANG['VNC']}
                            </a>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px;">
                            <label class="form-label d-inline-block;">{$_LANG['Uptime']}:</label>
                            <span class="form-label dashboard-value d-inline-block mr-2">{$serverInfo['uptime_text']}</span>
                            <br />
                            <label class="form-label d-inline-block;">{$_LANG['IPv4']}:</label>
                            <span class="form-label dashboard-value d-inline-block mr-2">{$serverInfo['ip']}</span>
            {if $serverInfo['ipv6']}
                <br />
                <label class="form-label d-inline-block;">{$_LANG['IPv6']}:</label>
                <span class="form-label dashboard-value d-inline-block mr-2">{$serverInfo['ipv6']}</span>
            {/if}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard-tab" id="dashboard">
            <ul class="nav nav-tabs mb-4 dash-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                        <i class="fa fa-signal"></i> {$_LANG['Navbar']['Overview']}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="graphs-tab" data-toggle="tab" href="#graphs" role="tab" aria-controls="graphs" aria-selected="false" onclick="loadInitialGraphs()">
                        <i class="fa fa-chart-bar"></i> {$_LANG['Navbar']['Graphs']}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="backups-tab" data-toggle="tab" href="#backups" onclick="loadBackups();return false;" role="tab" aria-controls="backups" aria-selected="false">
                        <i class="fa fa-archive"></i> {$_LANG['Navbar']['Backups']}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
                        <i class="fa fa-cog"></i> {$_LANG['Navbar']['Settings']}
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="head text-center mb-3">
                        <img src="{$images['eye']}">
                        <span class="h4">{$_LANG['Navbar']['Overview']}</span>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-3 col-sm-6 col-md-6 mb-3">
                            <div class="usage-details px-3 py-4" style="height: 140px; display: flex; flex-direction: column; justify-content: space-between;">
                                <p class="overview-label">
                                    {$_LANG['Overview']['RAM']}
                                    <button onclick="refreshRAMUsage();return false;" class="btn btn-sm btn-outline-secondary ml-2" style="padding: 2px 6px; font-size: 10px; border-radius: 50%; width: 20px; height: 20px; display: inline-flex; align-items: center; justify-content: center;" title="Refresh RAM Usage">
                                        <i class="fa fa-sync-alt" style="font-size: 8px;"></i>
                                    </button>
                                </p>
                                <div class="progress disk-bar">
                                    <div id="ramPercentBar" aria-valuemin="0" aria-valuemax="100" role="progressbar" class="progress-bar" data-placement="right" style="background: #06d79c; width: {if $serverInfo['ram'] > 0}{($serverInfo['ram_usage']/1024/1024/1024/$serverInfo['ram']*100)|round}{else}0{/if}%">
                                        {if $serverInfo['ram'] > 0}{($serverInfo['ram_usage']/1024/1024/1024/$serverInfo['ram']*100)|round}{else}0{/if}%
                                    </div>
                                </div>
                                <div>
                                    <span id="ramPercentVal" class="used_disk_percent mr-1">{($serverInfo['ram_usage']/1024/1024/1024)|round:1} / {$serverInfo['ram']} GB</span>
                                    <span class="overview-label">{$_LANG['Used']}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 mb-3">
                            <div class="usage-details px-3 py-4" style="height: 140px; display: flex; flex-direction: column; justify-content: space-between;">
                                <p class="overview-label">
                                    {$_LANG['Overview']['Bandwidth']}
                                    <button onclick="refreshBandwidthUsage();return false;" class="btn btn-sm btn-outline-secondary ml-2" style="padding: 2px 6px; font-size: 10px; border-radius: 50%; width: 20px; height: 20px; display: inline-flex; align-items: center; justify-content: center;" title="Refresh Bandwidth Usage">
                                        <i class="fa fa-sync-alt" style="font-size: 8px;"></i>
                                    </button>
                                </p>
                                <div class="progress disk-bar">
                                    <div id="bandwidthPercentBar" aria-valuemin="0" aria-valuemax="100" role="progressbar" class="progress-bar" data-placement="right" style="background: #9c06d7; width: {if $serverInfo['bandwidth'] > 0}{($serverInfo['bandwidth_used']/1024/$serverInfo['bandwidth']*100)|round}{else}0{/if}%">
                                        {if $serverInfo['bandwidth'] > 0}{($serverInfo['bandwidth_used']/1024/$serverInfo['bandwidth']*100)|round}{else}0{/if}%
                                    </div>
                                </div>
                                <div>
                                    <span id="bandwidthPercentVal" class="used_disk_percent mr-1">{($serverInfo['bandwidth_used']/1024)|round:1} / {$serverInfo['bandwidth']} TB</span>
                                    <span class="overview-label">{$_LANG['Used']}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 mb-3">
                            <div class="usage-details px-3 py-4" style="height: 140px; display: flex; flex-direction: column; justify-content: space-between;">
                                <p class="overview-label">{$_LANG['Overview']['Disk']}</p>
                                <div class="progress disk-bar">
                                    <div class="progress-bar text-center w-100 d-flex align-items-center justify-content-center" style="background: #ffc107; font-weight: bold; color: white;">
                                        <span id="diskPercentVal">{$serverInfo['disk']} GB</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="used_disk_percent mr-1">{$_LANG['Overview']['DiskSize']}</span>
                                    <span class="overview-label"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 mb-3">
                            <div class="usage-details px-3 py-4" style="height: 140px; display: flex; flex-direction: column; justify-content: space-between;">
                                <p class="overview-label">
                                    {$_LANG['Overview']['CPU']}
                                    <button onclick="refreshCPUUsage();return false;" class="btn btn-sm btn-outline-secondary ml-2" style="padding: 2px 6px; font-size: 10px; border-radius: 50%; width: 20px; height: 20px; display: inline-flex; align-items: center; justify-content: center;" title="Refresh CPU Usage">
                                        <i class="fa fa-sync-alt" style="font-size: 8px;"></i>
                                    </button>
                                </p>
                                <div class="progress disk-bar">
                                    <div id="cpuPercentBar" aria-valuemin="0" aria-valuemax="100" role="progressbar" class="progress-bar" data-placement="right" style="background: #e74c3c; width: {if $serverInfo['cpu_usage'] <= 1}{($serverInfo['cpu_usage'] * 100)|round}{else}{$serverInfo['cpu_usage']|ceil}{/if}%">
                                        {if $serverInfo['cpu_usage'] <= 1}{($serverInfo['cpu_usage'] * 100)|round}{else}{$serverInfo['cpu_usage']|ceil}{/if}%
                                    </div>
                                </div>
                                <div>
                                    <span id="cpuPercentVal" class="used_disk_percent mr-1">{if $serverInfo['cpu_usage'] <= 1}{($serverInfo['cpu_usage'] * 100)|round}{else}{$serverInfo['cpu_usage']|ceil}{/if}% {$_LANG['Overview']['CPUUsage']}</span>
                                    <span class="overview-label"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="graphs" role="tabpanel" aria-labelledby="graphs-tab">
                    <div class="head text-center mb-3">
                        <img src="{$images['search']}">
                        <span class="h4">{$_LANG['Navbar']['Graphs']}</span>
                    </div>
                    
                    <!-- Time Period Selection -->
                    <div class="text-center mb-4">
                        <div class="graph-time-selection" role="group" aria-label="Time Period">
                            <button type="button" class="graph-time-btn" onclick="loadGraphs('hour', this)">{$_LANG['Graphs']['Hour']}</button>
                            <button type="button" class="graph-time-btn active" onclick="loadGraphs('day', this)">{$_LANG['Graphs']['Day']}</button>
                            <button type="button" class="graph-time-btn" onclick="loadGraphs('week', this)">{$_LANG['Graphs']['Week']}</button>
                            <button type="button" class="graph-time-btn" onclick="loadGraphs('month', this)">{$_LANG['Graphs']['Month']}</button>
                            <button type="button" class="graph-time-btn" onclick="loadGraphs('year', this)">{$_LANG['Graphs']['Year']}</button>
                        </div>
                    </div>

                    <!-- Loading indicator -->
                    <div id="graphs-loading" class="text-center mb-3" style="display: none;">
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading graphs...</span>
                        </div>
                        <p class="mt-2 text-muted">Loading performance graphs...</p>
                    </div>

                    <!-- Graphs Display - Stacked Vertically -->
                    <div class="row" id="graphs-container">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{$_LANG['Graphs']['CPU']}</h5>
                                </div>
                                <div class="card-body">
                                    <div id="cpu-graph" class="text-center">
                                        <p class="text-muted">{$_LANG['Graphs']['Loading']}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{$_LANG['Graphs']['RAM']}</h5>
                                </div>
                                <div class="card-body">
                                    <div id="ram-graph" class="text-center">
                                        <p class="text-muted">{$_LANG['Graphs']['Loading']}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{$_LANG['Graphs']['Network']}</h5>
                                </div>
                                <div class="card-body">
                                    <div id="network-graph" class="text-center">
                                        <p class="text-muted">{$_LANG['Graphs']['Loading']}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{$_LANG['Graphs']['Disk']}</h5>
                                </div>
                                <div class="card-body">
                                    <div id="disk-graph" class="text-center">
                                        <p class="text-muted">{$_LANG['Graphs']['Loading']}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="backups" role="tabpanel" aria-labelledby="backups-tab">
                    <div class="head text-center mb-3">
                        <img src="{$images['cloud']}">
                        <span class="h4">{$_LANG['Navbar']['Backups']}</span>
                    </div>

                    <div class="alert alert-info mb-3">{$_LANG['Backups']['Description']}</div>

                    <div class="table-responsive">
                        <table id="backupTable" cellpadding="0" cellspacing="0" border="0" class="table table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>{$_LANG['Backups']['Date']}</th>
                                    <th>{$_LANG['Backups']['Size']}</th>
                                    <th>{$_LANG['Backups']['Type']}</th>
                                    <th>{$_LANG['Backups']['Status']}</th>
                                    <th width="50">{$_LANG['Backups']['Actions']}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Loading backup data...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button onclick="createBackup();return false;" class="submit-btn">{$_LANG['Backups']['Create']}</button>

                    <div class="alert alert-warning mt-3">
                        {$_LANG['Backups']['Warning']|unescape:'html'}
                    </div>
                </div>
                
                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <div class="row vertical-tabs">
                        <div class="col-12 col-sm-3 col-md-3 col-lg-3 v-tabs-container">
                            <div class="nav flex-md-column mx-auto left-side-tabs mb-4 mb-md-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link mr-2 mr-md-0 active" id="hostname-tab" data-toggle="tab" href="#hostname" role="tab" aria-controls="hostname" aria-selected="true" style="display: block;">{$_LANG['Settings']['Hostname']['Title']}</a>
                                <a class="nav-link mr-2 mr-md-0" id="iso-tab" data-toggle="tab" href="#iso" onclick="ArkHostVPS_API('ISO Images', false);" role="tab" aria-controls="iso" aria-selected="false" style="display: block;">{$_LANG['Settings']['ISO']['Title']}</a>
                                <a class="nav-link mr-2 mr-md-0" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false" style="display: block;">{$_LANG['Settings']['Password']['Title']}</a>
                                <a class="nav-link mr-2 mr-md-0" id="reinstall-tab" data-toggle="tab" href="#reinstall" role="tab" aria-controls="reinstall" aria-selected="false" style="display: block;">{$_LANG['Settings']['Reinstall']['Title']}</a>
                                <a class="nav-link mr-2 mr-md-0" id="firewall-tab" data-toggle="tab" href="#firewall" onclick="ArkHostVPS_API('Get Firewall rules', false);" role="tab" aria-controls="firewall" aria-selected="false" style="display: block;">{$_LANG['Settings']['Firewall']['Title']}</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-9 col-md-9 col-lg-9">
                            <div class="tab-content vertical-tab-content">
                                <div class="tab-pane fade active show" id="hostname" role="tabpanel" aria-labelledby="hostname-tab">
                                    <div class="head">
                                        <img src="{$images['search']}">
                                        <span class="h4">{$_LANG['Settings']['Hostname']['Title']}</span>
                                    </div>

                                    <div class="alert alert-info mb-3">
                                        {$_LANG['Settings']['Hostname']['Description']}
                                    </div>
                                    
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{$_LANG['Settings']['Hostname']['Title']}:</label>
                                                <input class="form-control" id="hostnameRDNS" type="text" size="30" maxlength="128" value="{$serverInfo['hostname']}">
                                            </div>
                                        </div>
                                    </div>

                                    <button onclick="ArkHostVPS_API('Hostname rDNS', true, { hostname: document.getElementById('hostnameRDNS').value });return false;" class="submit-btn">{$_LANG['Settings']['Hostname']['Submit']}</button>
                                </div>
                                
                                <div class="tab-pane fade" id="iso" role="tabpanel" aria-labelledby="iso-tab">
                                    <div class="head">
                                        <img src="{$images['edit']}" style="width: 32px; height: 32px;">
                                        <span class="h4">{$_LANG['Settings']['ISO']['Title']}</span>
                                    </div>

                                    <div class="alert alert-info mb-3">
                                        {$_LANG['Settings']['ISO']['Description']}
                                    </div>
                                    
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{$_LANG['Settings']['ISO']['Image']}:</label>
                                                <select class="form-control" id="isoID">
                                                    <option value="">Select ISO Image...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button onclick="ArkHostVPS_API('Load ISO', true, { iso_id: document.getElementById('isoID').value });return false;" class="submit-btn">{$_LANG['Settings']['ISO']['Submit']}</button>

                                    {if $serverInfo['iso'] !== ''}
                                        <button onclick="ArkHostVPS_API('Eject ISO', true);return false;" class="danger-btn">{$_LANG['Settings']['ISO']['Remove']}</button>
                                    {/if}
                                </div>
                                
                                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                    <div class="head">
                                        <img src="{$images['lock']}" style="width: 32px; height: 32px;">
                                        <span class="h4">{$_LANG['Settings']['Password']['Title']}</span>
                                    </div>

                                    <div class="alert alert-warning mb-3">
                                        {$_LANG['Settings']['Password']['Description']}
                                    </div>
                                    
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{$_LANG['Settings']['Password']['Title']}:</label>
                                                
                                                <div class="input-group mb-3">
                                                    <input class="form-control" id="vpsPassword" type="password" size="30" maxlength="128" disabled value="{if $serverInfo['install_root'] != ''}{$serverInfo['install_root']}{else}Expired{/if}">
                                                    <button class="btn btn-outline-secondary" type="button" onclick="ArkHostVPS_ShowPassword();return false;">
                                                        <i class="fa fa-eye" id="showPasswordIcon" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button onclick="ArkHostVPS_API('Reset root');return false;" class="submit-btn">{$_LANG['Settings']['Password']['Submit']}</button>
                                </div>
                                
                                <div class="tab-pane fade" id="reinstall" role="tabpanel" aria-labelledby="reinstall-tab">
                                    <div class="head">
                                        <img src="{$images['installing']}" style="width: 32px; height: 32px;">
                                        <span class="h4">{$_LANG['Settings']['Reinstall']['Title']}</span>
                                    </div>

                                    <div class="alert alert-danger mb-3">
                                        {$_LANG['Settings']['Reinstall']['Description']}
                                    </div>

                                    <div id="reinstallIntructions" class="col-lg-10 col-12 mx-auto">
                                        <label class="form-label">{$_LANG['Settings']['Reinstall']['OS']}:</label>
                                        
                                        <div id="os_list" class="row mb-4 justify-content-center">
                                            {foreach from=$operatingSystems key=$group item=$operatingSystemsGroup}
                                            <div class="col-12 col-md-8 col-lg-6 mb-3">
                                                <div id="{$group}-os" class="os_badge media dropdown">
                                                    <button class="btn dropdown-toggle btn-outline-secondary w-100 p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="media-left p-1 float-left">
                                                            <img class="distro_img media-object" src="{$operatingSystemsGroup['image']}">
                                                        </div>

                                                        <div class="media-body float-left text-left p-2">
                                                            <h6 class="distro_name media-heading">{$operatingSystemsGroup['name']}</h6>
                                                            <span id="{$group}-version" class="version small">{$_LANG['Settings']['Reinstall']['Version']}</span>
                                                        </div>
                                                    </button>

                                                    <div class="os_badge_list dropdown-menu w-100">
                                                        {foreach from=$operatingSystemsGroup['versions'] item=$operatingSystem}
                                                        <a class="dropdown-item" href="#" data-os="{$operatingSystem['id']}" data-group="{$group}" onclick="ArkHostVPS_ChooseOS(this);return false;">{$operatingSystem['name']}</a>
                                                        {/foreach}
                                                    </div>
                                                </div>
                                            </div>
                                            {/foreach}
                                        </div>

                                        <!-- Advanced Reinstall Options (Linux only) -->
                                        <div id="advancedReinstallOptions" class="row mb-3" style="display: none;">
                                            <div class="col-12">
                                                <h6 class="text-muted mb-3">
                                                    <i class="fa fa-cogs"></i> Advanced Options (Linux only)
                                                </h6>
                                            </div>
                                            
                                            <div class="col-12 mb-4">
                                                <label class="form-label font-weight-bold">{$_LANG['Settings']['Reinstall']['SSHKey']}</label>
                                                <textarea class="form-control" id="reinstallSSHKey" rows="2" placeholder="ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQC... your-email@example.com"></textarea>
                                                <small class="text-muted">{$_LANG['Settings']['Reinstall']['SSHKeyDesc']}</small>
                                            </div>
                                            
                                            <div class="col-12 mb-4">
                                                <label class="form-label font-weight-bold">{$_LANG['Settings']['Reinstall']['PostScript']}</label>
                                                <textarea class="form-control" id="reinstallScript" rows="4" placeholder="#!/bin/bash&#10;# Example: Install and configure nginx&#10;apt update && apt install -y nginx&#10;systemctl enable nginx"></textarea>
                                                <small class="text-muted">{$_LANG['Settings']['Reinstall']['PostScriptDesc']}</small>
                                            </div>
                                            
                                            <div class="col-12 mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="disableSSHPassword">
                                                    <label class="form-check-label font-weight-bold" for="disableSSHPassword">
                                                        {$_LANG['Settings']['Reinstall']['DisableSSHPassword']}
                                                    </label>
                                                    <br><small class="text-muted">{$_LANG['Settings']['Reinstall']['DisableSSHPasswordDesc']}</small>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" id="newOS" value="0"/>				
                                        <button onclick="reinstallWithAdvancedOptions();" class="submit-btn">{$_LANG['Settings']['Reinstall']['Submit']}</button>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="firewall" role="tabpanel" aria-labelledby="firewall-tab">
                                    <div class="head">
                                        <img src="{$images['settings']}" style="width: 32px; height: 32px;">
                                        <span class="h4">{$_LANG['Settings']['Firewall']['Title']}</span>
                                    </div>

                                    <div class="alert alert-info mb-3">
                                        {$_LANG['Settings']['Firewall']['Description']}
                                    </div>

                                    <div class="table-responsive">
                                        <table id="firewallTable" cellpadding="0" cellspacing="0" border="0" class="table table-hover" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>{$_LANG['Settings']['Firewall']['Action']}</th>
                                                    <th>{$_LANG['Settings']['Firewall']['Port']}</th>
                                                    <th>{$_LANG['Settings']['Firewall']['Protocol']}</th>
                                                    <th>{$_LANG['Settings']['Firewall']['Source']}</th>
                                                    <th>{$_LANG['Settings']['Firewall']['Note']}</th>
                                                    <th width="50">{$_LANG['Settings']['Firewall']['Actions']}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control form-control-sm" id="firewallAction">
                                                            <option value="ACCEPT">{$_LANG['Settings']['Firewall']['Accept']}</option>
                                                            <option value="DROP">{$_LANG['Settings']['Firewall']['Drop']}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-control-sm" id="firewallPort" type="number" min="1" max="65535" placeholder="{$_LANG['Settings']['Firewall']['Port']}">
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-sm" id="firewallProtocol">
                                                            <option value="ANY">ANY</option>
                                                            <option value="ICMP">ICMP</option>
                                                            <option value="TCP">TCP</option>
                                                            <option value="UDP">UDP</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-control-sm" id="firewallSource" type="text" maxlength="128" placeholder="{$_LANG['Settings']['Firewall']['SourceLabel']}">
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-control-sm" id="firewallNote" type="text" maxlength="64" placeholder="{$_LANG['Settings']['Firewall']['Notes']}">
                                                    </td>
                                                    <td>
                                                        <a href="#" onclick="ArkHostVPS_API('Add Firewall rules', true, { firewallAction: document.getElementById('firewallAction').value, protocol: document.getElementById('firewallProtocol').value, source: document.getElementById('firewallSource').value, port: document.getElementById('firewallPort').value, note: document.getElementById('firewallNote').value });return false;"><i class="fas fa-1x fa-plus text-success" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="alert alert-warning">
                                        {$_LANG['Settings']['Firewall']['Warning']}
                                    </div>
                                    <button onclick="ArkHostVPS_API('Commit Firewall rules');return false;" class="submit-btn">{$_LANG['Settings']['Firewall']['Submit']}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Wait for WHMCS jQuery to be ready and use it
jQuery(document).ready(function($) {
    // WHMCS already loads Bootstrap and Font Awesome - no need to load additional libraries
});
</script> 