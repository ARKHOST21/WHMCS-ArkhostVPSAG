<?php

# Область клиента
## Общее
$_ADDONLANG['Title'] = 'Информация о VPS';
$_ADDONLANG['Uptime'] = 'Время работы';
$_ADDONLANG['IPv4'] = 'IPv4';
$_ADDONLANG['IPv6'] = 'IPv6';
$_ADDONLANG['Used'] = 'Использовано';
$_ADDONLANG['Start'] = 'Запуск';
$_ADDONLANG['Stop'] = 'Остановка';
$_ADDONLANG['Restart'] = 'Перезапуск';
$_ADDONLANG['VNC'] = 'Консоль VNC';
$_ADDONLANG['General']['Note'] = 'Примечание';
$_ADDONLANG['LoadingFirewallRules'] = 'Загрузка правил файрвола...';

## Подтверждения
$_ADDONLANG['Confirm']['Stop']['Title'] = 'Остановить VPS';
$_ADDONLANG['Confirm']['Stop']['Message'] = 'Вы уверены, что хотите остановить этот VPS? Это выключит сервер.';
$_ADDONLANG['Confirm']['Restart']['Title'] = 'Перезапустить VPS';
$_ADDONLANG['Confirm']['Restart']['Message'] = 'Вы уверены, что хотите перезапустить этот VPS? Это перезагрузит сервер.';
$_ADDONLANG['Confirm']['Cancel'] = 'Отмена';
$_ADDONLANG['Confirm']['Confirm'] = 'Подтвердить';
$_ADDONLANG['Confirm']['CreateBackup']['Title'] = 'Создать резервную копию';
$_ADDONLANG['Confirm']['CreateBackup']['Message'] = 'Хотите создать резервную копию. Это может занять несколько минут.';
$_ADDONLANG['Confirm']['DeleteBackup']['Title'] = 'Удалить резервную копию';
$_ADDONLANG['Confirm']['DeleteBackup']['Message'] = 'Хотите удалить эту резервную копию. Это действие нельзя отменить.';
$_ADDONLANG['Confirm']['RestoreBackup']['Title'] = 'Восстановить резервную копию';
$_ADDONLANG['Confirm']['RestoreBackup']['Message'] = 'Хотите восстановить эту резервную копию. Это перезапишет все текущие данные и не может быть отменено.';

## Навигационная панель
$_ADDONLANG['Navbar']['Overview'] = 'Обзор';
$_ADDONLANG['Navbar']['Graphs'] = 'Графики';
$_ADDONLANG['Navbar']['Backups'] = 'Резервные копии';
$_ADDONLANG['Navbar']['Settings'] = 'Настройки';

## Обзор
$_ADDONLANG['Overview']['ServerInfo'] = 'Информация о сервере';
$_ADDONLANG['Overview']['Hostname'] = 'Имя хоста';
$_ADDONLANG['Overview']['Status'] = 'Статус';
$_ADDONLANG['Overview']['Uptime'] = 'Время работы';
$_ADDONLANG['Overview']['OS'] = 'Операционная система';
$_ADDONLANG['Overview']['Location'] = 'Местоположение';
$_ADDONLANG['Overview']['ServerType'] = 'Тип сервера';
$_ADDONLANG['Overview']['ResourceAllocation'] = 'Распределение ресурсов';
$_ADDONLANG['Overview']['CPU_Cores'] = 'Ядра ЦП';
$_ADDONLANG['Overview']['Memory'] = 'Память';
$_ADDONLANG['Overview']['Storage'] = 'Хранилище';
$_ADDONLANG['Overview']['Traffic'] = 'Трафик';
$_ADDONLANG['Overview']['QuickActions'] = 'Быстрые действия';
$_ADDONLANG['Overview']['ResourceUsage'] = 'Использование ресурсов';
$_ADDONLANG['Overview']['CPU'] = 'Использование ЦП';
$_ADDONLANG['Overview']['CPUUsage'] = 'Использование';
$_ADDONLANG['Overview']['RAM'] = 'Использование ОЗУ';
$_ADDONLANG['Overview']['Bandwidth'] = 'Пропускная способность';
$_ADDONLANG['Overview']['Disk'] = 'Дисковое пространство';
$_ADDONLANG['Overview']['DiskSize'] = 'Общий размер';
$_ADDONLANG['General']['GB'] = 'ГБ';
$_ADDONLANG['General']['TB'] = 'ТБ';

