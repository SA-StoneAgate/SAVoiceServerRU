<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: infusion.php
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
if (!defined("IN_FUSION")) { die("Access Denied"); }

include INFUSIONS."cv_microblog_panel/infusion_db.php";

if (file_exists(INFUSIONS."cv_microblog_panel/locale/".$settings['locale'].".php")) {
	include INFUSIONS."cv_microblog_panel/locale/".$settings['locale'].".php";
} else {
	include INFUSIONS."cv_microblog_panel/locale/English.php";
}

// Infusion general information
$inf_title = $locale['mbl_title'];
$inf_description = $locale['mbl_desc'];
$inf_version = "1.0";
$inf_developer = "Chubatyj Vitalij (Rizado)";
$inf_email = "v.chubatyj@yandex.ru";
$inf_weburl = "http://chubatyj.ru/";

$inf_folder = "cv_microblog_panel"; // The folder in which the infusion resides.

// Delete any items not required below.
$inf_newtable[1] = DB_CV_MICROBLOG." (
  `mblog_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mblog_title` varchar(250) NOT NULL DEFAULT '',
  `mblog_text` varchar(2000) NOT NULL DEFAULT '',
  `mblog_author` int(11) unsigned NOT NULL DEFAULT '0',
  `mblog_datestamp` int(11) unsigned NOT NULL DEFAULT '0',
  `mblog_access` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`mblog_id`)
) ENGINE=MyISAM;";


$inf_droptable[1] = DB_CV_MICROBLOG;


$inf_sitelink[1] = array(
	"title" => $locale['mbl_link'],
	"url" => "index.php",
	"visibility" => "0"
);
?>