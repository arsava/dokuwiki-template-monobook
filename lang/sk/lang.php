<?php

/**
 * Slovak language for the "monobook" DokuWiki template
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
 * @author Martin Hanula <mh.ikar@gmail.com>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs
$lang["monobook_tab_article"]                = "Stránka";                        // eng: "Article";
$lang["monobook_tab_discussion"]             = "Diskusia";                       // eng: "Discussion";
$lang["monobook_tab_userpage"]               = "Používateľova stránka";          // eng: "User Page";
$lang["monobook_tab_specialpage"]            = "Špeciálne stránky";              // eng: "Special Pages";
$lang["monobook_tab_mytalk"]                 = "My Talk";                        // eng: "My Talk";
$lang["monobook_tab_exportodt"]              = "Stiahnuť ako ODT";               // eng: "Export: ODT";
$lang["monobook_tab_exportpdf"]              = "Stiahnuť ako PDF";               // eng: "Export: PDF";

//headlines for the different bars
$lang["monobook_bar_views"]                  = "Pohľady";                        // eng: "Views";
$lang["monobook_bar_personnaltools"]         = "osobné nástroje";                // eng: "Personal Tools";
$lang["monobook_bar_navigation"]             = "Navigácia";                      // eng: "Navigation";
$lang["monobook_bar_toolbox"]                = "Nástroje";                       // eng: "Toolbox";
$lang["monobook_bar_inotherlanguages"]       = "V iných jazykoch";               // eng: "In Other Languages";
$lang["monobook_bar_search"]                 = "Hľadať";                         // eng: "Search";

//buttons
$lang["monobook_btn_go"]                     = "Ísť na";                         // eng: "Go";
$lang["monobook_btn_search"]                 = "Hľadať";                         // eng: "Search";

//default toolbox
$lang["monobook_toolbxdef_whatlinkshere"]    = "Odkazy na túto stránku";         // eng: "What links here";
$lang["monobook_toolbxdef_upload"]           = "Odovzdať súbor";                 // eng: "Upload file";
$lang["monobook_toolbxdef_siteindex"]        = "Index sídla";                    // eng: "Site index";
$lang["monobook_toolbxdef_print"]            = "Verzia na tlač";                 // eng: "Printable version";
$lang["monobook_toolboxdef_permanent"]       = "Trvalý odkaz";                   // eng: "Permanent link";
$lang["monobook_toolboxdef_cite"]            = "Citovať túto stránku";           // eng: "Cite this article";

//cite this article
$lang["monobook_cite_bibdetailsfor"]         = "Bibliografické podrobnosti pre"; // eng: "Bibliographic details for";
$lang["monobook_cite_pagename"]              = "Názov stránky";                  // eng: "Page name";
$lang["monobook_cite_author"]                = "Autor";                          // eng: "Author";
$lang["monobook_cite_publisher"]             = "Vydavateľ";                      // eng: "Publisher";
$lang["monobook_cite_dateofrev"]             = "Dátum tejto revízie";            // eng: "Date of this revision";
$lang["monobook_cite_dateretrieved"]         = "Dátum získania";                 // eng: "Date retrieved";
$lang["monobook_cite_permurl"]               = "Trvalé URL";                     // eng: "Permanent URL";
$lang["monobook_cite_pageversionid"]         = "ID verzie stránky";              // eng: "Page Version ID";
$lang["monobook_cite_citationstyles"]        = "Štýly citácie pre";              // eng: "Citation styles for";
$lang["monobook_cite_checkstandards"]        = "Prosím nezabudnite skontrolovať váš manuál o štýle, príručku štandardov alebo inštruktážny návod na presnú syntax, ktorá vyhovuje vašim požiadavkám."; // eng: "Please remember to check your manual of style, standards guide or instructor's guidelines for the exact syntax to suit your needs";
$lang["monobook_cite_latexusepackagehint"]   = "Pri použití balíka 'url' v LaTeX-e ('\usepackage{url}' niekde v úvode), sa preferuje nasledovné (čo dá oveľa krajšie formátované webové adresy)"; // eng: "When using the LaTeX package url (\usepackage{url} somewhere in the preamble), which tends to give much more nicely formatted web addresses, the following may be preferred";
$lang["monobook_cite_retrieved"]             = "Získané";                        // eng: "Retrieved";
$lang["monobook_cite_from"]                  = "z";                              // eng: "from";
$lang["monobook_cite_in"]                    = "V";                              // eng: "In";
$lang["monobook_cite_accessed"]              = "Prístup";                        // eng: "Accessed";
$lang["monobook_cite_cited"]                 = "Citované";                       // eng: "Cited";
$lang["monobook_cite_lastvisited"]           = "Posledná návšteva";              // eng: "Last visited";
$lang["monobook_cite_availableat"]           = "Dostupné na";                    // eng: "Available at";
$lang["monobook_cite_discussionpages"]       = "DokuWiki talk pages";            // eng: "DokuWiki talk pages";
$lang["monobook_cite_markup"]                = "Kód";                            // eng: "Markup";
$lang["monobook_cite_result"]                = "Výsledok";                       // eng: "Result";
$lang["monobook_cite_thisversion"]           = "táto verzia";                    // eng: "this version";

//other
$lang["monobook_accessdenied"]               = "Prístup zamietnutý";             // eng: "Access denied";
$lang["monobook_fillplaceholder"]            = "Prosím vyplňte tento zástupný priestor";  // eng: "Please fill this placeholder";
$lang["monobook_donate"]                     = "Darovať";                        // eng: "Donate";
$lang["monobook_mdtemplatefordw"]            = "monobook šablóna pre DokuWiki";  // eng: "monobook template for DokuWiki";
$lang["monobook_recentchanges"]              = "Posledné úpravy";                // eng: "Recent changes";

