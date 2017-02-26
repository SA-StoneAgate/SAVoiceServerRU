<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: microblog.php
| Version: 1.00
| Author: Chubatyj Vitalij (Rizado)
| http://chubatyj.ru/
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
require_once "../../maincore.php";
require_once THEMES."templates/header.php";

include INFUSIONS."cv_microblog_panel/infusion_db.php";

if (file_exists(INFUSIONS."cv_microblog_panel/locale/".$settings['locale'].".php")) {
	include INFUSIONS."cv_microblog_panel/locale/".$settings['locale'].".php";
} else {
	include INFUSIONS."cv_microblog_panel/locale/English.php";
}

if (isset($_GET['blog_post']) && isnum($_GET['blog_post'])) {
	$result = dbquery("select mblog_id, mblog_title, mblog_text, mblog_datestamp, user_id, user_name, user_status from ". DB_CV_MICROBLOG." as tmb join ".DB_USERS." as tu on (tmb.mblog_author = tu.user_id) where mblog_id=".$_GET['blog_post']." limit 1");
	if (dbrows($result)) {
		$data = dbarray($result);

		require_once INCLUDES."comments_include.php";

		opentable($data['mblog_title']);

		echo parseubb(parsesmileys(nl2br(stripslash($data['mblog_text']))));
		echo "<div class='news-footer'>".profile_link($data['user_id'], $data['user_name'], $data['user_status']).", ".showdate("shortdate", $data['mblog_datestamp'])."</div>";

		closetable();

		showcomments("MB", DB_CV_MICROBLOG, "mblog_id", $_GET['blog_post'], INFUSIONS."cv_microblog_panel/microblog.php?blog_post=".$_GET['blog_post']);
	} else {
		redirect("index.php");
	}

} elseif (isset($_GET['blog_user']) && isnum($_GET['blog_user'])) {
	if (dbcount("(*)", DB_USERS, "user_id=".$_GET['blog_user']) == 0) {
		redirect("index.php");
	};

	if (isset($_GET['rowstart']) && isnum($_GET['rowstart'])) {
		$rowstart = $_GET['rowstart'];
	} else {
		$rowstart = 0;
	};

	$user_posts = dbcount("(*)", DB_CV_MICROBLOG, "mblog_author=".$_GET['blog_user']);

	$result = dbquery("select mblog_id, mblog_title, mblog_text, mblog_datestamp from ". DB_CV_MICROBLOG." where mblog_author=".$_GET['blog_user']." order by mblog_datestamp desc limit 10");

	if (dbrows($result)) {
		while ($data = dbarray($result)) {
			opentable($data['mblog_title']);
			echo parseubb(parsesmileys(nl2br(stripslash($data['mblog_text']))));
			closetable();
		};
	} else {
		echo "<p align='center'>".$locale['mbl_021']."</p>\n";
	};
} elseif (iMEMBER) {
	$result = dbquery("select mblog_id, mblog_title, mblog_text, mblog_datestamp from ". DB_CV_MICROBLOG." where mblog_author=".$userdata['user_id']." order by mblog_datestamp desc limit 10");
	if (dbrows($result)) {
		while ($data = dbarray($result)) {
			opentable($data['mblog_title']);
			echo parseubb(parsesmileys(nl2br(stripslash($data['mblog_text']))));
			closetable();
		};
	} else {
		echo "<p align='center'>".$locale['mbl_022']."</p>\n";
	};
} else {
	redirect("index.php");
}

require_once THEMES."templates/footer.php";
?>