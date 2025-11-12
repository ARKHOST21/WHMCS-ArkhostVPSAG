<?php

# Client Area
## General
$_ADDONLANG['Title'] = 'VPS Information';
$_ADDONLANG['Uptime'] = 'Uptime';
$_ADDONLANG['IPv4'] = 'IPv4';
$_ADDONLANG['IPv6'] = 'IPv6';
$_ADDONLANG['Used'] = 'Used';
$_ADDONLANG['Start'] = 'Start';
$_ADDONLANG['Stop'] = 'Stop';
$_ADDONLANG['Restart'] = 'Restart';
$_ADDONLANG['VNC'] = 'VNC Console';
$_ADDONLANG['General']['Note'] = 'Note';
$_ADDONLANG['LoadingFirewallRules'] = 'Loading firewall rules...';

## Confirmations
$_ADDONLANG['Confirm']['Stop']['Title'] = 'Stop VPS';
$_ADDONLANG['Confirm']['Stop']['Message'] = 'Do you want to stop this VPS? This will shutdown the server.';
$_ADDONLANG['Confirm']['Restart']['Title'] = 'Restart VPS';
$_ADDONLANG['Confirm']['Restart']['Message'] = 'Do you want to restart this VPS? This will reboot the server.';
$_ADDONLANG['Confirm']['Cancel'] = 'Cancel';
$_ADDONLANG['Confirm']['Confirm'] = 'Confirm';
$_ADDONLANG['Confirm']['CreateBackup']['Title'] = 'Create Backup';
$_ADDONLANG['Confirm']['CreateBackup']['Message'] = 'Do you want to create a backup. This may take several minutes.';
$_ADDONLANG['Confirm']['DeleteBackup']['Title'] = 'Delete Backup';
$_ADDONLANG['Confirm']['DeleteBackup']['Message'] = 'Do you want to delete this backup. This action cannot be undone.';
$_ADDONLANG['Confirm']['RestoreBackup']['Title'] = 'Restore Backup';
$_ADDONLANG['Confirm']['RestoreBackup']['Message'] = 'Do you want to restore this backup. This will overwrite all current data and cannot be undone.';

## Navbar
$_ADDONLANG['Navbar']['Overview'] = 'Overview';
$_ADDONLANG['Navbar']['Graphs'] = 'Graphs';
$_ADDONLANG['Navbar']['Backups'] = 'Backups';
$_ADDONLANG['Navbar']['Settings'] = 'Settings';

## Overview
$_ADDONLANG['Overview']['ServerInfo'] = 'Server Information';
$_ADDONLANG['Overview']['Hostname'] = 'Hostname';
$_ADDONLANG['Overview']['Status'] = 'Status';
$_ADDONLANG['Overview']['Uptime'] = 'Uptime';
$_ADDONLANG['Overview']['OS'] = 'Operating System';
$_ADDONLANG['Overview']['Location'] = 'Location';
$_ADDONLANG['Overview']['ServerType'] = 'Server Type';
$_ADDONLANG['Overview']['ResourceAllocation'] = 'Resource Allocation';
$_ADDONLANG['Overview']['CPU_Cores'] = 'CPU Cores';
$_ADDONLANG['Overview']['Memory'] = 'Memory';
$_ADDONLANG['Overview']['Storage'] = 'Storage';
$_ADDONLANG['Overview']['Traffic'] = 'Traffic';
$_ADDONLANG['Overview']['QuickActions'] = 'Quick Actions';
$_ADDONLANG['Overview']['ResourceUsage'] = 'Resource Usage';
$_ADDONLANG['Overview']['CPU'] = 'CPU Usage';
$_ADDONLANG['Overview']['CPUUsage'] = 'Usage';
$_ADDONLANG['Overview']['RAM'] = 'RAM Usage';
$_ADDONLANG['Overview']['Bandwidth'] = 'Bandwidth Usage';
$_ADDONLANG['Overview']['Disk'] = 'Disk Space';
$_ADDONLANG['Overview']['DiskSize'] = 'Total Size';
$_ADDONLANG['General']['GB'] = 'GB';
$_ADDONLANG['General']['TB'] = 'TB';

## Graphs
$_ADDONLANG['Graphs']['CPU'] = 'CPU Usage';
$_ADDONLANG['Graphs']['RAM'] = 'RAM Usage';
$_ADDONLANG['Graphs']['Disk'] = 'Disk Usage';
$_ADDONLANG['Graphs']['Network'] = 'Network Usage';
$_ADDONLANG['Graphs']['Hour'] = 'Hour';
$_ADDONLANG['Graphs']['Day'] = 'Day';
$_ADDONLANG['Graphs']['Week'] = 'Week';
$_ADDONLANG['Graphs']['Month'] = 'Month';
$_ADDONLANG['Graphs']['Year'] = 'Year';
$_ADDONLANG['Graphs']['Loading'] = 'Loading graph...';

