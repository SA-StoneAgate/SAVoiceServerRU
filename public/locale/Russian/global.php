<?php
/**
 * Russian Locale
 *
 * @locale charset      ISO 639-1 - http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @locale region       ISO-3166 (2 Alpha numeric) - https://www.iso.org/obp/ui/#search
 * @locale select2      refer to path includes/dynamics/select2/select2_locale_{value}.js
 * @locale tinymce      refer to path includes/jscripts/tinymce/langs/{value}.js
 * @package locale/English
 */
/*-----------------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+------------------------------------------------------------------+
| Russian Language Fileset
| Filename: global.php
| Author of translation: Petros R. Melikyan (StoneAgate)
+------------------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
setlocale(LC_ALL, "ru_RU.UTF-8"); // Linux Server (Windows may differ)
$locale['charset'] = "utf-8";
$locale['region'] = "RU";
$locale['xml_lang'] = "ru";
$locale['tinymce'] = "ru";
$locale['select2'] = "ru";
$locale['phpmailer'] = "ru";
$locale['datepicker'] = "ru";
$locale['password_strength'] = "ru";
// Full & Short Months
$locale['months']  = "&nbsp;|Январь|Февраль|Март|Апрель|Май|Июнь|Июль|Август|Сентябрь|Октябрь|Ноябрь|Декабрь";
$locale['shortmonths'] = "&nbsp;|Янв|Фев|Мар|Апр|Май|Июн|Июл|Авг|Сен|Окт|Ноя|Дек";
$locale['weekdays'] = "Воскресенье|Понедельник|Вторник|Среда|Четверг|Пятница|Суббота";
// Timers
$locale['year'] = "год";
$locale['year_a'] = "года(лет)";
$locale['month'] = "месяц";
$locale['month_a'] = "месяца(-ев)";
$locale['day'] = "день";
$locale['day_a'] = "дня(-ей)";
$locale['hour'] = "час";
$locale['hour_a'] = "часа(-ов)";
$locale['minute'] = "минута";
$locale['minute_a'] = "минут(-ы)";
$locale['second'] = "секунда";
$locale['second_a'] = "секунд(-ы)";
$locale['just_now'] = "только что";
$locale['ago'] = "назад";
// Geo
$locale['street1'] = "Улица, адрес 1";
$locale['street2'] = "Улица, адрес 2";
$locale['city'] = "Город";
$locale['postcode'] = "Почтовый индекс";
$locale['sel_country'] = "Страна";
$locale['sel_state'] = "Регион";
$locale['sel_user'] = "Пожалуйста, укажите имя пользователя";
$locale['add_language'] = "Добавить языковые переводы";
$locale['add_lang'] = "Добавить язык: %s";
// Name
$locale['name'] = "Полное имя";
$locale['username_pretext'] = "Ваше публичное имя пользователя, то же, что указанное в профиле адрес:<div class='alert alert-info m-t-10 p-10'>%s<strong>%s</strong></div>";
$locale['first_name'] = "Имя";
$locale['middle_name'] = "Отчество";
$locale['last_name'] = "Фамилия";
// Documents
$locale['doc_type'] = "Тип документа";
$locale['doc_series'] = "Серия";
$locale['doc_number'] = "Номер";
$locale['doc_authority'] = "Кем выдан";
$locale['doc_date_issue'] = "Дата выдачи";
$locale['doc_date_expire'] = "Срок действия";
// Standard User Levels
$locale['user0'] = "Гость";
$locale['user1'] = "Участник";
$locale['user2'] = "Администратор";
$locale['user3'] = "Супер Администратор";
$locale['user_na'] = "Н/Д";
$locale['user_guest'] = "Гость";
$locale['user_anonymous'] = "Анонимный";
$locale['genitive'] = "%s's %s";
// Standard User Status
$locale['status0'] = "Активный";
$locale['status1'] = "Заблокированный";
$locale['status2'] = "Неактивированный";
$locale['status3'] = "Приостановленный";
$locale['status4'] = "Заблокированный по безопасности";
$locale['status5'] = "Отмененный";
$locale['status6'] = "Анонимный";
$locale['status7'] = "Деактивированный";
$locale['status8'] = "Неактивный";
// Forum Moderator Level(s)
$locale['userf1'] = "Модератор";
// Navigation
$locale['global_001'] = "Навигация";
$locale['global_002'] = "Ссылки не заданы\n";
$locale['global_003'] = "Для просмотра ничего нет";
// Users Online
$locale['global_010'] = "Пользователей на сайте";
$locale['global_011'] = "Гостей на сайте";
$locale['global_012'] = "Участников на сайте";
$locale['global_013'] = "Участников на сайте нет";
$locale['global_014'] = "Всего пользователей";
$locale['global_015'] = "Неактивированные участники";
$locale['global_016'] = "Последний участник";
$locale['global_017'] = "Переключить навигацию";
// Forum Side panel
$locale['global_020'] = "Темы форума";
$locale['global_021'] = "Последние обсуждения";
$locale['global_022'] = "Горячие Темы";
$locale['global_023'] = "Темы не созданы";
$locale['global_024'] = "Обсуждения с моим участием";
$locale['global_027'] = "Темы без ответов";
$locale['global_028'] = "Нерешенные вопросы";
// Comments Side panel
$locale['global_025'] = "Последние комментарии";
$locale['global_026'] = "Нет комментариев";
// Articles Side panel
$locale['global_030'] = "Последние статьи";
$locale['global_031'] = "Нет статьей";
// Downloads Side panel
$locale['global_032'] = "Последние загрузки";
$locale['global_033'] = "Нет загрузок";
// Welcome panel
$locale['global_035'] = "Добро пожаловать";
// Latest Active Forum Threads panel
$locale['global_040'] = "Последние активные темы форума";
$locale['global_041'] = "Мои последние темы";
$locale['global_042'] = "Мои последние сообщения";
$locale['global_043'] = "Новые сообщения";
$locale['global_044'] = "Тема";
$locale['global_045'] = "Просмотров";
$locale['global_046'] = "Ответов";
$locale['global_047'] = "Последнее сообщение";
$locale['global_048'] = "Форум";
$locale['global_049'] = "Опубликовано";
$locale['global_050'] = "Автор";
$locale['global_051'] = "Опрос";
$locale['global_052'] = "Перемещен";
$locale['global_053'] = "У Вас нет начатых тем на форуме.";
$locale['global_054'] = "У Вас нет опубликованных сообщений на форуме.";
$locale['global_055'] = "Со времени последнего посещения вы имеете %u новых сообщений в %u темах.";
$locale['global_056'] = "Отслеживаемые темы";
$locale['global_057'] = "Параметры";
$locale['global_058'] = "Отменить отслеживание";
$locale['global_059'] = "У Вас нет отслеживаемых тем на форуме.";
$locale['global_060'] = "Отменить отслеживание этой темы?";
// Blog, News & Articles
$locale['global_070'] = "Опубликовано ";
$locale['global_070b'] = "Смотреть все сообщения от %s";
$locale['global_071'] = "в ";
$locale['global_071b'] = "Автор";
$locale['global_072'] = "Продолжить чтение";
$locale['global_073'] = " комментариев";
$locale['global_073b'] = " комментарий";
$locale['global_074'] = " прочтений";
$locale['global_074b'] = " прочтение";
$locale['global_075'] = "Печать";
$locale['print'] = "Печать";
$locale['global_076'] = "Редактировать";
$locale['global_077'] = "Новости";
$locale['global_078'] = "Опубликованных новостей нет";
$locale['global_079'] = "В ";
$locale['global_080'] = "Без категории";
$locale['global_081'] = "News Home";
$locale['global_082'] = "Новости";
$locale['global_083'] = "Последнее обновление";
$locale['global_084'] = "Категория новостей";
$locale['global_085'] = "Все другие категории";
$locale['global_086'] = "Самые последние новости";
$locale['global_087'] = "Наиболее комментируемые новости";
$locale['global_088'] = "Новости с наивысшими оценками";
$locale['global_089'] = "Будьте первым, кто прокомментирует %s";
$locale['global_089a'] = "Будьте первым, кто оценит %s";
$locale['global_089b'] = "В виде предпросмотра";
$locale['global_089c'] = "В виде списка";
// Page Navigation
$locale['global_090'] = "Пред";
$locale['global_091'] = "След.";
$locale['global_092'] = "Страница ";
$locale['global_093'] = " из ";
$locale['global_094'] = " выйти из ";
// Guest User Menu
$locale['global_100'] = "Войти на сайт";
$locale['global_101'] = "ID входа";
$locale['global_101a'] = "Указать имя пользователя";
$locale['global_101b'] = "Ввести адрес электронной почты";
$locale['global_101c'] = "Ввести адрес электронной почты или имя пользователя";
$locale['global_102'] = "Пароль";
$locale['global_103'] = "Оставаться на сайте";
$locale['global_104'] = "Войти на сайт";
$locale['global_105'] = "Еще не зарегистрированы? [LINK]Нажмите здесь[/LINK] для регистрации.";
$locale['global_106'] = "[LINK]Забыли пароль?[/LINK]";
$locale['global_107'] = "Регистрация";
$locale['global_108'] = "Напомнить пароль";
// Member User Menu
$locale['global_120'] = "Страница настроек Вашего профиля";
$locale['global_121'] = "Личные сообщения";
$locale['global_122'] = "Список участников";
$locale['global_123'] = "Панель администратора";
$locale['global_124'] = "Выйти";
$locale['global_125'] = "У Вас %u новых ";
$locale['global_126'] = "сообщение";
$locale['global_127'] = "сообщений";
$locale['global_128'] = "присланный материал";
$locale['global_129'] = "присланных материалов";
// User Menu
$locale['UM060'] = "Авторизоваться";
$locale['UM061'] = "Имя пользователя";
$locale['UM061a'] = "Электронная почта";
$locale['UM061b'] = "Имя пользователя или электронная почта";
$locale['UM062'] = "Пароль";
$locale['UM063'] = "Запомнить меня";
$locale['UM064'] = "Авторизоваться";
$locale['UM065'] = "Еще не зарегистрированы? [LINK]Нажмите здесь[/LINK] для регистрации.";
$locale['UM066'] = "Забыли пароль?\n[LINK]Запросите новый[/LINK].";
$locale['UM080'] = "Редактировать профиль";
$locale['UM081'] = "Личные сообщения";
$locale['UM082'] = "Список пользователей";
$locale['UM083'] = "Панель администратора";
$locale['UM084'] = "Выйти";
$locale['UM085'] = "У Вас %u новых ";
$locale['UM086'] = "сообщение";
$locale['UM087'] = "сообщений";
$locale['UM088'] = "Отслеживаемые темы";
// Submit (news, link, article)
$locale['UM089'] = "Отправить...";
$locale['UM090'] = "Отправить новость";
$locale['UM091'] = "Отправить ссылку";
$locale['UM092'] = "Отправить статью";
$locale['UM093'] = "Отправить фото";
$locale['UM094'] = "Отправить загрузку";
$locale['UM095'] = "Отправить блог";
$locale['UM102'] = "Отправить ЧаВО";
// User Panel
$locale['UM096'] = "Добро пожаловать: ";
$locale['UM097'] = "Персональное меню";
$locale['UM101'] = "Переключить язык";
// Gauges
$locale['UM098'] = "Входящие личные сообщения :";
$locale['UM099'] = "Исходящие личные сообщения :";
$locale['UM100'] = "Архив личных сообщений :";
// Keywords and Meta
$locale['tags'] = "Теги";
// Captcha
$locale['global_150'] = "Код проверки:";
$locale['global_151'] = "Ввести код проверки:";
// Footer Counter
$locale['global_170'] = "уникальный посетитель";
$locale['global_171'] = "уникальных посетителей";
$locale['global_172'] = "время загрузки: %s сек.";
$locale['global_173'] = "Запросов";
$locale['global_174'] = "Использовано памяти";
$locale['global_175'] = "В среднем: %s сек.";
$locale['global_176'] = "Политика конфиденциальности";
// Admin Navigation
$locale['global_180'] = "Панель администратора";
$locale['global_181'] = "Вернуться на сайт";
$locale['global_182'] = "<strong>Внимание!</strong> Пароль администратора не введен или введен неправильно.";
// Miscellaneous
$locale['global_190'] = "Активирован режим обслуживания";
$locale['global_191'] = "Ваш IP-адрес в настоящее время находится в черном списке.";
$locale['global_192'] = "Ваша сессия завершена. Пожалуйста, войдите для продолжения.";
$locale['global_193'] = "Невозможно установить cookie. Убедитесь, что cookies разрешены, это нужно для корректного входа.";
$locale['global_194'] = "Эта учетная запись в настоящее время приостановлено.";
$locale['global_195'] = "Эта учетная запись не активирована.";
$locale['global_196'] = "Неверное имя пользователя или пароль.";

$locale['global_197'] = "Подождите, пока мы перенаправим Вас..\n\n[ [LINK]Или нажмите здесь, если не хотите ждать[/LINK] ]";

$locale['global_198'] = "Внимание: обнаружен скрипт установки, пожалуйста, удалите его немедленно.";
$locale['global_199'] = "Внимание: не установлен пароль администратора, нажмите &laquo;[LINK]Изменить профиль[/LINK]&raquo; для установки.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = " - Поиск";
$locale['global_203'] = " - ЧаВО";
$locale['global_204'] = " - Форум";
//Themes
$locale['global_210'] = "Перейти к содержимому";
$locale['global_300'] = "Тема не найдена";
$locale['global_301'] = "К сожалению, эта страница не может быть отображена. По каким-тоо причинам файлы темы оформления не были найдены. Если Вы администратор сайта, то при помощи FTP-клиента загрузите тему оформелния, созданную для <em>PHP-Fusion v9</em>, в папку <em>themes/</em> на сайте. После загрузки проверьте в <em>Основных параметрах</em>, что тема оформления корректно загружена на сайт. Пожалуйста, убедитесь, что папка с темой имеет такое же название (включая регистр символов, что важно на серверах под управлением Unix-систем), как и выбранная в <em>Основных параметрах</em>.<br /><br />Если Вы обычный пользователь на сайте, пожалуйста, свяжитесь с администратором через электронную почту ".hide_email(fusion_get_settings('siteemail'))." и сообщите о случившемся.";
$locale['global_302'] = "Тема, выбранная в настройках, не существует или повреждена!";
// JavaScript Not Enabled
$locale['global_303'] = "О, нет! Где <strong>JavaScript</strong>?<br />Ваш бразуер не поддерживает JavaScript или же JavaScript отключен в настройках. Пожалуйста, <strong>включите JavaScript</strong> в браузере для корректного отображения сайта<br />или <strong>обновите</strong> свой браузер на поддерживающий JavaScript: <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> или же на <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> версии новее, чем 6.";
// User Management
$locale['global_400'] = "приостановлен";
$locale['global_401'] = "заблокирован";
$locale['global_402'] = "деактивирован";
$locale['global_403'] = "действие учётной записи прекращено";
$locale['global_404'] = "учётная запись анонимизирована";
$locale['global_405'] = "анонимный пользователь";
$locale['global_406'] = "Эта учетная запись была заблокирована по следующим причинам:";
$locale['global_407'] = "Эта учетная запись была приостановлена до ";
$locale['global_408'] = " по следующим причинам:";
$locale['global_409'] = "Эта учетная запись была заблокирована по соображениям безопасности.";
$locale['global_410'] = "Причина для этого является: ";
$locale['global_411'] = "Действие учётной записи было отменено.";
$locale['global_412'] = "Эта учетная запись была анонимизирована, вероятно, из-за бездействия.";
// Flood control
$locale['global_440'] = "Автоматическая блокировка антифлудом";
$locale['global_441'] = "Ваша учётная запись на сайте [SITENAME] была заблокирована";
$locale['global_442'] = "Приветствую Вас, [USER_NAME]!\n
Ваша учётная запись на сайте [SITENAME] была замечена в слишком частой публикации записей за короткий отрезок времени с IP-адреса [USER_IP] и по этой причине была заблокирована. Это было сделано для защиты от массового размещения ботами спам-сообщений.\n
Свяжитесь с администратором по 'электронной почте [SITE_EMAIL] для восстановления Вашей учётной записи или для информирования о том, что Вы не размещали сообщений.\n
С уважением, [SITEUSERNAME]";
// Authenticate Class
$locale['global_450'] = "Приостановка автоматичсеки снята системой";
$locale['global_451'] = "Приостановка снята системой на сайте [SITENAME]";
$locale['global_452'] = "Приветствую Вас, USER_NAME!\n
Приостановка действия Вашей учётной записи на сайте [SITEURL] была снята. Информация для входа:\n
Имя пользователя: USER_NAME
Пароль: Скрыт по соображениям безопасности\n
Если Вы забыли свой пароль, его можно восстановить по этой ссылке: LOST_PASSWORD\n\n
С наилучшими пожеланиями,\n
[SITEUSERNAME]";
$locale['global_453'] = "Приветствую Вас, USER_NAME!\n
Приостановка действия вашей учётной записи на сайте [SITEURL] была снята.\n\n
С наилучшими пожеланиями,\n
[SITEUSERNAME]";
$locale['global_454'] = "Учётная запись повторно активирована на сайте [SITENAME]";
$locale['global_455'] = "Приветствую Вас, USER_NAME!\n
При последнем Вашем входе на сайт [SITEURL] Ваша учётная запись была повторно активирована и больше не помечена как неактивная.\n\n
С наилучшими пожеланиями,\n
[SITEUSERNAME]";

$locale['global_456'] = "Уведомление о новом пароле для сайта [SITENAME]";
$locale['global_457'] = "Приветствую Вас, USER_NAME!\n\n
Для Вашей учётной записи на сайте [SITENAME] был созда новый пароль. Пожалуйста, ознакомьтесь с прилагаемыми данными для входа:\n\n
Имя пользователя: USER_NAME\nПароль: [PASSWORD]\n\n
С уважением,\n
[SITEUSERNAME]";
$locale['global_458'] = "Для пользователя USER_NAME был установлен новый пароль";
$locale['global_459'] = "Для пользователя USER_NAME был установлен новый пароль, но уведомление не было отправлено. Пожалуйста, убедитесь, что пользователь проинформаирован о новом пароле.";

// Function parsebytesize()
$locale['global_460'] = "Пусто";
$locale['global_461'] = "Байт";
$locale['global_462'] = "кБ";
$locale['global_463'] = "МБ";
$locale['global_464'] = "ГБ";
$locale['global_465'] = "ТБ";
//Safe Redirect
$locale['global_500'] = "Вы будете перенаправленны на %s, пожалуйста, подождите. Если Вас не перенаправило, нажмите здесь.";
// Captcha Locales
$locale['global_600'] = "Код проверки";
$locale['global_601'] = "Вы должны ввести правильный код проверки";

$locale['recaptcha'] = "ru";
// Site links
$locale['global_700'] = "Показать больше";
//Miscellaneous
$locale['global_900'] = "Невозможно преобразовать HEX в DEC";
$locale['global_901'] = "Вставить медиа";
//Language Selection
$locale['global_ML100'] = "Язык:";
$locale['global_ML101'] = "- Выберите язык -";
$locale['global_ML102'] = "Язык сайта";
// Flood Control
$locale['flood'] = "Вам запрещено размещать сообщения до окончания времени действия антифлуда. Пожалуйста, подожите до %s.";
$locale['no_image'] = "Нет изображения";
$locale['send_message'] = "Отправить сообщение";
$locale['go_profile'] = "Перейти на страницу профиля %s";
// Global one word locales
$locale['hello'] = "Здравствуйте!";
$locale['goodbye'] = "До свидания!";
$locale['welcome'] = "Добро пожаловать обратно";
$locale['home'] = "Главная";
// Status
$locale['error'] = "Ошибка!";
$locale['success'] = "Успешно!";
$locale['enable'] = "Разрешить";
$locale['disable'] = "Запретить";
$locale['can'] = "возможно";
$locale['cannot'] = "невозможно";
$locale['no'] = "Нет";
$locale['yes'] = "Да";
$locale['off'] = "Откл.";
$locale['on'] = "Вкл.";
$locale['or'] = "или";
$locale['by'] = "на";
$locale['in'] = "в";
$locale['of'] = "из";
$locale['and'] = "и";
$locale['na'] = "Информация недоступна";
$locale['joined'] = "Зарегистрирован с: ";
// Navigation
$locale['next'] = "След.";
$locale['previous'] = "Пред.";
$locale['back'] = "Назад";
$locale['forward'] = "Вперед";
$locale['go'] = "Перейти";
$locale['cancel'] = "Отмена";
$locale['clear'] = "Очистить";
$locale['move'] = "Переместить";
$locale['move_up'] = "Переместить вверх";
$locale['move_down'] = "Переместить вниз";
$locale['load_more'] = "Загрузить больше элементов";
$locale['load_end'] = "Загрузить с начала";
// Actions
$locale['add'] = "Добавить";
$locale['save'] = "Сохранить";
$locale['save_changes'] = "Сохранить изменения";
$locale['save_and_close'] = "Сохранить и закрыть";
$locale['confirm'] = "Подтвердить";
$locale['update'] = "Обновить";
$locale['updated'] = "Обновлено";
$locale['remove'] = "Убрать";
$locale['delete'] = "Удалить";
$locale['search'] = "Поиск";
$locale['help'] = "Справка";
$locale['register'] = "Регистрация";
$locale['ban'] = "Бан";
$locale['reactivate'] = "Активировать повторно";
$locale['user'] = "Пользователь";
$locale['promote'] = "Повысить";
$locale['show'] = "Показать";
$locale['actions'] = "Действия";
$locale['language'] = "Язык";

// Persons & Identifiers
$locale['you'] = "Вы";
$locale['me'] = "Я";
$locale['they'] = "Они";
$locale['we'] = "Мы";
$locale['us'] = "Нам";
$locale['he'] = "Он";
$locale['she'] = "Она";
$locale['it'] = "Оно";

//Tables
$locale['status'] = "Статус";
$locale['order'] = "Порядок";
$locale['sort'] = "Сортировка";
$locale['id'] = "ID";
$locale['title'] = "Заголовок";
$locale['rights'] = "Права";
$locale['info'] = "Информация";
$locale['image'] = "Изображение";
// Forms
$locale['choose'] = "Пожалуйста, выберите вариант...";
$locale['no_opts'] = "Не выбрано";
$locale['root'] = "Главный уровень";
$locale['choose-user'] = "Пожалуйста, выберите пользователя...";
$locale['choose-location'] = "Пожалуйста, выберите место расположения";
$locale['parent'] = "Создать как нового предка..";
$locale['order'] = "Порядок элементов";
$locale['status'] = "Статус";
$locale['note'] = "Отметить этот элемент";
$locale['publish'] = "Опубликовано";
$locale['unpublish'] = "Не опубликовано";
$locale['sticky'] = "Прикреплено";
$locale['unsticky'] = "Откреплено";
$locale['draft'] = "Черновик";
$locale['settings'] = "Параметры";
$locale['posted'] = "размещено";
$locale['profile'] = "Профиль";
$locale['edit'] = "Редактировать";
$locale['qedit'] = "Быстрое редактирование";
$locale['view'] = "Смотреть";
$locale['login'] = "Авторизоваться";
$locale['logout'] = "Выход";
$locale['admin-logout'] = "Выход из админпанели";
$locale['message'] = "Личные сообщения";
$locale['logged'] = "Вошли как ";
$locale['version'] = "Версия ";
$locale['browse'] = "Обзор ...";
$locale['close'] = "Закрыть";
$locale['nopreview'] = "Нет данных для предпросмотра";
$locale['mark_as'] = "Отметить как";
$locale['preview'] = "Предпросмотр";
$locale['custom'] = "Произвольно";
// Alignment
$locale['left'] = "Влево";
$locale['center'] = "По центроу";
$locale['right'] = "Вправо";
// Comments and ratings
$locale['comments'] = "Комментарии";
$locale['ratings'] = "Рейтинги";
$locale['comments_ratings'] = "Комментарии и рейтинги";
$locale['user_account'] = "Учетная запись пользователя";
$locale['about'] = "О";
// User status
$locale['online'] = "В сети";
$locale['offline'] = "Не в сети";
// Words for formatting to single and plural forms. Count of forms is language-dependent
$locale['fmt_submission'] = "присланный материал|присланных материала|присланных материалов";
$locale['fmt_article'] = "статья|статьи|статей";
$locale['fmt_blog'] = "блог|блога|блогов";
$locale['fmt_comment'] = "комментарий|комментария|комментариев";
$locale['fmt_vote'] = "голос|голоса|голосов";
$locale['fmt_rating'] = "оценка|оценки|оценок";
$locale['fmt_day'] = "день|дня|дней";
$locale['fmt_download'] = "загрузка|загрузки|загрузок";
$locale['fmt_follower'] = "подписчик|подписчика|подписчиков";
$locale['fmt_forum'] = "форум|форума|форумов";
$locale['fmt_guest'] = "гость|гостя|гостей";
$locale['fmt_hour'] = "час|часа|часов";
$locale['fmt_item'] = "элемент|элемента|элементов";
$locale['fmt_member'] = "участник|участника|участников";
$locale['fmt_message'] = "сообщение|сообщения|сообщений";
$locale['fmt_minute'] = "минута|минуты|минут";
$locale['fmt_month'] = "месяц|месяца|месяцев";
$locale['fmt_news'] = "новость|новости|новостей";
$locale['fmt_photo'] = "фотография|фотографии|фотографий";
$locale['fmt_post'] = "сообщение|сообщения|сообщений";
$locale['fmt_question'] = "вопрос|вопроса|вопросов";
$locale['fmt_read'] = "прочтение|прочтения|прочтений";
$locale['fmt_second'] = "секунда|секунды|секунд";
$locale['fmt_shouts'] = "сообщение чата|сообщения чата|сообщений чата";
$locale['fmt_thread'] = "тема|темы|тем";
$locale['fmt_user'] = "пользователь|пользователя|пользователей";
$locale['fmt_views'] = "просмотр|просмотра|просмотров";
$locale['fmt_weblink'] = "веб-ссылка|веб-ссылки|веб-ссылок";
$locale['fmt_week'] = "неделя|недели|недель";
$locale['fmt_year'] = "год|года|лет";
$locale['fmt_points'] = "точка|точки|точек";
// include Defender locales
include __DIR__."/defender.php";
