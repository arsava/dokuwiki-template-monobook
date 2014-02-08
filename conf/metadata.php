<?php

/**
 * Types of the different option values for the "monobook" DokuWiki template
 *
 * Notes:
 * - In general, use the admin webinterface of DokuWiki to change the config.
 * - To change/add configuration values to store, have a look at this file
 *   and the "default.php" in the same directory as this file.
 * - To change/translate the descriptions showed in the admin/configuration
 *   menu of DokuWiki, have a look at the file
 *   /lib/tpl/monobook/lang/<your lang>/settings.php. If it does not exists,
 *   copy and translate the English one. Don't forget to mail your translation
 *   to ARSAVA <dokuwiki@dev.arsava.com>. Thanks! :-D
 * - To change the tab configuration, have a look at the "tabs.php" in the
 *   same directory as this file.
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
$meta["monobook_userpage"]    = array("onoff");
$meta["monobook_userpage_ns"] = array("string", "_pattern" => "/^:.{1,}:$/");

//discussion pages
$meta["monobook_discuss"]    = array("onoff");
$meta["monobook_discuss_ns"] = array("string", "_pattern" => "/^:.{1,}:$/");

//site notice
$meta["monobook_sitenotice"]           = array("onoff");
$meta["monobook_sitenotice_location"]  = array("string");
$meta["monobook_sitenotice_translate"] = array("onoff");

//navigation
$meta["monobook_navigation"]           = array("onoff");
$meta["monobook_navigation_location"]  = array("string");
$meta["monobook_navigation_translate"] = array("onoff");

//custom copyright notice
$meta["monobook_copyright"]           = array("onoff");
$meta["monobook_copyright_default"]   = array("onoff");
$meta["monobook_copyright_location"]  = array("string");
$meta["monobook_copyright_translate"] = array("onoff");

//search form
$meta["monobook_search"] = array("onoff");

//toolbox
$meta["monobook_toolbox"]               = array("onoff");
$meta["monobook_toolbox_default"]       = array("onoff");
$meta["monobook_toolbox_default_print"] = array("onoff");
$meta["monobook_toolbox_location"]      = array("string");

//qr code box
$meta["monobook_qrcodebox"] = array("onoff");

//donation link/button
$meta["monobook_donate"]     = array("onoff");
$meta["monobook_donate_url"] = array("string", "_pattern" => "/^.{1,6}:\/{2}.+$/");

//TOC
$meta["monobook_toc_position"] = array("multichoice", "_choices" => array("article", "sidebar"));

//other stuff
$meta["monobook_breadcrumbs_position"]  = array("multichoice", "_choices" => array("top", "bottom"));
$meta["monobook_youarehere_position"]   = array("multichoice", "_choices" => array("top", "bottom"));
$meta["monobook_cite_author"]           = array("string");
$meta["monobook_loaduserjs"]            = array("onoff");
$meta["monobook_closedwiki"]            = array("onoff");

