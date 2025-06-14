
function $_(id) {
    return document.getElementById(id);
}

function ArkHostVPS_API(action, alert = true, json = {}) {
    ArkHostVPS_Loading(true);
    
    $.post(productURL + '&modop=custom&a=ClientAreaAPI&api=' + action, json,
        function(data) {
            if (data.result === 'success') {
                switch (action) {
                    case 'IPv6':
                        $_('ipv6').parentElement.innerHTML = data.data;
                        data.data = 'IPv6 created: ' + data.data;
                        
                        break;

                    case 'Graphs':
                        // Hide loading indicator (if it exists)
                        if ($_('graphs-loading')) $_('graphs-loading').style.display = 'none';
                        if ($_('graphs-container')) $_('graphs-container').style.opacity = '1';
                        
                        // Display graphs (they should be base64 images or img tags)
                        if ($_('cpu-graph')) $_('cpu-graph').innerHTML = data.cpu_img ? data.cpu_img : '<p class="text-muted">No CPU graph available</p>';
                        if ($_('ram-graph')) $_('ram-graph').innerHTML = data.mem_img ? data.mem_img : '<p class="text-muted">No RAM graph available</p>';
                        if ($_('disk-graph')) $_('disk-graph').innerHTML = data.disk_img ? data.disk_img : '<p class="text-muted">No Disk graph available</p>';
                        if ($_('network-graph')) $_('network-graph').innerHTML = data.net_img ? data.net_img : '<p class="text-muted">No Network graph available</p>';
                        
                        // Add graphs class for styling
                        if ($_('cpu-graph')) $_('cpu-graph').classList.add('graphs');
                        if ($_('ram-graph')) $_('ram-graph').classList.add('graphs');
                        if ($_('disk-graph')) $_('disk-graph').classList.add('graphs');
                        if ($_('network-graph')) $_('network-graph').classList.add('graphs');
                        
                        break;

                    case 'Reinstall':
                        window.location.reload();
                        break;

                    case 'List backups':
                        const backupTable = $_('backupTable').getElementsByTagName('tbody')[0];
                        
                        delete data.result;
                        $('#backupTable tbody').find('tr').remove();

                        for (let i = 0; i < Object.keys(data).length; i++) {
                            const backup = data[Object.keys(data)[i]];
                            
                            const row = backupTable.insertRow();
                            const date = row.insertCell(0);
                            const size = row.insertCell(1);
                            const type = row.insertCell(2);
                            const status = row.insertCell(3);
                            const actions = row.insertCell(4);
                            
                            date.innerHTML = new Date(backup.date).toLocaleString();
                            size.innerHTML = (backup.size !== '' ? backup.size : '0.00GB');
                            type.innerHTML = backup.type;

                            if (backup.status === 'ok') {
                                status.innerHTML = '<div class="badge bg-success">Completed</div>';
                                actions.innerHTML = '<a href="#" onclick="ArkHostVPS_API(\'Restore backup\', true, { file: ' + backup.file + ' });return false;"><i class="fas fa-history restore-icon text-secondary mr-2"></i></a> <a href="#" onclick="ArkHostVPS_API(\'Delete backup\', true, { file: ' + backup.file + ' });return false;"><i class="fas fa-1x fa-times delete" aria-hidden="true"></i></a>';
                            } else if (backup.status === 'preparing') {
                                status.innerHTML = '<div class="badge bg-info">Preparing</div>';
                            } else if (backup.status === 'creating') {
                                status.innerHTML = '<div class="badge bg-warning">Creating ' + backup.percentage + '%</div>';
                            } else {
                                status.innerHTML = '<div class="badge bg-danger">' + backup.status + '</div>';
                            }
                        }

                        break;

                    case 'Create backup':
                        ArkHostVPS_API('List backups', false);
                        break;

                    case 'Delete backup':
                        ArkHostVPS_API('List backups', false);
                        break;
                        
                    case 'Get Firewall rules':
                        const firewallTable = $_('firewallTable').getElementsByTagName('tbody')[0];
                        
                        delete data.result;
                        $('#firewallTable tbody').find('tr:not(:last)').remove();

                        for (let i = 0; i < Object.keys(data).length; i++) {
                            const rule = data[Object.keys(data)[i]];
                            
                            const row = firewallTable.insertRow(1);
                            const action = row.insertCell(0);
                            const port = row.insertCell(1);
                            const protocol = row.insertCell(2);
                            const source = row.insertCell(3);
                            const note = row.insertCell(4);
                            const actions = row.insertCell(5);

                            action.innerHTML = rule.action;
                            port.innerHTML = rule.port;
                            protocol.innerHTML = rule.protocol;
                            source.innerHTML = rule.source;
                            note.innerHTML = rule.note;
                            actions.innerHTML = '<a href="#" onclick="ArkHostVPS_API(\'Delete Firewall rule\', true, { rule_id: ' + rule.id + ' });return false;"><i class="fas fa-1x fa-times delete" aria-hidden="true"></i></a>';
                        }

                        $('#firewallTable tbody').append($('#firewallTable tbody tr:first'));

                        break;

                    case 'Add Firewall rules':
                        ArkHostVPS_API('Get Firewall rules', false);
                        break;

                    case 'Delete Firewall rule':
                        ArkHostVPS_API('Get Firewall rules', false);
                        break;

                    case 'Commit Firewall rules':
                        ArkHostVPS_API('Get Firewall rules', false);
                        break;

                    case 'ISO Images':
                        const isoSelect = $_('isoID');

                        $('#isoID').empty();

                        for (let i = 0; i < data.iso.length; i++) {
                            const iso = data.iso[i];
                            const option = document.createElement('option');
                            
                            option.value = iso.id;
                            option.innerHTML = iso.iso_image;
                            option.selected = (data.current_iso !== 0 && data.current_iso == iso.id);

                            isoSelect.appendChild(option);
                        }
                }
                
                ArkHostVPS_Loading(false);
                
                if (alert) {
                    ArkHostVPS_Alert('success', (typeof data.data === 'string' ? data.data : lang.moduleactionsuccess));
                }
            } else {
                ArkHostVPS_Loading(false);
                ArkHostVPS_Alert('error', (typeof data.message === 'string' ? data.message : lang.moduleactionfailed));
            }
        }
    );
}

