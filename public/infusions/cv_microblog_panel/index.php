<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: index.php
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

if (iMEMBER) {
	if (isset($_POST['post_mblog'])){
		$mblog_title = trim(stripinput($_POST['mblog_title']));
		$mblog_text = trim(addslash($_POST['mblog_text']));
		if ($mblog_title != "" && $mblog_text != "") {
			$result = dbquery("insert into ".DB_CV_MICROBLOG." (mblog_title, mblog_text, mblog_author, mblog_datestamp) values ('$mblog_title', '$mblog_text', '".$userdata['user_id']."', '".time()."')");
		};

		redirect(FUSION_SELF);
	};

	include_once INCLUDES."bbcode_include.php";

	opentable($locale['mbl_001']);

	echo "<form name='fm_microblog' method='post' action=''>\n";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>\n<tr>\n";
	echo "<td width='1%' class='tbl' style='white-space:nowrap'>".$locale['mbl_006']."</td>\n";
	echo "<td class='tbl'><input type='text' name='mblog_title' class='textbox' style='width: 250px;' /></td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td width='1%' class='tbl' style='white-space:nowrap'>".$locale['mbl_007']."</td>\n";
	echo "<td class='tbl'><textarea name='mblog_text' cols='50' rows='5' class='textbox'></textarea></td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td class='tbl'></td>\n";
	echo "<td class='tbl'>".display_bbcodes("99%", "mblog_text", "fm_microblog")."</td>\n";
	echo "</tr>\n<tr>\n";
	echo "<td colspan='2' class='tbl' align='center'><input type='submit' name='post_mblog' value='".$locale['mbl_051']."' class='button' /></td>\n";
	echo "</tr></table>\n";
	echo "</form>\n";

	closetable();

	opentable($locale['mbl_002']);

	$result = dbquery("select mblog_id, mblog_title, mblog_datestamp from ". DB_CV_MICROBLOG." where mblog_author=".$userdata['user_id']." order by mblog_datestamp desc limit 10");
	if (dbrows($result)) {
		echo "<ul>\n";
		while ($data = dbarray($result)) {
			echo "<li>".showdate("longdate", $data['mblog_datestamp']).": <a href='".INFUSIONS."cv_microblog_panel/microblog.php?blog_post=".$data['mblog_id']."'>".$data['mblog_title']."</a></li>";
		};
		echo "</ul>\n";
	} else {
		echo "<p align='center'>".$locale['mbl_003']."</p>\n";
	};

	closetable();
};

opentable($locale['mbl_004']);

	$result = dbquery("select mblog_id, mblog_title, mblog_datestamp, user_id, user_name from ". DB_CV_MICROBLOG." as tmb join ".DB_USERS." as tu on (tmb.mblog_author = tu.user_id) order by mblog_datestamp desc limit 10");
	if (dbrows($result)) {
		echo "<ul>\n";
		while ($data = dbarray($result)) {
			echo "<li>".showdate("longdate", $data['mblog_datestamp']).", <a href='".INFUSIONS."cv_microblog_panel/microblog.php?blog_user=".$data['user_id']."'>".$data['user_name']."</a>: <a href='".INFUSIONS."cv_microblog_panel/microblog.php?blog_post=".$data['mblog_id']."'>".$data['mblog_title']."</a></li>";
		};
		echo "</ul>\n";
	} else {
		echo "<p align='center'>".$locale['mbl_005']."</p>\n";
	};

closetable();

require_once THEMES."templates/footer.php";
?>