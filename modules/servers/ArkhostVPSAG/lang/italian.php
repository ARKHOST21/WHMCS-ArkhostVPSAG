<?php

# Client Area
## General
$_ADDONLANG['Title'] = 'Informazioni VPS';
$_ADDONLANG['Uptime'] = 'Tempo di attivitÃ ';
$_ADDONLANG['IPv4'] = 'IPv4';
$_ADDONLANG['IPv6'] = 'IPv6';
$_ADDONLANG['Used'] = 'Utilizzato';
$_ADDONLANG['Start'] = 'Avvia';
$_ADDONLANG['Stop'] = 'Ferma';
$_ADDONLANG['Restart'] = 'Riavvia';
$_ADDONLANG['VNC'] = 'Console VNC';

## Navbar
$_ADDONLANG['Navbar']['Overview'] = 'Panoramica';
$_ADDONLANG['Navbar']['Graphs'] = 'Grafici';
$_ADDONLANG['Navbar']['Backups'] = 'Backup';
$_ADDONLANG['Navbar']['Settings'] = 'Impostazioni';

## Overview
$_ADDONLANG['Overview']['CPU'] = 'Utilizzo CPU';
$_ADDONLANG['Overview']['RAM'] = 'Utilizzo RAM';
$_ADDONLANG['Overview']['Bandwidth'] = 'Utilizzo Banda';
$_ADDONLANG['Overview']['Disk'] = 'Spazio Disco';
$_ADDONLANG['Overview']['DiskSize'] = 'Dimensione Totale';
$_ADDONLANG['Overview']['CPUUsage'] = 'Utilizzo CPU';

## Graphs
$_ADDONLANG['Graphs']['CPU'] = 'Utilizzo CPU';
$_ADDONLANG['Graphs']['RAM'] = 'Utilizzo RAM';
$_ADDONLANG['Graphs']['Disk'] = 'Utilizzo Disco';
$_ADDONLANG['Graphs']['Network'] = 'Utilizzo Rete';
$_ADDONLANG['Graphs']['Hour'] = 'Ora';
$_ADDONLANG['Graphs']['Day'] = 'Giorno';
$_ADDONLANG['Graphs']['Week'] = 'Settimana';
$_ADDONLANG['Graphs']['Month'] = 'Mese';
$_ADDONLANG['Graphs']['Year'] = 'Anno';
$_ADDONLANG['Graphs']['Loading'] = 'Caricamento grafico...';

## Backups
$_ADDONLANG['Backups']['Description'] = 'Le date per le quali sono disponibili i backup di questo VPS sono elencate di seguito. Puoi ripristinarli o eliminarli di conseguenza.';
$_ADDONLANG['Backups']['Warning'] = '* Tieni presente che i nuovi backup sostituiranno quelli più vecchi.<br/>** I backup automatici sostituiranno anche i tuoi backup manuali a meno che i backup automatici non siano disabilitati.<br/>*** I backup automatici vengono eseguiti 2 volte a settimana e fanno parte del nostro piano di disaster recovery. Se disabiliti i backup automatici, disabiliti anche qualsiasi possibilità di recupero in caso di disastro.<br/>**** Il file system del backup potrebbe non essere completamente coerente se il VPS stava scrivendo sul filesystem al momento del backup. Per backup completamente coerenti, il server deve essere fermato durante la creazione del backup.';
$_ADDONLANG['Backups']['Date'] = 'Data';
$_ADDONLANG['Backups']['Size'] = 'Dimensione';
$_ADDONLANG['Backups']['Type'] = 'Tipo';
$_ADDONLANG['Backups']['Status'] = 'Stato';
$_ADDONLANG['Backups']['Actions'] = 'Azioni';
$_ADDONLANG['Backups']['Create'] = 'Backup Ora';
$_ADDONLANG['Backups']['Available'] = 'Disponibile';
$_ADDONLANG['Backups']['Creating'] = 'Creazione...';
$_ADDONLANG['Backups']['Error'] = 'Errore';
$_ADDONLANG['Backups']['Automatic'] = 'Automatico';
$_ADDONLANG['Backups']['Manual'] = 'Manuale';

