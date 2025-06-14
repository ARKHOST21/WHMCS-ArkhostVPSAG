<?php

# Client Area
## General
$_ADDONLANG['Title'] = 'VPS-Informationen';
$_ADDONLANG['Uptime'] = 'Betriebszeit';
$_ADDONLANG['IPv4'] = 'IPv4';
$_ADDONLANG['IPv6'] = 'IPv6';
$_ADDONLANG['Used'] = 'Verwendet';
$_ADDONLANG['Start'] = 'Starten';
$_ADDONLANG['Stop'] = 'Stoppen';
$_ADDONLANG['Restart'] = 'Neustart';
$_ADDONLANG['VNC'] = 'VNC-Konsole';

## Navbar
$_ADDONLANG['Navbar']['Overview'] = 'Übersicht';
$_ADDONLANG['Navbar']['Graphs'] = 'Diagramme';
$_ADDONLANG['Navbar']['Backups'] = 'Sicherungen';
$_ADDONLANG['Navbar']['Settings'] = 'Einstellungen';

## Overview
$_ADDONLANG['Overview']['CPU'] = 'CPU-Auslastung';
$_ADDONLANG['Overview']['RAM'] = 'RAM-Auslastung';
$_ADDONLANG['Overview']['Bandwidth'] = 'Bandbreiten-Nutzung';
$_ADDONLANG['Overview']['Disk'] = 'Festplattenspeicher';
$_ADDONLANG['Overview']['DiskSize'] = 'Gesamtgröße';
$_ADDONLANG['Overview']['CPUUsage'] = 'CPU-Nutzung';

## Graphs
$_ADDONLANG['Graphs']['CPU'] = 'CPU-Auslastung';
$_ADDONLANG['Graphs']['RAM'] = 'RAM-Auslastung';
$_ADDONLANG['Graphs']['Disk'] = 'Festplatten-Nutzung';
$_ADDONLANG['Graphs']['Network'] = 'Netzwerk-Nutzung';
$_ADDONLANG['Graphs']['Hour'] = 'Stunde';
$_ADDONLANG['Graphs']['Day'] = 'Tag';
$_ADDONLANG['Graphs']['Week'] = 'Woche';
$_ADDONLANG['Graphs']['Month'] = 'Monat';
$_ADDONLANG['Graphs']['Year'] = 'Jahr';
$_ADDONLANG['Graphs']['Loading'] = 'Diagramm wird geladen...';

## Backups
$_ADDONLANG['Backups']['Description'] = 'Die Daten, für die Sicherungen dieses VPS verfügbar sind, sind unten aufgelistet. Sie können diese entsprechend wiederherstellen oder löschen.';
$_ADDONLANG['Backups']['Warning'] = '* Bitte beachten Sie, dass neue Sicherungen die älteren ersetzen.<br/>** Die automatischen Sicherungen ersetzen auch Ihre manuellen Sicherungen, es sei denn, die automatischen Sicherungen sind deaktiviert.<br/>*** Die automatischen Sicherungen werden 2-mal pro Woche erstellt und sind Teil unseres Disaster-Recovery-Plans. Wenn Sie die automatischen Sicherungen deaktivieren, deaktivieren Sie auch jede Chance auf Wiederherstellung im Falle einer Katastrophe.<br/>**** Das Dateisystem der Sicherung ist möglicherweise nicht vollständig konsistent, wenn der VPS zum Zeitpunkt der Sicherung in das Dateisystem schrieb. Für vollständig konsistente Sicherungen muss der Server gestoppt werden, während die Sicherung erstellt wird.';
$_ADDONLANG['Backups']['Date'] = 'Datum';
$_ADDONLANG['Backups']['Size'] = 'Größe';
$_ADDONLANG['Backups']['Type'] = 'Typ';
$_ADDONLANG['Backups']['Status'] = 'Status';
$_ADDONLANG['Backups']['Actions'] = 'Aktionen';
$_ADDONLANG['Backups']['Create'] = 'Jetzt sichern';
$_ADDONLANG['Backups']['Available'] = 'Verfügbar';
$_ADDONLANG['Backups']['Creating'] = 'Erstellen...';
$_ADDONLANG['Backups']['Error'] = 'Fehler';
$_ADDONLANG['Backups']['Automatic'] = 'Automatisch';
$_ADDONLANG['Backups']['Manual'] = 'Manuell';

## Settings
### Hostname
$_ADDONLANG['Settings']['Hostname']['Title'] = 'Hostname';
$_ADDONLANG['Settings']['Hostname']['Description'] = 'Setzt den Hostnamen und das rDNS. Bitte erstellen Sie zuerst den A-Record.';
$_ADDONLANG['Settings']['Hostname']['Submit'] = 'Absenden';

