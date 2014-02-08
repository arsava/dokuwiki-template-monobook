<?php

/**
 * English language for the Config Manager
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
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["monobook_userpage"]    = "Use User pages?";
$lang["monobook_userpage_ns"] = "If yes, use following ':namespace:' as root for user pages:";

//discussion pages
$lang["monobook_discuss"]    = "Use discussion tabs/sites?";
$lang["monobook_discuss_ns"] = "If yes, use following ':namespace:' as root for discussions:";

//site notice
$lang["monobook_sitenotice"]           = "Show site wide notice?";
$lang["monobook_sitenotice_location"]  = "If yes, use following wiki page for the site wide notice:";
$lang["monobook_sitenotice_translate"] = "If yes and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific site wide notice?<br />The wiki page of the translated site notice(s) is [value of 'monobook_sitenotice_location']_[iso lang code] (e.g. ':wiki:site_notice_de').";

//navigation
$lang["monobook_navigation"]           = "Show navigation?";
$lang["monobook_navigation_location"]  = "If yes, use following wiki page as navigation:";
$lang["monobook_navigation_translate"] = "If yes and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific navigation?<br />The wiki page of the translated navigation(s) is [value of 'monobook_navigation_location']_[iso lang code] (e.g. ':wiki:navigation_de').";

//custom copyright notice
$lang["monobook_copyright"]           = "Show copyright notice?";
$lang["monobook_copyright_default"]   = "If yes, use default copyright notice?";
$lang["monobook_copyright_location"]  = "If not default, use following wiki page as copyright notice:";
$lang["monobook_copyright_translate"] = "If not default and <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation plugin</a> available: load language specific copyright notice?<br />The wiki page of the translated copyright notice(s) is [value of 'monobook_copyright_location']_[iso lang code] (e.g. ':wiki:copyright_de').";

//search form
$lang["monobook_search"] = "Show search form?";

//toolbox
$lang["monobook_toolbox"]               = "Show toolbox?";
$lang["monobook_toolbox_default"]       = "If yes, use default toolbox?";
$lang["monobook_toolbox_default_print"] = "If default toolbox is used, show printable version link?";
$lang["monobook_toolbox_location"]      = "If not default, use following wiki page as toolbox location:";

//qr code box
$lang["monobook_qrcodebox"] = "Show box with QR Code of current wiki page URL (for easy URL transfer to mobile browser)?";

//donation link/button
$lang["monobook_donate"]          = "Show donation link/button?";
$lang["monobook_donate_url"]      = "Use following URL for donations:";

//TOC
$lang["monobook_toc_position"] = "Table of contents (TOC) position";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "Position of breadcrumb navigation (if enabled):";
$lang["monobook_youarehere_position"]   = "Position of 'You are here' navigation (if enabled):";
$lang["monobook_cite_author"]           = "Author name in 'Cite this Article':";
$lang["monobook_loaduserjs"]            = "Load 'monobook/user/user.js'?";
$lang["monobook_closedwiki"]            = "Closed wiki (most links/tabs/boxes are hidden until user is logged in)?";