function ArkHostVPS_VNC() {
    window.open(productURL + '&modop=custom&a=VNC', '_blank', 'toolbar=0,location=0,menubar=0');
}





function ArkHostVPS_Loading(status) {
    $_('loading').style.left = ((document.body.clientWidth - $('#loading').width()) / 2).toString() + 'px';

    if (status) {
        $('#loading').show();
    } else {
        $('#loading').hide();
    }
}



function ArkHostVPS_ChooseOS(button) {
    var newOS = $_('newOS').value;
    
    if (newOS !== '0') {
        newOS = $('[data-os="' + newOS + '"]')[0];
        newOS.classList.remove('SelectedOS');
        $_(newOS.dataset.group + '-os').classList.remove('selected');
        $_(newOS.dataset.group + '-version').innerText = 'CHOOSE VERSION';
    }

    $_('newOS').value = button.dataset.os;
    button.classList.add('SelectedOS');
    $_(button.dataset.group + '-os').classList.add('selected');
    $_(button.dataset.group + '-version').innerText = button.innerText;
}

function ArkHostVPS_ShowPassword() {
    let passwordField = $_('vpsPassword');
    let showPasswordIcon = $_('showPasswordIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        showPasswordIcon.classList = 'fa-solid fa-eye-slash';
    } else {
        passwordField.type = 'password';
        showPasswordIcon.classList = 'fa-solid fa-eye';
    }
}

function ArkHostVPS_Alert(type, message) {
    let Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
        icon: type,
        title: message
    });
}