### ISO
$_ADDONLANG['Settings']['ISO']['Title'] = 'ISO';
$_ADDONLANG['Settings']['ISO']['Description'] = 'Wenn Sie das Betriebssystem über das ISO-Image installieren, müssen Sie auch die Netzwerkschnittstelle statisch konfigurieren. Es läuft kein DHCP-Server.';
$_ADDONLANG['Settings']['ISO']['Image'] = 'ISO-Image';
$_ADDONLANG['Settings']['ISO']['Submit'] = 'ISO laden';
$_ADDONLANG['Settings']['ISO']['Remove'] = 'ISO auswerfen';

### Password
$_ADDONLANG['Settings']['Password']['Title'] = 'Passwort';
$_ADDONLANG['Settings']['Password']['Description'] = 'Das Installationspasswort wird nach 72 Stunden aus unseren Systemen entfernt. Sie müssen das Passwort bei Ihrer ersten Anmeldung ändern!';
$_ADDONLANG['Settings']['Password']['Submit'] = 'Passwort zurücksetzen';

### Reinstall
$_ADDONLANG['Settings']['Reinstall']['Title'] = 'Neuinstallation';
$_ADDONLANG['Settings']['Reinstall']['Description'] = 'Bitte verstehen Sie, dass durch die Neuinstallation alle Daten vom Server gelöscht werden. Diese Aktion ist unumkehrbar!';
$_ADDONLANG['Settings']['Reinstall']['OS'] = 'Betriebssystem';
$_ADDONLANG['Settings']['Reinstall']['Version'] = 'VERSION WÄHLEN';
$_ADDONLANG['Settings']['Reinstall']['Submit'] = 'Neuinstallieren';
$_ADDONLANG['Settings']['Reinstall']['SSHKey'] = 'SSH öffentlicher Schlüssel (optional)';
$_ADDONLANG['Settings']['Reinstall']['SSHKeyDesc'] = 'Fügen Sie hier Ihren SSH-öffentlichen Schlüssel ein (beginnt mit ssh-rsa, ssh-ed25519, etc.). Dieser wird automatisch zu ~/.ssh/authorized_keys für passwortlose Anmeldung hinzugefügt.';
$_ADDONLANG['Settings']['Reinstall']['PostScript'] = 'Post-Installations-Skript (optional)';
$_ADDONLANG['Settings']['Reinstall']['PostScriptDesc'] = 'Geben Sie ein Bash-Skript ein, das automatisch nach Abschluss der OS-Installation ausgeführt wird. Nützlich für die Installation von Paketen, Konfiguration von Diensten oder Einrichtung Ihrer Umgebung.';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPassword'] = 'SSH-Passwort-Authentifizierung deaktivieren';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPasswordDesc'] = 'Wenn aktiviert, ist nur SSH-Schlüssel-Authentifizierung erlaubt. Passwort-Login über SSH wird für erhöhte Sicherheit deaktiviert.';

### Firewall
$_ADDONLANG['Settings']['Firewall']['Title'] = 'Firewall';
$_ADDONLANG['Settings']['Firewall']['Description'] = 'Die Regeln werden von oben nach unten ausgewertet. Standardmäßig ist alles erlaubt. Die Firewall ist nur auf der öffentlichen Schnittstelle verfügbar. Nur der eingehende Verkehr wird von der Firewall gefiltert.';
$_ADDONLANG['Settings']['Firewall']['Action'] = 'Aktion';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Port';
$_ADDONLANG['Settings']['Firewall']['Protocol'] = 'Protokoll';
$_ADDONLANG['Settings']['Firewall']['Source'] = 'Quelle';
$_ADDONLANG['Settings']['Firewall']['Note'] = 'Notiz';
$_ADDONLANG['Settings']['Firewall']['Actions'] = 'Aktionen';
$_ADDONLANG['Settings']['Firewall']['Accept'] = 'Akzeptieren';
$_ADDONLANG['Settings']['Firewall']['Drop'] = 'Verwerfen';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Port-Nummer';
$_ADDONLANG['Settings']['Firewall']['SourceLabel'] = 'Bsp: x.x.x.x/xx (optional)';
$_ADDONLANG['Settings']['Firewall']['Notes'] = 'Notizen (optional)';
$_ADDONLANG['Settings']['Firewall']['Warning'] = 'Die Regeln müssen übernommen werden, um wirksam zu werden.';
$_ADDONLANG['Settings']['Firewall']['Submit'] = 'Firewall übernehmen';

if (file_exists(__DIR__ . '/overrides/german.php')) include_once(__DIR__ . '/overrides/german.php'); 