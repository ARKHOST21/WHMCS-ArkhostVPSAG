<?php

# Client Area
## General
$_ADDONLANG['Title'] = 'Información VPS';
$_ADDONLANG['Uptime'] = 'Tiempo de actividad';
$_ADDONLANG['IPv4'] = 'IPv4';
$_ADDONLANG['IPv6'] = 'IPv6';
$_ADDONLANG['Used'] = 'Usado';
$_ADDONLANG['Start'] = 'Iniciar';
$_ADDONLANG['Stop'] = 'Detener';
$_ADDONLANG['Restart'] = 'Reiniciar';
$_ADDONLANG['VNC'] = 'Consola VNC';
$_ADDONLANG['General']['Note'] = 'Nota';
$_ADDONLANG['LoadingFirewallRules'] = 'Cargando reglas de firewall...';

## Confirmaciones
$_ADDONLANG['Confirm']['Stop']['Title'] = 'Detener VPS';
$_ADDONLANG['Confirm']['Stop']['Message'] = '¿Está seguro de que desea detener este VPS? Esto apagará el servidor.';
$_ADDONLANG['Confirm']['Restart']['Title'] = 'Reiniciar VPS';
$_ADDONLANG['Confirm']['Restart']['Message'] = '¿Está seguro de que desea reiniciar este VPS? Esto reiniciará el servidor.';
$_ADDONLANG['Confirm']['Cancel'] = 'Cancelar';
$_ADDONLANG['Confirm']['Confirm'] = 'Confirmar';
$_ADDONLANG['Confirm']['CreateBackup']['Title'] = 'Crear copia de seguridad';
$_ADDONLANG['Confirm']['CreateBackup']['Message'] = 'Desea crear una copia de seguridad. Esto puede tomar varios minutos.';
$_ADDONLANG['Confirm']['DeleteBackup']['Title'] = 'Eliminar copia de seguridad';
$_ADDONLANG['Confirm']['DeleteBackup']['Message'] = 'Desea eliminar esta copia de seguridad. Esta acción no se puede deshacer.';
$_ADDONLANG['Confirm']['RestoreBackup']['Title'] = 'Restaurar copia de seguridad';
$_ADDONLANG['Confirm']['RestoreBackup']['Message'] = 'Desea restaurar esta copia de seguridad. Esto sobrescribirá todos los datos actuales y no se puede deshacer.';

## Navbar
$_ADDONLANG['Navbar']['Overview'] = 'Resumen';
$_ADDONLANG['Navbar']['Graphs'] = 'Gráficos';
$_ADDONLANG['Navbar']['Backups'] = 'Copias de seguridad';
$_ADDONLANG['Navbar']['Settings'] = 'Configuración';

## Overview
$_ADDONLANG['Overview']['ServerInfo'] = 'Información del Servidor';
$_ADDONLANG['Overview']['Hostname'] = 'Nombre del host';
$_ADDONLANG['Overview']['Status'] = 'Estado';
$_ADDONLANG['Overview']['Uptime'] = 'Tiempo de actividad';
$_ADDONLANG['Overview']['OS'] = 'Sistema Operativo';
$_ADDONLANG['Overview']['Location'] = 'Ubicación';
$_ADDONLANG['Overview']['ServerType'] = 'Tipo de Servidor';
$_ADDONLANG['Overview']['ResourceAllocation'] = 'Asignación de Recursos';
$_ADDONLANG['Overview']['CPU_Cores'] = 'Núcleos de CPU';
$_ADDONLANG['Overview']['Memory'] = 'Memoria';
$_ADDONLANG['Overview']['Storage'] = 'Almacenamiento';
$_ADDONLANG['Overview']['Traffic'] = 'Tráfico';
$_ADDONLANG['Overview']['QuickActions'] = 'Acciones Rápidas';
$_ADDONLANG['Overview']['ResourceUsage'] = 'Uso de Recursos';
$_ADDONLANG['Overview']['CPU'] = 'Uso de CPU';
$_ADDONLANG['Overview']['CPUUsage'] = 'Uso';
$_ADDONLANG['Overview']['RAM'] = 'Uso de RAM';
$_ADDONLANG['Overview']['Bandwidth'] = 'Ancho de banda';
$_ADDONLANG['Overview']['Disk'] = 'Espacio en disco';
$_ADDONLANG['Overview']['DiskSize'] = 'Tamaño total';
$_ADDONLANG['General']['GB'] = 'GB';
$_ADDONLANG['General']['TB'] = 'TB';

