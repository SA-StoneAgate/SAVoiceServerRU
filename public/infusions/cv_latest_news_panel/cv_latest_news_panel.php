<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: latest_news_panel.php
| Author: Chubatyj Vitalij (Rizado)
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

if (file_exists(INFUSIONS."cv_latest_news_panel/locale/".$settings['locale'].".php")) {
	include INFUSIONS."cv_latest_news_panel/locale/".$settings['locale'].".php";
} else {
	include INFUSIONS."cv_latest_news_panel/locale/English.php";
}

openside($locale['lnp_001']);
echo "<div role='tabpanel'>
	<ul class='nav nav-tabs' role='tablist' id='newsTabs'>
	<li role='presentation' class='active'><a href='#latest' aria-controls='home' role='tab' data-toggle='tab'>".$locale['lnp_002']."</a></li>
	<li role='presentation'><a href='#mostread' aria-controls='profile' role='tab' data-toggle='tab'>".$locale['lnp_003']."</a></li>
	</ul>\n";

echo "<div class='tab-content'>\n";

echo "<div role='tabpanel' class='tab-pane active' id='latest'>\n";

$result = dbquery("SELECT news_id, news_subject FROM ".DB_NEWS." WHERE (".time()." > news_start OR news_start = 0) AND (".time()." < news_end OR news_end = 0) AND ".groupaccess('news_visibility')." ORDER BY news_datestamp DESC LIMIT 5");

if (dbrows($result)) {
	echo "<ul>\n";
	while ($data = dbarray($result)) {
		echo "<li>".THEME_BULLET." <a href='".BASEDIR."news.php?readmore=".$data['news_id']."'>".$data['news_subject']."</a></li>\n";
	};
	echo "</ul>\n";
} else {
	echo $locale['lnp_011'];
}

echo "</div>\n";

echo "<div role='tabpanel' class='tab-pane' id='mostread'>\n";

echo "<h5><strong>".$locale['lnp_016']."</strong></h5>\n";

$result = dbquery("SELECT news_id, news_subject, news_reads FROM ".DB_NEWS." WHERE (".time()." > news_start OR news_start = 0) AND (".time()." < news_end OR news_end = 0) AND (news_datestamp > ".(time() - 86400).") AND ".groupaccess('news_visibility')." ORDER BY news_reads DESC LIMIT 5");

if (dbrows($result)) {
	echo "<ul>\n";
	while ($data = dbarray($result)) {
		echo "<li>".THEME_BULLET." <a href='".BASEDIR."news.php?readmore=".$data['news_id']."'>".$data['news_subject']." (".$data['news_reads'].")</a></li>\n";
	};
	echo "</ul>\n";
} else {
	echo $locale['lnp_017'];
}

echo "<h5><strong>".$locale['lnp_018']."</strong></h5>\n";

$result = dbquery("SELECT news_id, news_subject, news_reads FROM ".DB_NEWS." WHERE (".time()." > news_start OR news_start = 0) AND (".time()." < news_end OR news_end = 0) AND (news_datestamp > ".(time() - 604800).") AND ".groupaccess('news_visibility')." ORDER BY news_reads DESC LIMIT 5");

if (dbrows($result)) {
	echo "<ul>\n";
	while ($data = dbarray($result)) {
		echo "<li>".THEME_BULLET." <a href='".BASEDIR."news.php?readmore=".$data['news_id']."'>".$data['news_subject']." (".$data['news_reads'].")</a></li>\n";
	};
	echo "</ul>\n";
} else {
	echo $locale['lnp_019'];
}

echo "<h5><strong>".$locale['lnp_020']."</strong></h5>\n";

$result = dbquery("SELECT news_id, news_subject, news_reads FROM ".DB_NEWS." WHERE (".time()." > news_start OR news_start = 0) AND (".time()." < news_end OR news_end = 0) AND (news_datestamp > ".(time() - 2592000).") AND ".groupaccess('news_visibility')." ORDER BY news_reads DESC LIMIT 5");

if (dbrows($result)) {
	echo "<ul>\n";
	while ($data = dbarray($result)) {
		echo "<li>".THEME_BULLET." <a href='".BASEDIR."news.php?readmore=".$data['news_id']."'>".$data['news_subject']." (".$data['news_reads'].")</a></li>\n";
	};
	echo "</ul>\n";
} else {
	echo $locale['lnp_021'];
}

echo "</div>\n";

echo "</div>\n</div>\n";

echo "<script type='text/javascript'>
	$('#myTab a').click(function(e) {
		e.preventDefault()
		 $(this).tab('show')
	})
	</script>\n";

closeside();
?>