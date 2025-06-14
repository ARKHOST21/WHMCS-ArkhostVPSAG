<?php

# Client Area
## General
$_ADDONLANG['Title'] = 'Informações VPS';
$_ADDONLANG['Uptime'] = 'Tempo de atividade';
$_ADDONLANG['IPv4'] = 'IPv4';
$_ADDONLANG['IPv6'] = 'IPv6';
$_ADDONLANG['Used'] = 'Utilizado';
$_ADDONLANG['Start'] = 'Iniciar';
$_ADDONLANG['Stop'] = 'Parar';
$_ADDONLANG['Restart'] = 'Reiniciar';
$_ADDONLANG['VNC'] = 'Consola VNC';

## Navbar
$_ADDONLANG['Navbar']['Overview'] = 'Visão geral';
$_ADDONLANG['Navbar']['Graphs'] = 'Gráficos';
$_ADDONLANG['Navbar']['Backups'] = 'Cópias de segurança';
$_ADDONLANG['Navbar']['Settings'] = 'Definições';

## Overview
$_ADDONLANG['Overview']['CPU'] = 'Utilização CPU';
$_ADDONLANG['Overview']['RAM'] = 'Utilização RAM';
$_ADDONLANG['Overview']['Bandwidth'] = 'Utilização de largura de banda';
$_ADDONLANG['Overview']['Disk'] = 'Espaço em disco';
$_ADDONLANG['Overview']['DiskSize'] = 'Tamanho total';
$_ADDONLANG['Overview']['CPUUsage'] = 'Utilização CPU';

## Graphs
$_ADDONLANG['Graphs']['CPU'] = 'Utilização CPU';
$_ADDONLANG['Graphs']['RAM'] = 'Utilização RAM';
$_ADDONLANG['Graphs']['Disk'] = 'Utilização de disco';
$_ADDONLANG['Graphs']['Network'] = 'Utilização de rede';
$_ADDONLANG['Graphs']['Hour'] = 'Hora';
$_ADDONLANG['Graphs']['Day'] = 'Dia';
$_ADDONLANG['Graphs']['Week'] = 'Semana';
$_ADDONLANG['Graphs']['Month'] = 'Mês';
$_ADDONLANG['Graphs']['Year'] = 'Ano';
$_ADDONLANG['Graphs']['Loading'] = 'Carregando gráfico...';

## Backups
$_ADDONLANG['Backups']['Description'] = 'As datas para as quais existem cópias de segurança disponíveis deste VPS estão listadas abaixo. Pode restaurá-las ou eliminá-las conforme necessário.';
$_ADDONLANG['Backups']['Warning'] = '* Tenha em conta que as novas cópias de segurança irão substituir as mais antigas.<br/>** As cópias de segurança automáticas também irão substituir as suas cópias de segurança manuais, a menos que as cópias de segurança automáticas estejam desativadas.<br/>*** As cópias de segurança automáticas são feitas 2 vezes por semana e fazem parte do nosso plano de recuperação de desastres. Se desativar as cópias de segurança automáticas, também desativa qualquer hipótese de recuperação em caso de desastre.<br/>**** O sistema de ficheiros da cópia de segurança pode não estar totalmente consistente se o VPS estivesse a escrever no sistema de ficheiros no momento da cópia de segurança. Para cópias de segurança totalmente consistentes, o servidor deve ser parado enquanto a cópia de segurança está a ser criada.';
$_ADDONLANG['Backups']['Date'] = 'Data';
$_ADDONLANG['Backups']['Size'] = 'Tamanho';
$_ADDONLANG['Backups']['Type'] = 'Tipo';
$_ADDONLANG['Backups']['Status'] = 'Estado';
$_ADDONLANG['Backups']['Actions'] = 'Ações';
$_ADDONLANG['Backups']['Create'] = 'Criar cópia agora';
$_ADDONLANG['Backups']['Available'] = 'Disponível';
$_ADDONLANG['Backups']['Creating'] = 'Criando...';
$_ADDONLANG['Backups']['Error'] = 'Erro';
$_ADDONLANG['Backups']['Automatic'] = 'Automático';
$_ADDONLANG['Backups']['Manual'] = 'Manual';