$(document).ready(function() {
    $('#pills-tab').scrollingTabs({
        enableSwiping: true,
        bootstrapVersion: 5,
        cssClassLeftArrow: 'fa-solid fa-chevron-left',
        cssClassRightArrow: 'fa-solid fa-chevron-right'
    });



    function ArkHostVPS_UpdateStatitics() {
        if ($_('overview-tab').ariaSelected !== 'true') return timerServerLoads = setTimeout(ArkHostVPS_UpdateStatitics, 10000);

        clearTimeout(timerServerLoads);

        if (timerServerLoads) {
            $.get(productURL + '&modop=custom&a=ClientAreaAPI&api=Server Info',
                function(serverInfo) {
                    if (serverInfo.result === 'success') {
                        // Update CPU display: handle both decimal (0.0-1.0) and percentage (0-100) formats
                        var cpuDisplay;
                        if (serverInfo.cpu_usage <= 1) {
                            // Decimal format (0.0-1.0), convert to percentage
                            cpuDisplay = Math.round(serverInfo.cpu_usage * 100);
                        } else {
                            // Already percentage format (0-100)
                            cpuDisplay = Math.ceil(serverInfo.cpu_usage);
                        }
                        $('.used-cpu').html(cpuDisplay + '%');
                    } else {
                        ArkHostVPS_Alert('error', (typeof serverInfo.message === 'string' ? serverInfo.message : lang.moduleactionfailed));
                    }
                }
            );
        } else {
            let serverInfo = serverInfoInitial;
            serverInfo.ram_usage = serverInfo.ram_usage / 1000000000;
            serverInfo.ram_usage_view = serverInfo.ram_usage.toFixed(2);
            serverInfo.ram_percent = (serverInfo.ram_usage / serverInfo.ram) * 100;
            serverInfo.ram_percent_view = serverInfo.ram_percent.toFixed(0);

            serverInfo.bandwidth_used_view = (serverInfo.bandwidth_used / 1024).toFixed(2);
            serverInfo.bandwidth_percent = ((serverInfo.bandwidth_used / 1024) / serverInfo.bandwidth) * 100;
            serverInfo.bandwidth_percent_view = serverInfo.bandwidth_percent.toFixed(0);

            // Disk usage not available from API, show total disk size instead
            serverInfo.disk_used_view = serverInfo.disk;
            serverInfo.disk_percent = 100;
            serverInfo.disk_percent_view = '100';

            $_('ramPercentBar').style.width = serverInfo.ram_percent_view + '%';
            $_('ramPercentBar').innerHTML = serverInfo.ram_percent_view + '%';
            $_('ramPercentVal').innerHTML = serverInfo.ram_usage_view + ' / ' + serverInfo.ram + ' GB';

            $_('bandwidthPercentBar').style.width = serverInfo.bandwidth_percent_view + '%';
            $_('bandwidthPercentBar').innerHTML = serverInfo.bandwidth_percent_view + '%';
            $_('bandwidthPercentVal').innerHTML = serverInfo.bandwidth_used_view + ' / ' + serverInfo.bandwidth + ' TB';

            $_('diskPercentVal').innerHTML = serverInfo.disk + ' GB';

            // Update CPU display: handle both decimal (0.0-1.0) and percentage (0-100) formats
            var cpuDisplay;
            if (serverInfo.cpu_usage <= 1) {
                // Decimal format (0.0-1.0), convert to percentage
                cpuDisplay = Math.round(serverInfo.cpu_usage * 100);
            } else {
                // Already percentage format (0-100)
                cpuDisplay = Math.ceil(serverInfo.cpu_usage);
            }
            $('.used-cpu').html(cpuDisplay + '%');
        }

        timerServerLoads = setTimeout(ArkHostVPS_UpdateStatitics, 10000);
    }

    $_('ArkHostVPS').style.display = 'block';
    ArkHostVPS_UpdateStatitics();
});