## Graphs
$_ADDONLANG['Graphs']['CPU'] = 'Uso de CPU';
$_ADDONLANG['Graphs']['RAM'] = 'Uso de RAM';
$_ADDONLANG['Graphs']['Disk'] = 'Uso de disco';
$_ADDONLANG['Graphs']['Network'] = 'Uso de red';
$_ADDONLANG['Graphs']['Hour'] = 'Hora';
$_ADDONLANG['Graphs']['Day'] = 'Día';
$_ADDONLANG['Graphs']['Week'] = 'Semana';
$_ADDONLANG['Graphs']['Month'] = 'Mes';
$_ADDONLANG['Graphs']['Year'] = 'Año';
$_ADDONLANG['Graphs']['Loading'] = 'Cargando gráfico...';

## Backups
$_ADDONLANG['Backups']['Description'] = 'Las fechas para las cuales hay copias de seguridad disponibles de este VPS se enumeran a continuación. Puede restaurarlas o eliminarlas en consecuencia.';
$_ADDONLANG['Backups']['Warning'] = '* Tenga en cuenta que las nuevas copias de seguridad reemplazarán las más antiguas.<br/>** Las copias de seguridad automáticas también reemplazarán sus copias de seguridad manuales a menos que las copias de seguridad automáticas estén deshabilitadas.<br/>*** Las copias de seguridad automáticas se realizan 2 veces por semana y son parte de nuestro plan de recuperación ante desastres. Si deshabilita las copias de seguridad automáticas, también deshabilita cualquier posibilidad de recuperación en caso de desastre.<br/>**** El sistema de archivos de la copia de seguridad podría no estar completamente consistente si el VPS estaba escribiendo en el sistema de archivos en el momento de la copia de seguridad. Para copias de seguridad completamente consistentes, el servidor debe detenerse mientras se crea la copia de seguridad.';
$_ADDONLANG['Backups']['Date'] = 'Fecha';
$_ADDONLANG['Backups']['Size'] = 'Tamaño';
$_ADDONLANG['Backups']['Type'] = 'Tipo';
$_ADDONLANG['Backups']['Status'] = 'Estado';
$_ADDONLANG['Backups']['Actions'] = 'Acciones';
$_ADDONLANG['Backups']['Create'] = 'Crear copia ahora';
$_ADDONLANG['Backups']['Available'] = 'Disponible';
$_ADDONLANG['Backups']['Creating'] = 'Creando...';
$_ADDONLANG['Backups']['Error'] = 'Error';
$_ADDONLANG['Backups']['Automatic'] = 'Automático';
$_ADDONLANG['Backups']['Manual'] = 'Manual';

## Settings
### Hostname
$_ADDONLANG['Settings']['Hostname']['Title'] = 'Nombre del host';
$_ADDONLANG['Settings']['Hostname']['Description'] = 'Establece el nombre del host y el rDNS. Cree primero el registro A.';
$_ADDONLANG['Settings']['Hostname']['Submit'] = 'Enviar';

### ISO
$_ADDONLANG['Settings']['ISO']['Title'] = 'ISO';
$_ADDONLANG['Settings']['ISO']['Description'] = 'Si instala el sistema operativo a través de la imagen ISO, también debe configurar la interfaz de red estáticamente. No hay un servidor DHCP ejecutándose.';
$_ADDONLANG['Settings']['ISO']['Image'] = 'Imagen ISO';
$_ADDONLANG['Settings']['ISO']['Submit'] = 'Cargar ISO';
$_ADDONLANG['Settings']['ISO']['Remove'] = 'Expulsar ISO';

