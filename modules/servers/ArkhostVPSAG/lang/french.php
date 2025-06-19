<?php

# Client Area
## General
$_ADDONLANG['Title'] = 'Informations VPS';
$_ADDONLANG['Uptime'] = 'Temps de fonctionnement';
$_ADDONLANG['IPv4'] = 'IPv4';
$_ADDONLANG['IPv6'] = 'IPv6';
$_ADDONLANG['Used'] = 'Utilisé';
$_ADDONLANG['Start'] = 'Démarrer';
$_ADDONLANG['Stop'] = 'Arrêter';
$_ADDONLANG['Restart'] = 'Redémarrer';
$_ADDONLANG['VNC'] = 'Console VNC';

## Confirmations
$_ADDONLANG['Confirm']['Stop']['Title'] = 'Arreter le VPS';
$_ADDONLANG['Confirm']['Stop']['Message'] = 'Voulez-vous arreter ce VPS. Cela va eteindre le serveur.';
$_ADDONLANG['Confirm']['Restart']['Title'] = 'Redemarrer le VPS';
$_ADDONLANG['Confirm']['Restart']['Message'] = 'Voulez-vous redemarrer ce VPS. Cela va redemarrer le serveur.';
$_ADDONLANG['Confirm']['Cancel'] = 'Annuler';
$_ADDONLANG['Confirm']['Confirm'] = 'Confirmer';
$_ADDONLANG['Confirm']['CreateBackup']['Title'] = 'Creer une sauvegarde';
$_ADDONLANG['Confirm']['CreateBackup']['Message'] = 'Voulez-vous creer une sauvegarde. Cela peut prendre plusieurs minutes.';
$_ADDONLANG['Confirm']['DeleteBackup']['Title'] = 'Supprimer la sauvegarde';
$_ADDONLANG['Confirm']['DeleteBackup']['Message'] = 'Voulez-vous supprimer cette sauvegarde. Cette action ne peut pas etre annulee.';
$_ADDONLANG['Confirm']['RestoreBackup']['Title'] = 'Restaurer la sauvegarde';
$_ADDONLANG['Confirm']['RestoreBackup']['Message'] = 'Voulez-vous restaurer cette sauvegarde. Cela ecrasera toutes les donnees actuelles et ne peut pas etre annule.';

## Navbar
$_ADDONLANG['Navbar']['Overview'] = 'Aperçu';
$_ADDONLANG['Navbar']['Graphs'] = 'Graphiques';
$_ADDONLANG['Navbar']['Backups'] = 'Sauvegardes';
$_ADDONLANG['Navbar']['Settings'] = 'Paramètres';

## Overview
$_ADDONLANG['Overview']['CPU'] = 'Utilisation CPU';
$_ADDONLANG['Overview']['RAM'] = 'Utilisation RAM';
$_ADDONLANG['Overview']['Bandwidth'] = 'Utilisation de la bande passante';
$_ADDONLANG['Overview']['Disk'] = 'Espace disque';
$_ADDONLANG['Overview']['DiskSize'] = 'Taille totale';
$_ADDONLANG['Overview']['CPUUsage'] = 'Utilisation CPU';

## Graphs
$_ADDONLANG['Graphs']['CPU'] = 'Utilisation CPU';
$_ADDONLANG['Graphs']['RAM'] = 'Utilisation RAM';
$_ADDONLANG['Graphs']['Disk'] = 'Utilisation disque';
$_ADDONLANG['Graphs']['Network'] = 'Utilisation réseau';
$_ADDONLANG['Graphs']['Hour'] = 'Heure';
$_ADDONLANG['Graphs']['Day'] = 'Jour';
$_ADDONLANG['Graphs']['Week'] = 'Semaine';
$_ADDONLANG['Graphs']['Month'] = 'Mois';
$_ADDONLANG['Graphs']['Year'] = 'Année';
$_ADDONLANG['Graphs']['Loading'] = 'Chargement du graphique...';

## Backups
$_ADDONLANG['Backups']['Description'] = 'Les dates pour lesquelles des sauvegardes de ce VPS sont disponibles sont listées ci-dessous. Vous pouvez les restaurer ou les supprimer en conséquence.';
$_ADDONLANG['Backups']['Warning'] = '* Veuillez garder à l\'esprit que les nouvelles sauvegardes remplaceront les plus anciennes.<br/>** Les sauvegardes automatiques remplaceront également vos sauvegardes manuelles à moins que les sauvegardes automatiques ne soient désactivées.<br/>*** Les sauvegardes automatiques sont effectuées 2 fois par semaine et font partie de notre plan de récupération après sinistre. Si vous désactivez les sauvegardes automatiques, vous désactivez également toute chance de récupération en cas de sinistre.<br/>**** Le système de fichiers de la sauvegarde pourrait ne pas être entièrement cohérent si le VPS écrivait sur le système de fichiers au moment de la sauvegarde. Pour des sauvegardes entièrement cohérentes, le serveur doit être arrêté pendant que la sauvegarde est créée.';
$_ADDONLANG['Backups']['Date'] = 'Date';
$_ADDONLANG['Backups']['Size'] = 'Taille';
$_ADDONLANG['Backups']['Type'] = 'Type';
$_ADDONLANG['Backups']['Status'] = 'État';
$_ADDONLANG['Backups']['Actions'] = 'Actions';
$_ADDONLANG['Backups']['Create'] = 'Sauvegarder maintenant';
$_ADDONLANG['Backups']['Available'] = 'Disponible';
$_ADDONLANG['Backups']['Creating'] = 'Création...';
$_ADDONLANG['Backups']['Error'] = 'Erreur';
$_ADDONLANG['Backups']['Automatic'] = 'Automatique';
$_ADDONLANG['Backups']['Manual'] = 'Manuel';

