<?php

/**
 * Default options for the "monobook" DokuWiki template
 *
 * Notes:
 * - In general, use the admin webinterface of DokuWiki to change the config.
 * - To change the type of a config value, have a look at "metadata.php" in
 *   the same directory as this file.
 * - To change/translate the descriptions showed in the admin/configuration
 *   menu of DokuWiki, have a look at the file
 *   /lib/tpl/monobook/lang/<your lang>/settings.php. If it does not exists,
 *   copy and translate the English one. Don't forget to mail your translation
 *   to ARSAVA <dokuwiki@dev.arsava.com>. Thanks! :-D
 * - To change the [tabs|boxes|buttons] configuration, have a look at
 *   "/user/[tabs|boxes|buttons].php".
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$conf["monobook_userpage"]    = 1; //1: use/show user pages
$conf["monobook_userpage_ns"] = ":wiki:user:"; //namespace to use for user page storage

//discussion pages
$conf["monobook_discuss"]    = 1; //1: use/show discussion pages
$conf["monobook_discuss_ns"] = ":talk:"; //namespace to use for discussion page storage

//site notice
$conf["monobook_sitenotice"]           = 1; //1: use/show sitenotice
$conf["monobook_sitenotice_location"]  = ":wiki:site_notice"; //page/article used to store the sitenotice
$conf["monobook_sitenotice_translate"] = 1; //1: load translated sitenotice if translation plugin is available (see <https://www.dokuwiki.org/plugin:translation>)

//navigation
$conf["monobook_navigation"]           = 1; //1: use/show navigation
$conf["monobook_navigation_location"]  = ":wiki:navigation"; //page/article used to store the navigation
$conf["monobook_navigation_translate"] = 1; //1: load translated navigation if translation plugin is available (see <https://www.dokuwiki.org/plugin:translation>)

//custom copyright notice
$conf["monobook_copyright"]           = 1; //1: use/show copyright notice
$conf["monobook_copyright_default"]   = 1; //1: use default copyright notice (if copyright notice is enabled at all)
$conf["monobook_copyright_location"]  = ":wiki:copyright"; //page/article used to store a custom copyright notice
$conf["monobook_copyright_translate"] = 1; //1: load translated copyright notice if translation plugin is available (see <https://www.dokuwiki.org/plugin:translation>)

//search form
$conf["monobook_search"] = 1; //1: use/show search form

//toolbox
$conf["monobook_toolbox"]               = 1; //1: use/show toolbox
$conf["monobook_toolbox_default"]       = 1; //1: use default toolbox (if toolbox is enabled at all)
$conf["monobook_toolbox_default_print"] = 1; //1: if default toolbox is used, show printable version link?
$conf["monobook_toolbox_location"]      = ":wiki:toolbox"; //page/article used to store a custom toolbox

//qr code box
$conf["monobook_qrcodebox"] = 1; //1: use/show box with QR Code of current page's URL

//donation link/button
$conf["monobook_donate"]     = 0; //1: use/show donation link/button
$conf["monobook_donate_url"] = "https://donate.arsava.com/dokuwiki-template-monobook/"; //custom donation URL

//TOC
$conf["monobook_toc_position"] = "article"; //article: show TOC embedded within the article; "sidebar": show TOC near the navigation, left column

//other stuff
$conf["monobook_breadcrumbs_position"]  = "bottom"; //position of breadcrumbs navigation ("top" or "bottom")
$conf["monobook_youarehere_position"]   = "top"; //position of "you are here" navigation ("top" or "bottom")
$conf["monobook_cite_author"]           = "Anonymous Contributors"; //name to use for the author on the citation page
$conf["monobook_loaduserjs"]            = 0; //1: monobook/user/user.js will be loaded
$conf["monobook_closedwiki"]            = 0; //1: hides most tabs/functions until user is logged in