## Графики
$_ADDONLANG['Graphs']['CPU'] = 'Использование ЦП';
$_ADDONLANG['Graphs']['RAM'] = 'Использование ОЗУ';
$_ADDONLANG['Graphs']['Disk'] = 'Использование диска';
$_ADDONLANG['Graphs']['Network'] = 'Использование сети';
$_ADDONLANG['Graphs']['Hour'] = 'Час';
$_ADDONLANG['Graphs']['Day'] = 'День';
$_ADDONLANG['Graphs']['Week'] = 'Неделя';
$_ADDONLANG['Graphs']['Month'] = 'Месяц';
$_ADDONLANG['Graphs']['Year'] = 'Год';
$_ADDONLANG['Graphs']['Loading'] = 'Загрузка графика...';

## Резервные копии
$_ADDONLANG['Backups']['Description'] = 'Ниже перечислены даты, на которые доступны резервные копии этого VPS. Вы можете восстановить или удалить их соответственно.';
$_ADDONLANG['Backups']['Warning'] = '* Пожалуйста, имейте в виду, что новые резервные копии заменят старые.<br/>** Автоматические резервные копии также заменят ваши ручные резервные копии, если автоматическое резервное копирование не отключено.<br/>*** Автоматические резервные копии создаются 2 раза в неделю и являются частью нашего плана аварийного восстановления. Если вы отключите автоматическое резервное копирование, вы также отключите любую возможность восстановления в случае катастрофы.<br/>**** Файловая система резервной копии может быть не полностью согласованной, если VPS записывал в файловую систему в момент создания резервной копии. Для полностью согласованных резервных копий сервер должен быть остановлен во время создания резервной копии.';
$_ADDONLANG['Backups']['Date'] = 'Дата';
$_ADDONLANG['Backups']['Size'] = 'Размер';
$_ADDONLANG['Backups']['Type'] = 'Тип';
$_ADDONLANG['Backups']['Status'] = 'Статус';
$_ADDONLANG['Backups']['Actions'] = 'Действия';
$_ADDONLANG['Backups']['Create'] = 'Создать резервную копию сейчас';
$_ADDONLANG['Backups']['Available'] = 'Доступна';
$_ADDONLANG['Backups']['Creating'] = 'Создание...';
$_ADDONLANG['Backups']['Error'] = 'Ошибка';
$_ADDONLANG['Backups']['Automatic'] = 'Автоматическая';
$_ADDONLANG['Backups']['Manual'] = 'Ручная';

## Настройки
### Имя хоста
$_ADDONLANG['Settings']['Hostname']['Title'] = 'Имя хоста';
$_ADDONLANG['Settings']['Hostname']['Description'] = 'Устанавливает имя хоста и обратную DNS-запись. Пожалуйста, сначала создайте запись A.';
$_ADDONLANG['Settings']['Hostname']['Submit'] = 'Отправить';

### ISO
$_ADDONLANG['Settings']['ISO']['Title'] = 'ISO';
$_ADDONLANG['Settings']['ISO']['Description'] = 'Если вы устанавливаете операционную систему через ISO-образ, вы также должны настроить сетевой интерфейс статически. DHCP-сервер не работает.';
$_ADDONLANG['Settings']['ISO']['Image'] = 'ISO-образ';
$_ADDONLANG['Settings']['ISO']['Submit'] = 'Загрузить ISO';
$_ADDONLANG['Settings']['ISO']['Remove'] = 'Извлечь ISO';