## Settings
### Hostname
$_ADDONLANG['Settings']['Hostname']['Title'] = 'Nom d\'hôte';
$_ADDONLANG['Settings']['Hostname']['Description'] = 'Définit le nom d\'hôte et le rDNS. Veuillez d\'abord créer l\'enregistrement A.';
$_ADDONLANG['Settings']['Hostname']['Submit'] = 'Soumettre';

### ISO
$_ADDONLANG['Settings']['ISO']['Title'] = 'ISO';
$_ADDONLANG['Settings']['ISO']['Description'] = 'Si vous installez le système d\'exploitation via l\'image ISO, vous devez également configurer l\'interface réseau de manière statique. Il n\'y a pas de serveur DHCP en cours d\'exécution.';
$_ADDONLANG['Settings']['ISO']['Image'] = 'Image ISO';
$_ADDONLANG['Settings']['ISO']['Submit'] = 'Charger ISO';
$_ADDONLANG['Settings']['ISO']['Remove'] = 'Éjecter ISO';

### Password
$_ADDONLANG['Settings']['Password']['Title'] = 'Mot de passe';
$_ADDONLANG['Settings']['Password']['Description'] = 'Le mot de passe d\'installation est supprimé de nos systèmes après 72 heures. Il est obligatoire de changer le mot de passe lors de votre première connexion !';
$_ADDONLANG['Settings']['Password']['Submit'] = 'Réinitialiser le mot de passe';

### Reinstall
$_ADDONLANG['Settings']['Reinstall']['Title'] = 'Réinstaller';
$_ADDONLANG['Settings']['Reinstall']['Description'] = 'Veuillez comprendre qu\'en réinstallant, toutes les données seront effacées du serveur. Cette action est irréversible !';
$_ADDONLANG['Settings']['Reinstall']['OS'] = 'Système d\'exploitation';
$_ADDONLANG['Settings']['Reinstall']['Version'] = 'CHOISIR LA VERSION';
$_ADDONLANG['Settings']['Reinstall']['Submit'] = 'Réinstaller';
$_ADDONLANG['Settings']['Reinstall']['SSHKey'] = 'Clé publique SSH (optionnel)';
$_ADDONLANG['Settings']['Reinstall']['SSHKeyDesc'] = 'Ajouter votre clé SSH pour connexion sans mot de passe';
$_ADDONLANG['Settings']['Reinstall']['PostScript'] = 'Script post-installation (optionnel)';
$_ADDONLANG['Settings']['Reinstall']['PostScriptDesc'] = 'Script bash à exécuter après l\'installation du SE';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPassword'] = 'Désactiver connexion SSH par mot de passe';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPasswordDesc'] = 'Autoriser uniquement l\'authentification par clé SSH';

### Firewall
$_ADDONLANG['Settings']['Firewall']['Title'] = 'Pare-feu';
$_ADDONLANG['Settings']['Firewall']['Description'] = 'Les règles sont évaluées de haut en bas. Par défaut, tout est autorisé. Le pare-feu n\'est disponible que sur l\'interface publique. Seul le trafic entrant sera filtré par le pare-feu.';
$_ADDONLANG['Settings']['Firewall']['Action'] = 'Action';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Port';
$_ADDONLANG['Settings']['Firewall']['Protocol'] = 'Protocole';
$_ADDONLANG['Settings']['Firewall']['Source'] = 'Source';
$_ADDONLANG['Settings']['Firewall']['Note'] = 'Note';
$_ADDONLANG['Settings']['Firewall']['Actions'] = 'Actions';
$_ADDONLANG['Settings']['Firewall']['Accept'] = 'Accepter';
$_ADDONLANG['Settings']['Firewall']['Drop'] = 'Rejeter';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Numéro de port';
$_ADDONLANG['Settings']['Firewall']['SourceLabel'] = 'Ex : x.x.x.x/xx (optionnel)';
$_ADDONLANG['Settings']['Firewall']['Notes'] = 'Notes (optionnel)';
$_ADDONLANG['Settings']['Firewall']['Warning'] = 'Les règles doivent être validées pour prendre effet.';
$_ADDONLANG['Settings']['Firewall']['Submit'] = 'Valider le pare-feu';

if (file_exists(__DIR__ . '/overrides/french.php')) include_once(__DIR__ . '/overrides/french.php'); 