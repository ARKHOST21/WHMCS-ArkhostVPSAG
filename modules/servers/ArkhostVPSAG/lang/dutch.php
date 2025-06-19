<?php

# Klantgedeelte
## Algemeen
$_ADDONLANG['Title'] = 'VPS Informatie';
$_ADDONLANG['Uptime'] = 'Uptime';
$_ADDONLANG['IPv4'] = 'IPv4';
$_ADDONLANG['IPv6'] = 'IPv6';
$_ADDONLANG['Used'] = 'Gebruikt';
$_ADDONLANG['Start'] = 'Start';
$_ADDONLANG['Stop'] = 'Stop';
$_ADDONLANG['Restart'] = 'Herstarten';
$_ADDONLANG['VNC'] = 'VNC-console';

## Bevestigingen
$_ADDONLANG['Confirm']['Stop']['Title'] = 'VPS stoppen';
$_ADDONLANG['Confirm']['Stop']['Message'] = 'Weet u zeker dat u deze VPS wilt stoppen? Dit zal de server afsluiten.';
$_ADDONLANG['Confirm']['Restart']['Title'] = 'VPS herstarten';
$_ADDONLANG['Confirm']['Restart']['Message'] = 'Weet u zeker dat u deze VPS wilt herstarten? Dit zal de server opnieuw opstarten.';
$_ADDONLANG['Confirm']['Cancel'] = 'Annuleren';
$_ADDONLANG['Confirm']['Confirm'] = 'Bevestigen';
$_ADDONLANG['Confirm']['CreateBackup']['Title'] = 'Back-up maken';
$_ADDONLANG['Confirm']['CreateBackup']['Message'] = 'Wilt u een back-up maken. Dit kan enkele minuten duren.';
$_ADDONLANG['Confirm']['DeleteBackup']['Title'] = 'Back-up verwijderen';
$_ADDONLANG['Confirm']['DeleteBackup']['Message'] = 'Wilt u deze back-up verwijderen. Deze actie kan niet ongedaan worden gemaakt.';
$_ADDONLANG['Confirm']['RestoreBackup']['Title'] = 'Back-up herstellen';
$_ADDONLANG['Confirm']['RestoreBackup']['Message'] = 'Wilt u deze back-up herstellen. Dit overschrijft alle huidige gegevens en kan niet ongedaan worden gemaakt.';

## Navigatiebalk
$_ADDONLANG['Navbar']['Overview'] = 'Overzicht';
$_ADDONLANG['Navbar']['Graphs'] = 'Grafieken';
$_ADDONLANG['Navbar']['Backups'] = 'Back-ups';
$_ADDONLANG['Navbar']['Settings'] = 'Instellingen';

## Overzicht
$_ADDONLANG['Overview']['CPU'] = 'CPU-gebruik';
$_ADDONLANG['Overview']['RAM'] = 'RAM-gebruik';
$_ADDONLANG['Overview']['Bandwidth'] = 'Bandbreedtegebruik';
$_ADDONLANG['Overview']['Disk'] = 'Schijfruimte';
$_ADDONLANG['Overview']['DiskSize'] = 'Totale grootte';

## Grafieken
$_ADDONLANG['Graphs']['CPU'] = 'CPU-gebruik';
$_ADDONLANG['Graphs']['RAM'] = 'RAM-gebruik';
$_ADDONLANG['Graphs']['Disk'] = 'Schijfgebruik';
$_ADDONLANG['Graphs']['Network'] = 'Netwerkgebruik';
$_ADDONLANG['Graphs']['Hour'] = 'Uur';
$_ADDONLANG['Graphs']['Day'] = 'Dag';
$_ADDONLANG['Graphs']['Week'] = 'Week';
$_ADDONLANG['Graphs']['Month'] = 'Maand';
$_ADDONLANG['Graphs']['Year'] = 'Jaar';