### Пароль
$_ADDONLANG['Settings']['Password']['Title'] = 'Пароль';
$_ADDONLANG['Settings']['Password']['Description'] = 'Пароль установки удаляется из наших систем через 72 часа. Обязательно смените пароль при первом входе в систему!';
$_ADDONLANG['Settings']['Password']['Submit'] = 'Сбросить пароль';

### Переустановка
$_ADDONLANG['Settings']['Reinstall']['Title'] = 'Переустановка';
$_ADDONLANG['Settings']['Reinstall']['Description'] = 'Пожалуйста, учтите, что при переустановке все данные будут удалены с сервера. Это действие необратимо!';
$_ADDONLANG['Settings']['Reinstall']['OS'] = 'Операционная система';
$_ADDONLANG['Settings']['Reinstall']['Version'] = 'ВЫБЕРИТЕ ВЕРСИЮ';
$_ADDONLANG['Settings']['Reinstall']['Submit'] = 'Переустановить';
$_ADDONLANG['Settings']['Reinstall']['SSHKey'] = 'Публичный SSH-ключ (необязательно)';
$_ADDONLANG['Settings']['Reinstall']['SSHKeyDesc'] = 'Вставьте сюда свой публичный SSH-ключ (начинается с ssh-rsa, ssh-ed25519 и т.д.). Он будет автоматически добавлен в ~/.ssh/authorized_keys для входа без пароля.';
$_ADDONLANG['Settings']['Reinstall']['PostScript'] = 'Скрипт после установки (необязательно)';
$_ADDONLANG['Settings']['Reinstall']['PostScriptDesc'] = 'Введите bash-скрипт, который будет автоматически выполнен после завершения установки ОС. Полезно для установки пакетов, настройки служб или настройки вашей среды.';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPassword'] = 'Отключить аутентификацию по паролю SSH';
$_ADDONLANG['Settings']['Reinstall']['DisableSSHPasswordDesc'] = 'Если включено, разрешена только аутентификация по SSH-ключу. Вход по паролю через SSH будет отключен для повышенной безопасности.';

### Файрвол
$_ADDONLANG['Settings']['Firewall']['Title'] = 'Файрвол';
$_ADDONLANG['Settings']['Firewall']['Description'] = 'Правила оцениваются сверху вниз. По умолчанию разрешено все. Файрвол доступен только на публичном интерфейсе. Файрвол будет фильтровать только входящий трафик.';
$_ADDONLANG['Settings']['Firewall']['AddNewRule'] = 'Добавить новое правило файрвола';
$_ADDONLANG['Settings']['Firewall']['CurrentRules'] = 'Текущие правила файрвола';
$_ADDONLANG['Settings']['Firewall']['AddRule'] = 'Добавить правило';
$_ADDONLANG['Settings']['Firewall']['Action'] = 'Действие';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Порт';
$_ADDONLANG['Settings']['Firewall']['Protocol'] = 'Протокол';
$_ADDONLANG['Settings']['Firewall']['Source'] = 'Источник';
$_ADDONLANG['Settings']['Firewall']['Note'] = 'Примечание';
$_ADDONLANG['Settings']['Firewall']['Actions'] = 'Действия';
$_ADDONLANG['Settings']['Firewall']['Accept'] = 'Принять';
$_ADDONLANG['Settings']['Firewall']['Drop'] = 'Отклонить';
$_ADDONLANG['Settings']['Firewall']['Port'] = 'Номер порта';
$_ADDONLANG['Settings']['Firewall']['SourceLabel'] = 'Пример: x.x.x.x/xx (необязательно)';
$_ADDONLANG['Settings']['Firewall']['Notes'] = 'Примечания (необязательно)';
$_ADDONLANG['Settings']['Firewall']['Warning'] = 'Правила должны быть применены, чтобы вступить в силу.';
$_ADDONLANG['Settings']['Firewall']['Submit'] = 'Применить файрвол';

if (file_exists(__DIR__ . '/overrides/english.php')) include_once(__DIR__ . '/overrides/english.php');