### Password
$_ADDONLANG['Settings']['Password']['Title'] = 'Contraseña';
$_ADDONLANG['Settings']['Password']['Description'] = 'La contraseña de instalación se elimina de nuestros sistemas después de 72 horas. ¡Es obligatorio cambiar la contraseña en su primer inicio de sesión!';
$_ADDONLANG['Settings']['Password']['Submit'] = 'Restablecer contraseña';

### Reinstall
$_ADDONLANG['Settings']['Reinstall']['Title'] = 'Reinstalar';
$_ADDONLANG['Settings']['Reinstall']['Description'] = 'Por favor entienda que al reinstalar, todos los datos se borrarán del servidor. ¡Esta acción es irreversible!';
$_ADDONLANG['Settings']['Reinstall']['OS'] = 'Sistema operativo';
$_ADDONLANG['Settings']['Reinstall']['Version'] = 'ELEGIR VERSIÓN';
$_ADDONLANG['Settings']['Reinstall']['Submit'] = 'Reinstalar';
$_ADDONLANG['Settings']['Reinstall']['SSHKey'] = 'Clave pública SSH (opcional)';
$_ADDONLANG['Settings']['Reinstall']['SSHKeyDesc'] = 'Añadir clave SSH para acceso sin contraseña';
$_ADDONLANG['Settings']['Reinstall']['PostScript'] = 'Script post-instalación (opcional)';
$_ADDONLANG['Settings']['Reinstall']['PostScriptDesc'] = 'Script bash a ejecutar después de la instalación del SO';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPassword'] = 'Deshabilitar login SSH con contraseña';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPasswordDesc'] = 'Solo permitir autenticación con clave SSH';

### Firewall
$_ADDONLANG['Settings']['Firewall']['Title'] = 'Firewall';
$_ADDONLANG['Settings']['Firewall']['Description'] = 'Las reglas se evalúan de arriba hacia abajo. Por defecto, todo está permitido. El firewall solo está disponible en la interfaz pública. Solo el tráfico entrante será filtrado por el firewall.';
$_ADDONLANG['Settings']['Firewall']['AddNewRule'] = 'Agregar Nueva Regla de Firewall';
$_ADDONLANG['Settings']['Firewall']['CurrentRules'] = 'Reglas de Firewall Actuales';
$_ADDONLANG['Settings']['Firewall']['AddRule'] = 'Agregar Regla';
$_ADDONLANG['Settings']['Firewall']['Action'] = 'Acción';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Puerto';
$_ADDONLANG['Settings']['Firewall']['Protocol'] = 'Protocolo';
$_ADDONLANG['Settings']['Firewall']['Source'] = 'Origen';
$_ADDONLANG['Settings']['Firewall']['Note'] = 'Nota';
$_ADDONLANG['Settings']['Firewall']['Actions'] = 'Acciones';
$_ADDONLANG['Settings']['Firewall']['Accept'] = 'Aceptar';
$_ADDONLANG['Settings']['Firewall']['Drop'] = 'Descartar';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Número de puerto';
$_ADDONLANG['Settings']['Firewall']['SourceLabel'] = 'Ej: x.x.x.x/xx (opcional)';
$_ADDONLANG['Settings']['Firewall']['Notes'] = 'Notas (opcional)';
$_ADDONLANG['Settings']['Firewall']['Warning'] = 'Las reglas deben confirmarse para que surtan efecto.';
$_ADDONLANG['Settings']['Firewall']['Submit'] = 'Confirmar firewall';

if (file_exists(__DIR__ . '/overrides/spanish.php')) include_once(__DIR__ . '/overrides/spanish.php'); 