## Back-ups
$_ADDONLANG['Backups']['Description'] = 'De datums waarop back-ups van deze VPS beschikbaar zijn, staan hieronder vermeld. U kunt ze dienovereenkomstig herstellen of verwijderen.';
$_ADDONLANG['Backups']['Warning'] = '* Houd er rekening mee dat nieuwe back-ups de oudere zullen vervangen.<br/>** De geautomatiseerde back-ups zullen ook uw handmatige back-ups vervangen, tenzij de geautomatiseerde back-ups zijn uitgeschakeld.<br/>*** De geautomatiseerde back-ups worden 2 keer per week gemaakt en maken deel uit van ons noodherstelplan. Als u de geautomatiseerde back-ups uitschakelt, schakelt u ook elke kans op herstel in geval van een ramp uit.<br/>**** Het bestandssysteem van de back-up is mogelijk niet volledig consistent als de VPS op het moment van de back-up naar het bestandssysteem schreef. Voor volledig consistente back-ups moet de server worden gestopt terwijl de back-up wordt gemaakt.';
$_ADDONLANG['Backups']['Date'] = 'Datum';
$_ADDONLANG['Backups']['Size'] = 'Grootte';
$_ADDONLANG['Backups']['Type'] = 'Type';
$_ADDONLANG['Backups']['Status'] = 'Status';
$_ADDONLANG['Backups']['Actions'] = 'Acties';
$_ADDONLANG['Backups']['Create'] = 'Nu Back-up Maken';
$_ADDONLANG['Backups']['Available'] = 'Beschikbaar';
$_ADDONLANG['Backups']['Creating'] = 'Bezig met maken...';
$_ADDONLANG['Backups']['Error'] = 'Fout';
$_ADDONLANG['Backups']['Automatic'] = 'Automatisch';
$_ADDONLANG['Backups']['Manual'] = 'Handmatig';

## Instellingen
### Hostnaam
$_ADDONLANG['Settings']['Hostname']['Title'] = 'Hostnaam';
$_ADDONLANG['Settings']['Hostname']['Description'] = 'Stelt de hostnaam en de rDNS in. Maak eerst het A-record aan.';
$_ADDONLANG['Settings']['Hostname']['Submit'] = 'Verzenden';

### ISO
$_ADDONLANG['Settings']['ISO']['Title'] = 'ISO';
$_ADDONLANG['Settings']['ISO']['Description'] = 'Als u het besturingssysteem via het ISO-image installeert, moet u ook de netwerkinterface statisch configureren. Er draait geen DHCP-server.';
$_ADDONLANG['Settings']['ISO']['Image'] = 'ISO-image';
$_ADDONLANG['Settings']['ISO']['Submit'] = 'ISO Laden';
$_ADDONLANG['Settings']['ISO']['Remove'] = 'ISO Uitwerpen';

### Wachtwoord
$_ADDONLANG['Settings']['Password']['Title'] = 'Wachtwoord';
$_ADDONLANG['Settings']['Password']['Description'] = 'Het installatiewachtwoord wordt na 72 uur uit onze systemen verwijderd. Het is verplicht om het wachtwoord bij uw eerste aanmelding te wijzigen!';
$_ADDONLANG['Settings']['Password']['Submit'] = 'Wachtwoord Resetten';

### Herinstalleren
$_ADDONLANG['Settings']['Reinstall']['Title'] = 'Herinstalleren';
$_ADDONLANG['Settings']['Reinstall']['Description'] = 'Begrijp alstublieft dat bij het herinstalleren alle gegevens van de server worden gewist. Deze actie is onomkeerbaar!';
$_ADDONLANG['Settings']['Reinstall']['OS'] = 'Besturingssysteem';
$_ADDONLANG['Settings']['Reinstall']['Version'] = 'KIES VERSIE';
$_ADDONLANG['Settings']['Reinstall']['Submit'] = 'Herinstalleren';

### Firewall
$_ADDONLANG['Settings']['Firewall']['Title'] = 'Firewall';
$_ADDONLANG['Settings']['Firewall']['Description'] = 'De regels worden van boven naar beneden geëvalueerd. Standaard is alles toegestaan. De firewall is alleen beschikbaar op de openbare interface. Alleen het inkomende verkeer wordt door de firewall gefilterd.';
$_ADDONLANG['Settings']['Firewall']['Action'] = 'Actie';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Poort';
$_ADDONLANG['Settings']['Firewall']['Protocol'] = 'Protocol';
$_ADDONLANG['Settings']['Firewall']['Source'] = 'Bron';
$_ADDONLANG['Settings']['Firewall']['Note'] = 'Notitie';
$_ADDONLANG['Settings']['Firewall']['Actions'] = 'Acties';
$_ADDONLANG['Settings']['Firewall']['Accept'] = 'Accepteren';
$_ADDONLANG['Settings']['Firewall']['Drop'] = 'Weigeren';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Poortnummer';
$_ADDONLANG['Settings']['Firewall']['SourceLabel'] = 'Bijv: x.x.x.x/xx (optioneel)';
$_ADDONLANG['Settings']['Firewall']['Notes'] = 'Notities (optioneel)';
$_ADDONLANG['Settings']['Firewall']['Warning'] = 'De regels moeten worden toegepast om van kracht te worden.';
$_ADDONLANG['Settings']['Firewall']['Submit'] = 'Firewall Toepassen';

if (file_exists(__DIR__ . '/overrides/english.php')) include_once(__DIR__ . '/overrides/english.php');
