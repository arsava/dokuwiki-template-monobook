<?php

/**
 * Default button configuration of the "monobook" DokuWiki template
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <ah@syn-systems.com>
 * @link http://www.dokuwiki.org/template:monobook
 * @link http://www.dokuwiki.org/devel:configuration
 */



/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own buttons, have a look at the README of this
  template and "/user/buttons.php". You have been warned!
 *****************************************************************************/


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


//note: The buttons will be rendered in the order they were defined. Means:
//      first button will be rendered first, last button will be rendered at
//      last.


//RSS recent changes button
$_monobook_btns["rss"]["img"]      = DOKU_TPL."static/img/button-rss.png";
$_monobook_btns["rss"]["href"]     = DOKU_BASE."feed.php";
$_monobook_btns["rss"]["width"]    = 80;
$_monobook_btns["rss"]["height"]   = 15;
$_monobook_btns["rss"]["title"]    = $lang["monobook_recentchanges"];
$_monobook_btns["rss"]["nofollow"] = true;


//"monobook for DokuWiki" button
//Note: do NOT remove this button. Please respect this. :-)
$_monobook_btns["mbfdw"]["img"]      = DOKU_TPL."static/img/button-monobook.png";
$_monobook_btns["mbfdw"]["href"]     = "http://syn-systems.com/";
$_monobook_btns["mbfdw"]["width"]    = 80;
$_monobook_btns["mbfdw"]["height"]   = 15;
$_monobook_btns["mbfdw"]["title"]    = $lang["monobook_mdtemplatefordw"];
$_monobook_btns["mbfdw"]["nofollow"] = false;


//donation button
if (tpl_getConf("monobook_donate")){
    $_monobook_btns["donate"]["img"]      = DOKU_TPL."static/img/button-donate.gif";
    $_monobook_btns["donate"]["href"]     = tpl_getConf("monobook_donate_url");
    $_monobook_btns["donate"]["width"]    = 80;
    $_monobook_btns["donate"]["height"]   = 15;
    $_monobook_btns["donate"]["title"]    = $lang["monobook_donate"];
    $_monobook_btns["donate"]["nofollow"] = false;
}


//QR Code button
//Note: do NOT remove this button. Please respect this. :-)
$_monobook_btns["qrcode"]["img"]      = DOKU_TPL."static/img/button-qrcode.png";
$_monobook_btns["qrcode"]["href"]     = "http://".(($conf["lang"] !== "de") ? "goqr.me" : "qr-code-generator.de")."/";
$_monobook_btns["qrcode"]["width"]    = 80;
$_monobook_btns["qrcode"]["height"]   = 15;
$_monobook_btns["qrcode"]["title"]    = $lang["monobook_qrcodebtn"];
$_monobook_btns["qrcode"]["nofollow"] = false;


//DokuWiki button
$_monobook_btns["dw"]["img"]      = DOKU_TPL."static/img/button-dw.png";
$_monobook_btns["dw"]["href"]     = "http://www.dokuwiki.org";
$_monobook_btns["dw"]["width"]    = 80;
$_monobook_btns["dw"]["height"]   = 15;
$_monobook_btns["dw"]["title"]    = "DokuWiki";
$_monobook_btns["dw"]["nofollow"] = false;



/******************************************************************************
 ********************************  ATTENTION  *********************************
         DO NOT MODIFY THIS FILE, IT WILL NOT BE PRESERVED ON UPDATES!
 ******************************************************************************
  If you want to add some own buttons, have a look at the README of this
  template and "/user/buttons.php". You have been warned!
 *****************************************************************************/

