<?
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2014 Nick Jones
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Name: Simple Theme
| Filename: theme.php
| Version: 1.00
| Author: Chubatyj Vitalij aka Rizado
| Site: http://chubatyj.ru
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
require_once INCLUDES."theme_functions_include.php";

define("THEME_BULLET", "&middot;");

function render_page($license = FALSE) {
	global $settings;

	echo "<div class='container'>\n";

	echo "<div class='container'>\n";
	echo $settings['sitename'];
	echo "</div>\n";

	echo "<div class='container'>\n";
	echo showsublinks();
	echo "</div>\n";

	if (defined('AU_CENTER') && AU_CENTER) {
		echo "<div class='row'>\n<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>".AU_CENTER."</div>\n</div>\n";
	}

	echo "<div class='row'>\n";

	if (defined('LEFT') && LEFT) {
		echo "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>\n".LEFT."</div>\n";
		$tmpwidth = 9;
	} else {
		$tmpwidth = 12;
	}
	if (defined('RIGHT') && RIGHT) {
		$tmpwidth = $tmpwidth - 3;
	}
	echo "<div class='col-xs-".$tmpwidth." col-sm-".$tmpwidth." col-md-".$tmpwidth." col-lg-".$tmpwidth."'>\n".U_CENTER.CONTENT.L_CENTER."</div>\n";
	if (defined('RIGHT') && RIGHT) {
		echo "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>\n".RIGHT."</div>\n";
	}

	echo "</div>\n";

	if (defined('AU_CENTER') && BL_CENTER) {
		echo "<div class='row'>\n<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>".BL_CENTER."</div>\n</div>\n";
	}

	echo "<div class='row'>\n<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>\n";
	echo "<span>".stripslashes(strip_tags($settings['footer']))."</span><br/>\n";
	echo "<span>".showcopyright()."</span><br/>\n";
	echo "</div>\n</div>\n";


	echo "</div>\n";
}

function openside($title) {
	echo "<h4>$title</h4>\n";
	echo "<div class='list-group-item'>\n";
}

function closeside() {
	echo "</div>\n";
}

function opentable($title) {
	echo "<h3>$title</h3>\n";
}

function closetable() {

}
?>