## Settings
### Hostname
$_ADDONLANG['Settings']['Hostname']['Title'] = 'Nome do anfitrião';
$_ADDONLANG['Settings']['Hostname']['Description'] = 'Define o nome do anfitrião e o rDNS. Por favor, crie primeiro o registo A.';
$_ADDONLANG['Settings']['Hostname']['Submit'] = 'Submeter';

### ISO
$_ADDONLANG['Settings']['ISO']['Title'] = 'ISO';
$_ADDONLANG['Settings']['ISO']['Description'] = 'Se instalar o sistema operativo através da imagem ISO, também deve configurar a interface de rede estaticamente. Não há servidor DHCP em execução.';
$_ADDONLANG['Settings']['ISO']['Image'] = 'Imagem ISO';
$_ADDONLANG['Settings']['ISO']['Submit'] = 'Carregar ISO';
$_ADDONLANG['Settings']['ISO']['Remove'] = 'Ejetar ISO';

### Password
$_ADDONLANG['Settings']['Password']['Title'] = 'Palavra-passe';
$_ADDONLANG['Settings']['Password']['Description'] = 'A palavra-passe de instalação é removida dos nossos sistemas após 72 horas. É obrigatório alterar a palavra-passe no primeiro início de sessão!';
$_ADDONLANG['Settings']['Password']['Submit'] = 'Redefinir palavra-passe';

### Reinstall
$_ADDONLANG['Settings']['Reinstall']['Title'] = 'Reinstalar';
$_ADDONLANG['Settings']['Reinstall']['Description'] = 'Por favor, compreenda que ao reinstalar, todos os dados serão apagados do servidor. Esta ação é irreversível!';
$_ADDONLANG['Settings']['Reinstall']['OS'] = 'Sistema operativo';
$_ADDONLANG['Settings']['Reinstall']['Version'] = 'ESCOLHER VERSÃO';
$_ADDONLANG['Settings']['Reinstall']['Submit'] = 'Reinstalar';
$_ADDONLANG['Settings']['Reinstall']['SSHKey'] = 'Chave pública SSH (opcional)';
$_ADDONLANG['Settings']['Reinstall']['SSHKeyDesc'] = 'Adicionar chave SSH para acesso sem palavra-passe';
$_ADDONLANG['Settings']['Reinstall']['PostScript'] = 'Script pós-instalação (opcional)';
$_ADDONLANG['Settings']['Reinstall']['PostScriptDesc'] = 'Script bash para executar após instalação do SO';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPassword'] = 'Desabilitar login SSH com palavra-passe';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPasswordDesc'] = 'Permitir apenas autenticação com chave SSH';

### Firewall
$_ADDONLANG['Settings']['Firewall']['Title'] = 'Firewall';
$_ADDONLANG['Settings']['Firewall']['Description'] = 'As regras são avaliadas de cima para baixo. Por defeito, tudo é permitido. A firewall está apenas disponível na interface pública. Apenas o tráfego de entrada será filtrado pela firewall.';
$_ADDONLANG['Settings']['Firewall']['Action'] = 'Ação';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Porta';
$_ADDONLANG['Settings']['Firewall']['Protocol'] = 'Protocolo';
$_ADDONLANG['Settings']['Firewall']['Source'] = 'Origem';
$_ADDONLANG['Settings']['Firewall']['Note'] = 'Nota';
$_ADDONLANG['Settings']['Firewall']['Actions'] = 'Ações';
$_ADDONLANG['Settings']['Firewall']['Accept'] = 'Aceitar';
$_ADDONLANG['Settings']['Firewall']['Drop'] = 'Descartar';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Número da porta';
$_ADDONLANG['Settings']['Firewall']['SourceLabel'] = 'Ex: x.x.x.x/xx (opcional)';
$_ADDONLANG['Settings']['Firewall']['Notes'] = 'Notas (opcional)';
$_ADDONLANG['Settings']['Firewall']['Warning'] = 'As regras devem ser confirmadas para entrarem em vigor.';
$_ADDONLANG['Settings']['Firewall']['Submit'] = 'Confirmar firewall';

if (file_exists(__DIR__ . '/overrides/portuguese-pt.php')) include_once(__DIR__ . '/overrides/portuguese-pt.php'); 