<?php

/**
 * User defined button configuration of the "monobook" DokuWiki template
 *
 * If you want to add/remove some buttons, have a look at the comments/examples
 * and the DocBlock of {@link _monobook_renderButtons()}, main.php
 *
 * To change the non-button related config, use the admin webinterface of
 * DokuWiki.
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


//note: The buttons will be rendered in the order they were defined. Means:
//      first button will be rendered first, last button will be rendered at
//      last.


//W3C (X)HTML validator button
$_monobook_btns["valid_xhtml"]["img"]      = DOKU_TPL."user/button-xhtml.png";
$_monobook_btns["valid_xhtml"]["href"]     = "http://validator.w3.org/check/referer";
$_monobook_btns["valid_xhtml"]["width"]    = 80;
$_monobook_btns["valid_xhtml"]["height"]   = 15;
$_monobook_btns["valid_xhtml"]["title"]    = "Valid XHTML";
$_monobook_btns["valid_xhtml"]["nofollow"] = true;






//examples: uncomment to see what is happening
/*
//W3C CSS validator button
$_monobook_btns["valid_css"]["img"]      = DOKU_TPL."user/button-css.png";
$_monobook_btns["valid_css"]["href"]     = "http://jigsaw.w3.org/css-validator/check/referer";
$_monobook_btns["valid_css"]["width"]    = 80;
$_monobook_btns["valid_css"]["height"]   = 15;
$_monobook_btns["valid_css"]["title"]    = "Valid CSS";
$_monobook_btns["valid_css"]["nofollow"] = true;
*/

/*
//button using all attributes
$_monobook_btns["example1"]["img"]      = DOKU_TPL."user/img/yourButtonHere.png";
$_monobook_btns["example1"]["href"]     = "http://www.example.com";
$_monobook_btns["example1"]["width"]    = 80;
$_monobook_btns["example1"]["height"]   = 15;
$_monobook_btns["example1"]["title"]    = "Example button";
$_monobook_btns["example1"]["nofollow"] = false;
*/

/*
//button using only mandatory attributes
$_monobook_btns["example2"]["img"]      = DOKU_TPL."user/img/yourButtonHere.png";
$_monobook_btns["example2"]["href"]     = "http://www.example.com";
*/
