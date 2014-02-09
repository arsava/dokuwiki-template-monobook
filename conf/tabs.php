<?php

/**
 * Default tab configuration of the "monobook" DokuWiki template
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
  If you want to add some own tabs, have a look at the README of this template
  and "/user/tabs.php". You have been warned!
 *****************************************************************************/


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


//note: The tabs will be rendered in the order they were defined. Means: first
//      tab will be rendered first, last tab will be rendered at last.


//article tab
//ATTENTION: "ca-nstab-main" is used as css id selector!
if (substr(getID(), 0, strlen("wiki:user:")) !== "wiki:user:"){
    $_monobook_tabs["ca-nstab-main"]["text"] = $lang["monobook_tab_article"];
}else{
    $_monobook_tabs["ca-nstab-main"]["text"] = $lang["monobook_tab_userpage"];
}
$_monobook_tabs["ca-nstab-main"]["accesskey"] = "V";
if ($monobook_context !== "discuss"){ //$monobook_context was defined within main.php
    $_monobook_tabs["ca-nstab-main"]["wiki"]  = ":".getID();
    $_monobook_tabs["ca-nstab-main"]["class"] = "selected";
}else{
    $_monobook_tabs["ca-nstab-main"]["wiki"]  = ":".substr(getID(), strlen(tpl_getConf("monobook_discuss_ns"))-1);
}


//hide some tabs for anonymous clients (closed wiki)?
if (empty($conf["useacl"]) || //are there any users?
    $loginname !== "" || //user is logged in?
    !tpl_getConf("monobook_closedwiki")){

    //discussion tab
    //ATTENTION: "ca-talk" is used as css id selector!
    if (tpl_getConf("monobook_discuss")){
        $_monobook_tabs["ca-talk"]["text"] = $lang["monobook_tab_discussion"];
        if ($monobook_context === "discuss"){ //$monobook_context was defined within main.php
            $_monobook_tabs["ca-talk"]["wiki"]  = ":".getID();
            $_monobook_tabs["ca-talk"]["class"] = "selected";
        }else{
            $_monobook_tabs["ca-talk"]["wiki"] = tpl_getConf("monobook_discuss_ns").getID();
        }
    }


    //edit/create/show source tab
    //ATTENTION: "ca-edit" is used as css id selector!
    $_monobook_tabs["ca-edit"]["href"]      = wl(cleanID(getId()), array("do" => "edit", "rev" => (int)$rev), false, "&");
    $_monobook_tabs["ca-edit"]["accesskey"] = "E";
    if ($ACT === "edit"){ //$ACT comes from DokuWiki core
        $_monobook_tabs["ca-edit"]["class"] = "selected";
    }
    if (!empty($INFO["writable"])){ //$INFO comes from DokuWiki core
        if (!empty($INFO["draft"])){
            $_monobook_tabs["ca-edit"]["href"] = wl(cleanID(getId()), array("do" => "draft", "rev" => (int)$rev), false, "&");
            $_monobook_tabs["ca-edit"]["text"] = $lang["btn_draft"]; //language comes from DokuWiki core
        }else{
            if(!empty($INFO["exists"])){
                $_monobook_tabs["ca-edit"]["text"] = $lang["btn_edit"]; //language comes from DokuWiki core
            }else{
                $_monobook_tabs["ca-edit"]["text"] = $lang["btn_create"]; //language comes from DokuWiki core
            }
        }
    }elseif (actionOK("source")){ //check if action is disabled
        $_monobook_tabs["ca-edit"]["text"]      = $lang["btn_source"]; //language comes from DokuWiki core
        $_monobook_tabs["ca-edit"]["accesskey"] = "E";
    }


    //old versions/revisions tab
    if (!empty($INFO["exists"]) &&
        actionOK("revisions")){ //check if action is disabled
        //ATTENTION: "ca-history" is used as css id selector!
        $_monobook_tabs["ca-history"]["text"]      = $lang["btn_revs"]; //language comes from DokuWiki core
        $_monobook_tabs["ca-history"]["href"]      = wl(cleanID(getId()), array("do" => "revisions"), false, "&");
        $_monobook_tabs["ca-history"]["accesskey"] = "O";
        if ($ACT === "revisions"){ //$ACT comes from DokuWiki core
            $_monobook_tabs["ca-history"]["class"] = "selected";
        }
    }


    //(un)subscribe tab
    //ATTENTION: "ca-watch" is used as css id selector!
    if (!empty($conf["useacl"]) &&
        !empty($conf["subscribers"]) &&
        !empty($loginname)){  //$loginname was defined within main.php
        //2010-11-07 "Anteater" and newer ones
        if (empty($lang["btn_unsubscribe"])) {
            if (actionOK("subscribe")){ //check if action is disabled
                $_monobook_tabs["ca-watch"]["href"] = wl(cleanID(getId()), array("do" => "subscribe"), false, "&");
                $_monobook_tabs["ca-watch"]["text"] = $lang["btn_subscribe"]; //language comes from DokuWiki core
            }
        //2009-12-25 "Lemming" and older ones. See the following for information:
        //<http://www.freelists.org/post/dokuwiki/Question-about-tpl-buttonsubscribe>
        } else {
            if (empty($INFO["subscribed"]) && //$INFO comes from DokuWiki core
                actionOK("subscribe")){ //check if action is disabled
                $_monobook_tabs["ca-watch"]["href"] = wl(cleanID(getId()), array("do" => "subscribe"), false, "&");
                $_monobook_tabs["ca-watch"]["text"] = $lang["btn_subscribe"]; //language comes from DokuWiki core
            }elseif (actionOK("unsubscribe")){ //check if action is disabled
                $_monobook_tabs["ca-watch"]["href"] = wl(cleanID(getId()), array("do" => "unsubscribe"), false, "&");
                $_monobook_tabs["ca-watch"]["text"] = $lang["btn_unsubscribe"]; //language comes from DokuWiki core
            }
        }
    }


    //ODT plugin: export tab
    //see <https://www.dokuwiki.org/plugin:odt> for info
    if (file_exists(DOKU_PLUGIN."odt/syntax.php") &&
        !plugin_isdisabled("odt")){
        $_monobook_tabs["tab-export-odt"]["text"]     = $lang["monobook_tab_exportodt"];
        $_monobook_tabs["tab-export-odt"]["href"]     = wl(cleanID(getId()), array("do" => "export_odt"), false, "&");
        $_monobook_tabs["tab-export-odt"]["nofollow"] = true;
    }


    //html2pdf plugin: export tab (thanks to Luigi Micco <l.micco@tiscali.it>)
    //see <https://www.dokuwiki.org/plugin:html2pdf> for info
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

}


/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own tabs, have a look at the README of this template
  and "/user/tabs.php". You have been warned!
 *****************************************************************************/