## Backups
$_ADDONLANG['Backups']['Description'] = 'The dates for which backups of this VPS are available are listed below. You can restore or delete them accordingly.';
$_ADDONLANG['Backups']['Warning'] = '* Please keep in mind that the new backups will replace the older ones.<br/>** The automated backups will also replace your manual backups unless the automated backups are disabled.<br/>*** The automated backups are made 2 times a week and are part of our disaster recovery plan. If you disable the automated backups, you also disable any chance of recovery in case of a disaster.<br/>**** The backup\'s file system might not be fully consistent if the VPS was writing to the filesystem at the moment of the backup. For fully consistent backups, the server must be stopped while the backup is being created.';
$_ADDONLANG['Backups']['Date'] = 'Date';
$_ADDONLANG['Backups']['Size'] = 'Size';
$_ADDONLANG['Backups']['Type'] = 'Type';
$_ADDONLANG['Backups']['Status'] = 'Status';
$_ADDONLANG['Backups']['Actions'] = 'Actions';
$_ADDONLANG['Backups']['Create'] = 'Backup Now';
$_ADDONLANG['Backups']['Available'] = 'Available';
$_ADDONLANG['Backups']['Creating'] = 'Creating...';
$_ADDONLANG['Backups']['Error'] = 'Error';
$_ADDONLANG['Backups']['Automatic'] = 'Automatic';
$_ADDONLANG['Backups']['Manual'] = 'Manual';

## Settings
### Hostname
$_ADDONLANG['Settings']['Hostname']['Title'] = 'Hostname';
$_ADDONLANG['Settings']['Hostname']['Description'] = 'Sets the hostname and the rDNS. Please create the A record first.';
$_ADDONLANG['Settings']['Hostname']['Submit'] = 'Submit';

### ISO
$_ADDONLANG['Settings']['ISO']['Title'] = 'ISO';
$_ADDONLANG['Settings']['ISO']['Description'] = 'If you install the operating system via the ISO image, you must also configure the network interface statically. There is no DHCP server running.';
$_ADDONLANG['Settings']['ISO']['Image'] = 'ISO Image';
$_ADDONLANG['Settings']['ISO']['Submit'] = 'Load ISO';
$_ADDONLANG['Settings']['ISO']['Remove'] = 'Eject ISO';

### Password
$_ADDONLANG['Settings']['Password']['Title'] = 'Password';
$_ADDONLANG['Settings']['Password']['Description'] = 'The installation password is removed from our systems after 72 hours. It is mandatory for you to change the password on your first login!';
$_ADDONLANG['Settings']['Password']['Submit'] = 'Reset Password';

### Reinstall
$_ADDONLANG['Settings']['Reinstall']['Title'] = 'Reinstall';
$_ADDONLANG['Settings']['Reinstall']['Description'] = 'Please understand that by reinstalling, all the data will be wiped from the server. This action is irreversible!';
$_ADDONLANG['Settings']['Reinstall']['OS'] = 'Operating System';
$_ADDONLANG['Settings']['Reinstall']['Version'] = 'CHOOSE VERSION';
$_ADDONLANG['Settings']['Reinstall']['Submit'] = 'Reinstall';
$_ADDONLANG['Settings']['Reinstall']['SSHKey'] = 'SSH Public Key (optional)';
$_ADDONLANG['Settings']['Reinstall']['SSHKeyDesc'] = 'Paste your SSH public key here (starts with ssh-rsa, ssh-ed25519, etc.). This will be automatically added to ~/.ssh/authorized_keys for passwordless login.';
$_ADDONLANG['Settings']['Reinstall']['PostScript'] = 'Post-Installation Script (optional)';
$_ADDONLANG['Settings']['Reinstall']['PostScriptDesc'] = 'Enter a bash script to automatically run after the OS installation completes. Useful for installing packages, configuring services, or setting up your environment.';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPassword'] = 'Disable SSH password authentication';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPasswordDesc'] = 'When enabled, only SSH key authentication will be allowed. Password login via SSH will be disabled for enhanced security.';

### Firewall
$_ADDONLANG['Settings']['Firewall']['Title'] = 'Firewall';
$_ADDONLANG['Settings']['Firewall']['Description'] = 'The rules are evaluated from the top to the bottom. By default, everything is allowed. The firewall is only available on the public interface. Only the inbound traffic will be filtered by the firewall.';
$_ADDONLANG['Settings']['Firewall']['AddNewRule'] = 'Add New Firewall Rule';
$_ADDONLANG['Settings']['Firewall']['CurrentRules'] = 'Current Firewall Rules';
$_ADDONLANG['Settings']['Firewall']['AddRule'] = 'Add Rule';
$_ADDONLANG['Settings']['Firewall']['Action'] = 'Action';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Port';
$_ADDONLANG['Settings']['Firewall']['Protocol'] = 'Protocol';
$_ADDONLANG['Settings']['Firewall']['Source'] = 'Source';
$_ADDONLANG['Settings']['Firewall']['Note'] = 'Note';
$_ADDONLANG['Settings']['Firewall']['Actions'] = 'Actions';
$_ADDONLANG['Settings']['Firewall']['Accept'] = 'Accept';
$_ADDONLANG['Settings']['Firewall']['Drop'] = 'Drop';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Port Number';
$_ADDONLANG['Settings']['Firewall']['SourceLabel'] = 'Ex: x.x.x.x/xx (optional)';
$_ADDONLANG['Settings']['Firewall']['Notes'] = 'Notes (optional)';
$_ADDONLANG['Settings']['Firewall']['Warning'] = 'The rules must be committed in order to take effect.';
$_ADDONLANG['Settings']['Firewall']['Submit'] = 'Commit Firewall';

if (file_exists(__DIR__ . '/overrides/english.php')) include_once(__DIR__ . '/overrides/english.php');