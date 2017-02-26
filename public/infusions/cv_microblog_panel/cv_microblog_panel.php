<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: new_infusion.php
| Author: Chubatyj Vitalij (Frankenstein)
| Web: http://chubatyj.ru/
| E-mail: vitalij@chubatyj.ru
| ICQ: 217643068
| XMPP: chubatyj@jabber.ru
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

include INFUSIONS."cv_microblog_panel/infusion_db.php";

/*if (file_exists(INFUSIONS."infusion_folder/locale/".$settings['locale'].".php")) {
	include INFUSIONS."infusion_folder/locale/".$settings['locale'].".php";
} else {
	include INFUSIONS."infusion_folder/locale/English.php";
}*/

openside("Микроблоги");

echo "<div class='side-label'><strong>Записи</strong></div>";

$result = dbquery("select user_id, user_name, mblog_id, mblog_title from ".DB_USERS." as tblu join ".DB_CV_MICROBLOG." as tblmb on (tblmb.mblog_author = tblu.user_id) order by mblog_datestamp desc limit 5");
if (dbrows($result)) {
	while ($data = dbarray($result)) {
		echo THEME_BULLET." <a href='".INFUSIONS."cv_microblog_panel/microblog.php?blog_user=".$data['user_id']."'>".$data['user_name']."</a>: <a href='".INFUSIONS."cv_microblog_panel/microblog.php?blog_post=".$data['mblog_id']."'>".$data['mblog_title']."</a><br />\n";
	};

	$result_c = dbquery("select comment_id, mblog_id, mblog_title, user_id, user_name from ".DB_USERS." as tblu join ". DB_COMMENTS." as tblc on (tblc.comment_name = tblu.user_id) join ".DB_CV_MICROBLOG." as tblmb on (tblc.comment_item_id = tblmb.mblog_id) where comment_type='MB' order by comment_datestamp desc limit 5");
	if (dbrows($result_c)) {
		echo "<div class='side-label'><strong>Комментарии</strong></div>";
		while ($data_c = dbarray($result_c)) {
			echo THEME_BULLET." <a href='".INFUSIONS."cv_microblog_panel/microblog.php?blog_user=".$data_c['user_id']."'>".$data_c['user_name']."</a>: <a href='".INFUSIONS."cv_microblog_panel/microblog.php?blog_post=".$data_c['mblog_id']."#c".$data_c['comment_id']."'>".$data_c['mblog_title']."</a><br />\n";
		};
	}
} else {
	echo "<p align='center'>Пользователи пока что не сделали ни одной записи...</p>\n";
};

closeside();
?>