## Settings
### Hostname
$_ADDONLANG['Settings']['Hostname']['Title'] = 'Hostname';
$_ADDONLANG['Settings']['Hostname']['Description'] = 'Imposta l\'hostname e l\'rDNS. Crea prima il record A.';
$_ADDONLANG['Settings']['Hostname']['Submit'] = 'Invia';

### ISO
$_ADDONLANG['Settings']['ISO']['Title'] = 'ISO';
$_ADDONLANG['Settings']['ISO']['Description'] = 'Se installi il sistema operativo tramite l\'immagine ISO, devi anche configurare staticamente l\'interfaccia di rete. Non c\'è un server DHCP in esecuzione.';
$_ADDONLANG['Settings']['ISO']['Image'] = 'Immagine ISO';
$_ADDONLANG['Settings']['ISO']['Submit'] = 'Carica ISO';
$_ADDONLANG['Settings']['ISO']['Remove'] = 'Espelli ISO';

### Password
$_ADDONLANG['Settings']['Password']['Title'] = 'Password';
$_ADDONLANG['Settings']['Password']['Description'] = 'La password di installazione viene rimossa dai nostri sistemi dopo 72 ore. È obbligatorio cambiare la password al primo accesso!';
$_ADDONLANG['Settings']['Password']['Submit'] = 'Reimposta Password';

### Reinstall
$_ADDONLANG['Settings']['Reinstall']['Title'] = 'Reinstalla';
$_ADDONLANG['Settings']['Reinstall']['Description'] = 'Ti preghiamo di comprendere che reinstallando, tutti i dati saranno cancellati dal server. Questa azione è irreversibile!';
$_ADDONLANG['Settings']['Reinstall']['OS'] = 'Sistema Operativo';
$_ADDONLANG['Settings']['Reinstall']['Version'] = 'SCEGLI VERSIONE';
$_ADDONLANG['Settings']['Reinstall']['Submit'] = 'Reinstalla';
$_ADDONLANG['Settings']['Reinstall']['SSHKey'] = 'Chiave pubblica SSH (opzionale)';
$_ADDONLANG['Settings']['Reinstall']['SSHKeyDesc'] = 'Aggiungi la tua chiave SSH per accesso senza password';
$_ADDONLANG['Settings']['Reinstall']['PostScript'] = 'Script post-installazione (opzionale)';
$_ADDONLANG['Settings']['Reinstall']['PostScriptDesc'] = 'Script bash da eseguire dopo l\'installazione del SO';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPassword'] = 'Disabilita login SSH con password';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPasswordDesc'] = 'Consenti solo autenticazione con chiave SSH';

### Firewall
$_ADDONLANG['Settings']['Firewall']['Title'] = 'Firewall';
$_ADDONLANG['Settings']['Firewall']['Description'] = 'Le regole vengono valutate dall\'alto verso il basso. Per impostazione predefinita, tutto è consentito. Il firewall è disponibile solo sull\'interfaccia pubblica. Solo il traffico in entrata sarà filtrato dal firewall.';
$_ADDONLANG['Settings']['Firewall']['Action'] = 'Azione';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Porta';
$_ADDONLANG['Settings']['Firewall']['Protocol'] = 'Protocollo';
$_ADDONLANG['Settings']['Firewall']['Source'] = 'Origine';
$_ADDONLANG['Settings']['Firewall']['Note'] = 'Nota';
$_ADDONLANG['Settings']['Firewall']['Actions'] = 'Azioni';
$_ADDONLANG['Settings']['Firewall']['Accept'] = 'Accetta';
$_ADDONLANG['Settings']['Firewall']['Drop'] = 'Scarta';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Numero Porta';
$_ADDONLANG['Settings']['Firewall']['SourceLabel'] = 'Es: x.x.x.x/xx (opzionale)';
$_ADDONLANG['Settings']['Firewall']['Notes'] = 'Note (opzionale)';
$_ADDONLANG['Settings']['Firewall']['Warning'] = 'Le regole devono essere confermate per entrare in vigore.';
$_ADDONLANG['Settings']['Firewall']['Submit'] = 'Conferma Firewall';

if (file_exists(__DIR__ . '/overrides/italian.php')) include_once(__DIR__ . '/overrides/italian.php'); 