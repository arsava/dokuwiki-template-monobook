<?php

/**
 * Norwegian language for the Config Manager
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
 *
 * <b>no: Norsk språk for konfigurasjonsinnstillinger</b>
 *
 * Hvis ditt språk ikke er her eller bare delvis er oversatt, ta en titt på
 * følgende filer:
 * - /lib/tpl/monobook/lang/<your lang>/lang.php
 * - /lib/tpl/monobook/lang/<your lang>/settings.php
 * Hvis de ikke fins, kopier og oversett de engelske versjonene.
 *
 *
 * LISENS: Denne fila er programvare med åpen kildekode og kan kopieres under
 *         visse vilkår. Se fila COPYING for detaljer eller forsøk å kontakte
 *         forfatteren av denne fila.
 *
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Henrik Karlstrøm <henrik.karlstrom@ntnu.no>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//discussion pages
//diskusjonssider
$lang["monobook_discuss"]    = "Bruke diskusjonsfaner?";
$lang["monobook_discuss_ns"] = "Hvis ja, bruk følgende ':namespace:' som rot for diskusjoner:";

//site notice
//sidenotis
$lang["monobook_sitenotice"]          = "Vise notis over hele sida?";
$lang["monobook_sitenotice_location"] = "Hvis ja, bruk følgende wiki-side for notisen:";

//navigation
//navigering
$lang["monobook_navigation"]          = "Vise navigering?";
$lang["monobook_navigation_location"] = "Hvis ja, bruk følgende wiki-side til navigering:";

//custom copyright notice
//selvvalgt kopibeskyttelsesnotis
$lang["monobook_copyright"]          = "Vise kopibeskyttelsesnotis?";
$lang["monobook_copyright_default"]  = "Hvis ja, bruk standard kopibeskyttelsesnotis?";
$lang["monobook_copyright_location"] = "Hvis ikke standard, bruk følgende wiki-side til kopibeskyttelsesnotis:";

//search form
//søkefelt
$lang["monobook_search"] = "Vise søkefelt?";

//toolbox
//verktøykasse
$lang["monobook_toolbox"]               = "Vise verktøykasse?";
$lang["monobook_toolbox_default"]       = "Hvis ja, bruk standard verktøykasse?";
$lang["monobook_toolbox_default_print"] = "Hvis standard verktøykasse, vise lenke til utskriftsvennlig versjon?";
$lang["monobook_toolbox_location"]      = "Hvis ikke standard, bruk følgende wiki-side til verktøykasse:";

//donation link/button
//donasjons-lenke/knapp
$lang["monobook_donate"]          = "Vise lenke/knapp til donasjoner?";
$lang["monobook_donate_url"]      = "Bruk følgende lenke til donasjoner:";

//other stuff
//annet
$lang["monobook_breadcrumbs_position"]  = "Posisjonen til breadcrumb-navigering (hvis tillatt):";
$lang["monobook_youarehere_position"]   = "Posisjonen til 'Du er her'-navigering (hvis tillatt):";
$lang["monobook_cite_author"]           = "Forfatternavn i 'Sitér denne artikkelen':";
$lang["monobook_loaduserjs"]            = "Laste 'monobook/user/user.js'?";

