<?php

/**
 * Chinese (as used in Taiwan) language for the Config Manager
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - /lib/tpl/monobook/lang/<your lang>/lang.php
 * - /lib/tpl/monobook/lang/<your lang>/settings.php
 * If they are not existing, copy and translate the English ones.
 *
 * Don't forget to mail your translation to ARSAVA <dokuwiki@dev.arsava.com>.
 * Thanks! :-D
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author 呂理群
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["monobook_userpage"]    = "使用「使用者頁面」嗎?";
$lang["monobook_userpage_ns"] = "如果要, 使用 ':namespace:' 為使用者頁面的 root:";

//discussion pages
$lang["monobook_discuss"]    = "使用「討論的標籤/網站」嗎?";
$lang["monobook_discuss_ns"] = "如果要, 使用 ':namespace:' 為討論頁面的 root:";

//site notice
$lang["monobook_sitenotice"]           = "顯示「行條式的網站注意事項」嗎?";
$lang["monobook_sitenotice_location"]  = "如果要, 使用以下頁面當成行條式網站注意事項:";
$lang["monobook_sitenotice_translate"] = "If yes and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific site wide notice?<br />The wiki page of the translated site notice(s) is [value of 'monobook_sitenotice_location']_[iso lang code] (e.g. ':wiki:site_notice_de').";

//navigation
$lang["monobook_navigation"]           = "顯示「導覽」嗎?";
$lang["monobook_navigation_location"]  = "如果要, 使用以下頁面當成導覽頁面:";
$lang["monobook_navigation_translate"] = "If yes and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific navigation?<br />The wiki page of the translated navigation(s) is [value of 'monobook_navigation_location']_[iso lang code] (e.g. ':wiki:navigation_de').";

//custom copyright notice
$lang["monobook_copyright"]           = "顯示「版權注意事項」嗎?";
$lang["monobook_copyright_default"]   = "如果要, 使用預設的「版權注意事項」嗎?";
$lang["monobook_copyright_location"]  = "如果不使用預設值, 使用以下頁面當成「版權注意事項」:";
$lang["monobook_copyright_translate"] = "If not default and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific copyright notice?<br />The wiki page of the translated copyright notice(s) is [value of 'monobook_copyright_location']_[iso lang code] (e.g. ':wiki:copyright_de').";

//search form
$lang["monobook_search"] = "顯示從哪搜尋嗎?";

//toolbox
$lang["monobook_toolbox"]               = "顯示「工具箱」嗎?";
$lang["monobook_toolbox_default"]       = "如果要, 使用「預設工具箱」?";
$lang["monobook_toolbox_default_print"] = "如果「預設工具箱」已使用中, 則顯示「可列印版本的連結」?";
$lang["monobook_toolbox_location"]      = "如果不是預設值, 使用以下頁面當成「工具箱位置」:";

//qr code box
$lang["monobook_qrcodebox"] = "Show box with QR Code of current wiki page URL (for easy URL transfer to mobile browser)?";

//donation link/button
$lang["monobook_donate"]          = "顯示捐助連接/按紐?";
$lang["monobook_donate_url"]      = "使用以下捐助的 URL:";

//TOC
$lang["monobook_toc_position"] = "Table of contents (TOC) position";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "Position of breadcrumb navigation (if enabled):";
$lang["monobook_youarehere_position"]   = "Position of 'You are here' navigation (if enabled):";
$lang["monobook_cite_author"]           = "在引用文章中顯示作者姓名:";
$lang["monobook_loaduserjs"]            = "載入 'monobook/user/user.js'?";
$lang["monobook_closedwiki"]            = "已關閉頁面 (most links/tabs/boxes are hidden until user is logged in)?";

