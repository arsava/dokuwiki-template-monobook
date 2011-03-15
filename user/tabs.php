<?php

/**
 * User defined tab configuration of the "monobook" DokuWiki template
 *
 * If you want to add/remove some tabs, have a look at the comments/examples
 * and the DocBlock of {@link _monobook_renderTabs()}, main.php
 *
 * To change the non-tab related config, use the admin webinterface of DokuWiki.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <development@andreas-haerter.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-monobook
 * @link http://www.dokuwiki.org/template:monobook
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


//note: The tabs will be rendered in the order they were defined. Means: first
//      tab will be rendered first, last tab will be rendered at last.


//ODT plugin: export tab
//see <http://www.dokuwiki.org/plugin:odt> for info
if (file_exists(DOKU_PLUGIN."odt/syntax.php") &&
    !plugin_isdisabled("odt")){
    $_monobook_tabs["tab-export-odt"]["text"]     = $lang["monobook_tab_exportodt"];
    $_monobook_tabs["tab-export-odt"]["href"]     = wl(cleanID(getId()), array("do" => "export_odt"), false, "&");
    $_monobook_tabs["tab-export-odt"]["nofollow"] = true;
}


//html2pdf plugin: export tab (thanks to Luigi Micco <l.micco@tiscali.it>)
//see <http://www.dokuwiki.org/plugin:html2pdf> for info
if (file_exists(DOKU_PLUGIN."html2pdf/action.php") &&
    !plugin_isdisabled("html2pdf")){
    $_monobook_tabs["tab-export-pdf"]["text"]     = $lang["monobook_tab_exportpdf"];
    $_monobook_tabs["tab-export-pdf"]["href"]     = wl(cleanID(getId()), array("do" => "export_pdf"), false, "&");
    $_monobook_tabs["tab-export-pdf"]["nofollow"] = true;
}

//(un)subscribe namespace tab
if (!empty($conf["useacl"]) &&
    !empty($conf["subscribers"]) &&
    !empty($loginname)){ //$loginname was defined within main.php
    if (empty($INFO["subscribedns"])){ //$INFO comes from DokuWiki core
        $_monobook_tabs["ca-watchns"]["href"] = wl(cleanID(getId()), array("do" => "subscribens"), false, "&");
        $_monobook_tabs["ca-watchns"]["text"] = $lang["btn_subscribens"]; //language comes from DokuWiki core
    }else{
        $_monobook_tabs["ca-watchns"]["href"] = wl(cleanID(getId()), array("do" => "unsubscribens"), false, "&");
        $_monobook_tabs["ca-watchns"]["text"] = $lang["btn_unsubscribens"]; //language comes from DokuWiki core
    }
}


//examples: uncomment to see what is happening
/*
//text
$_monobook_tabs["tab-textexample"]["text"] = "Example";
*/


/*
//Recent Changes (thanks to Stefan Riemer for this)
//To get some space between this and the other tabs, you may add the following
//additional CSS to /monobook/user/screen.css:
//  li#tab-recent {
//    margin-left: 1.6em;
//  }
if (!empty($conf["recent_days"])){
    $_monobook_tabs["tab-recent"]["text"]     = $lang["btn_recent"]; //language comes from DokuWiki core
    $_monobook_tabs["tab-recent"]["href"]     = wl("", array("do" => "recent"), false, "&");
    $_monobook_tabs["tab-recent"]["nofollow"] = true;
}
*/


/*
//(un)subscribe namespace tab
if (!empty($conf["useacl"]) &&
    !empty($conf["subscribers"]) &&
    !empty($loginname)){ //$loginname was defined within main.php
    if (empty($INFO["subscribedns"])){ //$INFO comes from DokuWiki core
        $_monobook_tabs["ca-watchns"]["href"] = wl(cleanID(getId()), array("do" => "subscribens"), false, "&");
        $_monobook_tabs["ca-watchns"]["text"] = $lang["btn_subscribens"]; //language comes from DokuWiki core
    }else{
        $_monobook_tabs["ca-watchns"]["href"] = wl(cleanID(getId()), array("do" => "unsubscribens"), false, "&");
        $_monobook_tabs["ca-watchns"]["text"] = $lang["btn_unsubscribens"]; //language comes from DokuWiki core
    }
}
*/


/*
//link
$_monobook_tabs["tab-urlexample"]["text"]  = "Creator";
$_monobook_tabs["tab-urlexample"]["href"]  = "http://andreas-haerter.com";
*/


/*
//link with rel="nofollow", see http://www.wikipedia.org/wiki/Nofollow for info
$_monobook_tabs["tab-urlexample2"]["text"]     = "Search the web";
$_monobook_tabs["tab-urlexample2"]["href"]     = "http://www.google.com/search?q=dokuwiki";
$_monobook_tabs["tab-urlexample2"]["nofollow"] = true;
*/


/*
//internal wiki link
$_monobook_tabs["tab-wikilinkexample"]["text"]      = "Home";
$_monobook_tabs["tab-wikilinkexample"]["wiki"]      = ":start";
$_monobook_tabs["tab-wikilinkexample"]["accesskey"] = "H"; //accesskey is optional
*/

