<?php

/**
 * Default box configuration of the "monobook" DokuWiki template
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



/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own boxes, have a look at the README of this
  template and "/user/boxes.php". You have been warned!
 *****************************************************************************/


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


//note: The boxes will be rendered in the order they were defined. Means:
//      first box will be rendered first, last box will be rendered at last.


//hide boxes for anonymous clients (closed wiki)?
if (empty($conf["useacl"]) || //are there any users?
    $loginname !== "" || //user is logged in?
    !tpl_getConf("monobook_closedwiki")){

    //Languages/translations provided by Andreas Gohr's translation plugin,
    //see <https://www.dokuwiki.org/plugin:translation>. Create plugin object if
    //needed.
    if (file_exists(DOKU_PLUGIN."translation/syntax.php") &&
        !plugin_isdisabled("translation")){
        $transplugin = &plugin_load("syntax", "translation");
    } else {
        $transplugin = false;
    }

    //navigation
    if (tpl_getConf("monobook_navigation")){
        //headline
        $_monobook_boxes["p-x-navigation"]["headline"] = $lang["monobook_bar_navigation"];

        //detect wiki page to load as content
        if (!empty($transplugin) &&
            is_object($transplugin) &&
            tpl_getConf("monobook_navigation_translate")){
            //translated navigation?
            $transplugin_langcur = $transplugin->hlp->getLangPart(cleanID(getId())); //current language part
            $transplugin_langs   = explode(" ", trim($transplugin->getConf("translations"))); //available languages
            if (empty($transplugin_langs) ||
                empty($transplugin_langcur) ||
                !is_array($transplugin_langs) ||
                !in_array($transplugin_langcur, $transplugin_langs)) {
                //current page is no translation or something is wrong, load default navigation
                $nav_location = tpl_getConf("monobook_navigation_location");
            } else {
                //load language specific navigation
                $nav_location = tpl_getConf("monobook_navigation_location")."_".$transplugin_langcur;
            }
        }else{
            //default navigation, no translation
            $nav_location = tpl_getConf("monobook_navigation_location");
        }

        //content
        if (empty($conf["useacl"]) ||
            auth_quickaclcheck(cleanID($nav_location)) >= AUTH_READ){ //current user got access?
            //get the rendered content of the defined wiki article to use as custom navigation
            $interim = tpl_include_page($nav_location, false);
            if ($interim === "" ||
                $interim === false){
                //creation/edit link if the defined page got no content
                $_monobook_boxes["p-x-navigation"]["xhtml"] = "[&#160;".html_wikilink($nav_location, hsc($lang["monobook_fillplaceholder"]." (".$nav_location.")"))."&#160;]<br />";
            }else{
                //the rendered page content
                $_monobook_boxes["p-x-navigation"]["xhtml"] = $interim;
            }
        }
        unset($nav_location);
    }

    //table of contents (TOC) - show outside the article? (this is a dirty hack but often requested)
    if (tpl_getConf("monobook_toc_position") === "sidebar"){
        //check if the current page got a TOC
        $toc = tpl_toc(true);
        if (!empty($toc)) {
            //headline
            $_monobook_boxes["p-toc"]["headline"] = $lang["toc"]; //language comes from DokuWiki core

            //content
            $_monobook_boxes["p-toc"]["xhtml"]    = //get rid of some styles and the embedded headline
                                                    str_replace(//search
                                                                array(//old TOC, until 2012-01-25
                                                                      "<div class=\"tocheader toctoggle\" id=\"toc__header\">".$lang["toc"]."</div>", //language comes from DokuWiki core
                                                                      " class=\"toc\"",
                                                                      " id=\"toc__inside\"",
                                                                      //new TOC, since 2012-09-10
                                                                      " id=\"dw__toc\"",
                                                                      "<h3 class=\"toggle\">".$lang["toc"]."</h3>"), //language comes from DokuWiki core
                                                                //replace
                                                                "",
                                                                //haystack
                                                                $toc);
        }
        unset($toc);
    }

    //search
    if (tpl_getConf("monobook_search") &&
        actionOK("search")){ //check if action is disabled
        //headline
        $_monobook_boxes["p-search"]["headline"] = $lang["monobook_bar_search"];

        //content
        $_monobook_boxes["p-search"]["xhtml"] =  "<form action=\"".wl()."\" accept-charset=\"utf-8\" id=\"dw__search\" name=\"dw__search\">\n"
                                                ."  <input type=\"hidden\" name=\"do\" value=\"search\" />\n"
                                                ."  <input id=\"qsearch__in\" name=\"id\" type=\"text\" accesskey=\"f\" value=\"\" />\n"
                                                ."  <input type=\"button\" class=\"searchButton\" id=\"searchGoButton\" value=\"".hsc($lang["monobook_btn_go"])."\" onclick=\"document.location.href='".DOKU_BASE.DOKU_SCRIPT."?id='+document.getElementById('qsearch__in').value;\" />&#160;\n"
                                                ."  <input type=\"submit\" name=\"fulltext\" class=\"searchButton\" value=\"".hsc($lang["monobook_btn_search"])."\" />\n"
                                                ."</form>";
    }

    //toolbox
    if (tpl_getConf("monobook_toolbox")){
        //headline
        $_monobook_boxes["p-tb"]["headline"] = $lang["monobook_bar_toolbox"];

        //content
        if (tpl_getConf("monobook_toolbox_default")){
            //define default, predefined toolbox
            $_monobook_boxes["p-tb"]["xhtml"] =  "        <ul>\n";
            if (actionOK("backlink")){ //check if action is disabled
                $_monobook_boxes["p-tb"]["xhtml"] .= "          <li id=\"tb-whatlinkshere\"><a href=\"".wl(cleanID(getId()), array("do" => "backlink"))."\">".hsc($lang["monobook_toolbxdef_whatlinkshere"])."</a></li>\n"; //we might use tpl_actionlink("backlink", "", "", hsc($lang["monobook_toolbxdef_whatlinkshere"]), true), but it would be the only toolbox link where this is possible... therefore I don't use it to be consistent
            }
            if (actionOK("recent")){ //check if action is disabled
                $_monobook_boxes["p-tb"]["xhtml"] .= "          <li id=\"tb-recent\"><a href=\"".wl("", array("do" => "recent"))."\" rel=\"nofollow\">".hsc($lang["btn_recent"])."</a></li>\n"; //language comes from DokuWiki core
            }
            if (actionOK("media")){ //check if action is disabled
                if (function_exists("media_managerURL")) {
                    //use new media manager (available on releases newer than 2011-05-25a "Rincewind" / since 2011-11-10 "Angua" RC1)
                    $_monobook_boxes["p-tb"]["xhtml"] .= "          <li id=\"tb-upload\"><a href=\"".wl("", array("do" => "media"))."\" rel=\"nofollow\">".hsc($lang["btn_media"])."</a></li>\n"; //language comes from DokuWiki core
                }else{
                    $_monobook_boxes["p-tb"]["xhtml"] .= "          <li id=\"tb-upload\"><a href=\"".DOKU_BASE."lib/exe/mediamanager.php?ns=".getNS(getID())."\" rel=\"nofollow\">".hsc($lang["monobook_toolbxdef_upload"])."</a></li>\n";
                }
            }
            if (actionOK("index")){ //check if action is disabled
                $_monobook_boxes["p-tb"]["xhtml"] .= "          <li id=\"tb-special\"><a href=\"".wl("", array("do" => "index"))."\" rel=\"nofollow\">".hsc($lang["monobook_toolbxdef_siteindex"])."</a></li>\n";
            }
            //add link to a printable version? this is not needed in every case (and
            //therefore configurable) cause the print stylesheets are used automatically
            //by common browsers if the user wants to print. but often users are
            //searching for a print version instead of using the browser's printing
            //preview...
            if (tpl_getConf("monobook_toolbox_default_print")){
                $_monobook_boxes["p-tb"]["xhtml"] .= "          <li id=\"tb-print\"><a href=\"".wl(cleanID(getId()), array("rev" =>(int)$rev, "mddo" => "print"))."\" rel=\"nofollow\">".hsc($lang["monobook_toolbxdef_print"])."</a></li>\n";
            }
            $_monobook_boxes["p-tb"]["xhtml"] .= "          <li id=\"tb-permanent\"><a href=\"".wl(cleanID(getId()), array("rev" =>(int)$rev))."\" rel=\"nofollow\">".hsc($lang["monobook_toolboxdef_permanent"])."</a></li>\n"
                                                ."          <li id=\"tb-cite\"><a href=\"".wl(cleanID(getId()), array("rev" =>(int)$rev, "mddo" => "cite"))."\" rel=\"nofollow\">".hsc($lang["monobook_toolboxdef_cite"])."</a></li>\n"
                                                ."        </ul>";
        }else{
            //we have to use a custom toolbox
            if (empty($conf["useacl"]) ||
                auth_quickaclcheck(cleanID(tpl_getConf("monobook_toolbox_location"))) >= AUTH_READ){ //current user got access?
                //get the rendered content of the defined wiki article to use as
                //custom toolbox
                $interim = tpl_include_page(tpl_getConf("monobook_toolbox_location"), false);
                if ($interim === "" ||
                    $interim === false){
                    //add creation/edit link if the defined page got no content
                    $_monobook_boxes["p-tb"]["xhtml"] =  "<li>[&#160;".html_wikilink(tpl_getConf("monobook_toolbox_location"), hsc($lang["monobook_fillplaceholder"]." (".tpl_getConf("monobook_toolbox_location").")"), null)."&#160;]<br /></li>";
                }else{
                    //add the rendered page content
                    $_monobook_boxes["p-tb"]["xhtml"] =  $interim."\n";
                }
            }else{
                //we are not allowed to show the content of the defined wiki
                //article to use as custom sitenotice.
                //$_monobook_boxes["p-tb"]["xhtml"] = hsc($lang["monobook_accessdenied"])." (".tpl_getConf("monobook_toolbox_location").")";
            }
        }
    }

    //Languages/translations provided by Andreas Gohr's translation plugin,
    //see <https://www.dokuwiki.org/plugin:translation>
    if (!empty($transplugin) &&
        is_object($transplugin)){
        $_monobook_boxes["p-lang"]["headline"] = $lang["monobook_bar_inotherlanguages"];
        $_monobook_boxes["p-lang"]["xhtml"]    = $transplugin->_showTranslations();
    }

    //QR Code of current page's URL (powered by <http://goqr.me/api/>)
    if (tpl_getConf("monobook_qrcodebox")){
        //headline
        $_monobook_boxes["p-qrcode"]["headline"] = $lang["monobook_qrcodebox"];

        //content
        $_monobook_boxes["p-qrcode"]["xhtml"] = "        <span id=\"t-qrcode\">".((cleanID(getID()) === "start") ? "<a href=\"http://".(($conf["lang"] !== "de") ? "goqr.me" : "goqr.me/de")."/\" target=\"_blank\" rel=\"nofollow\">" : "")."<img src=\"".((!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") ? "https" : "http")."://api.qrserver.com/v1/create-qr-code/?data=".urlencode(wl(cleanID(getId()), false, true, "&"))."&#38;size=130x130&#38;margin=0\" alt=\"".hsc($lang["monobook_qrcodebox_qrcode"])." ".hsc(tpl_pagetitle(null, true))." (".hsc($lang["monobook_qrcodebox_genforcurrentpage"]).")\" title=\"".hsc($lang["monobook_qrcodebox_urlofcurrentpage"])."\" />".((cleanID(getID()) === "start") ? "</a>" : "")."</span>";
    }

}else{

    //headline
    $_monobook_boxes["p-login"]["headline"] = $lang["btn_login"];
    $_monobook_boxes["p-login"]["xhtml"] =  "      <ul>\n"
                                           ."        <li id=\"t-login\"><a href=\"".wl(cleanID(getId()), array("do" => "login"))."\" rel=\"nofollow\">".hsc($lang["btn_login"])."</a></li>\n" //language comes from DokuWiki core
                                           ."      </ul>";

}


/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own boxes, have a look at the README of this
  template and "/user/boxes.php". You have been warned!
 *****************************************************************************/

