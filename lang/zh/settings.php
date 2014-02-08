<?php

/**
 * Chinese (Simplified) language for the Config Manager
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
 * @author Rubyy
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["monobook_userpage"]    = "开启用户页么？";
$lang["monobook_userpage_ns"] = "如果开启，使用 ':namespace' 作为用户页的根页面";

//discussion pages
$lang["monobook_discuss"]    = "开启讨论页么？";
$lang["monobook_discuss_ns"] = "如果开启，使用 ':namespace' 作为讨论页的根页面";

//site notice
$lang["monobook_sitenotice"]           = "显示'站点公告'么?";
$lang["monobook_sitenotice_location"]  = "如果显示，使用 ':namespace' 作为站点公告页面";
$lang["monobook_sitenotice_translate"] = "如果开启了翻译插件,站点公告的不同语言翻译在:(例如':wiki:site_notice_en').";

//navigation
$lang["monobook_navigation"]           = "显示'导航栏'么?";
$lang["monobook_navigation_location"]  = "如果显示，使用 ':namespace' 作为导航栏页面";
$lang["monobook_navigation_translate"] = "如果开启了翻译插件,导航栏的不同语言翻译在:(例如':wiki:site_navigation_en').";

//custom copyright notice
$lang["monobook_copyright"]           = "显示版权声明么?";
$lang["monobook_copyright_default"]   = "如果显示，使用 ':namespace' 作为版权声明页面";
$lang["monobook_copyright_location"]  = "如果不使用预设值, 使用以下页面作为版权声明页面";
$lang["monobook_copyright_translate"] = "如果开启了翻译插件,版权声明的的不同语言翻译在:(例如':wiki:site_copyright_en').";

//search form
$lang["monobook_search"] = "显示查找栏么?";

//toolbox
$lang["monobook_toolbox"]               = "显示'工具箱'么?";
$lang["monobook_toolbox_default"]       = "如果显示,使用预设工具箱页面么?";
$lang["monobook_toolbox_default_print"] = "如果使用预设工具箱页面,要显示'可打印版本'的链接么?";
$lang["monobook_toolbox_location"]      = "如果不适用预设, 使用以下页面作为工具箱页面:";

//qr code box
$lang["monobook_qrcodebox"] = "显示当前页面URL生成的二维码么(对于手机浏览更方便)?";

//donation link/button
$lang["monobook_donate"]          = "显示捐助按钮么?";
$lang["monobook_donate_url"]      = "使用以下捐助URL:";

//TOC
$lang["monobook_toc_position"] = "内容表(TOC)的位置";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "'我的足迹'导航的位置:";
$lang["monobook_youarehere_position"]   = "'当前位置'导航的位置:";
$lang["monobook_cite_author"]           = "在引用文章中显示作者姓名:";
$lang["monobook_loaduserjs"]            = "是否载入'monobook/user/user.js'?";
$lang["monobook_closedwiki"]            = "是否为封闭Wiki(大多数页面对于未登录的游客不可显示)?";

