<?php

/**
 * Slovak language for the Config Manager
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

//user pages
$lang["monobook_userpage"]             = "Použiť používateľské stránky?";                                // eng: "Use User pages?";
$lang["monobook_userpage_ns"]          = "Ak áno, použiť nasledovný ':menný_priestor:' (namespace) ako koreň (root) na používateľské stránky";  // eng: "If yes, use following ':namespace:' as root for user pages:";

//discussion pages
$lang["monobook_discuss"]              = "Použiť záložku 'diskusia'?";                                   // eng: "Use discussion tabs/sites?";
$lang["monobook_discuss_ns"]           = "Ak áno, použiť nasledovný ':menný_priestor:' (namespace) ako koreň (root) na diskusiu";   // eng: "If yes, use following ':namespace:' as root for discussions:";

//site notice
$lang["monobook_sitenotice"]           = "Zobraziť oznámenie sídla?";                                    // eng: "Show site wide notice?";
$lang["monobook_sitenotice_location"]  = "Ak áno, použiť nasledovnú wiki stránku ako oznámenie sídla";   // eng: "If yes, use following wiki page for the site wide notice:";

//navigation
$lang["monobook_navigation"]           = "Zobraziť navigáciu?";                                          // eng: "Show navigation?";
$lang["monobook_navigation_location"]  = "Ak áno, použiť nasledovnú wiki stránku ako navigáciu";         // eng: "If yes, use following wiki page as navigation:";

//custom copyright notice
$lang["monobook_copyright"]            = "Zobraziť oznámenie o autorských právach (copyright)?";         // eng: "Show copyright notice?";
$lang["monobook_copyright_default"]    = "Ak áno, použiť štandardné oznámenie o autorských právach?";    // eng: "If yes, use default copyright notice?";
$lang["monobook_copyright_location"]   = "Ak nie štandardné, použiť nasledovnú wiki stránku ako oznámenie o autorských právach";  // eng: "If not default, use following wiki page as copyright notice:";

//search form
$lang["monobook_search"]               = "Zobraziť formulár na hľadanie?";                               // eng: "Show search form?";

//toolbox
$lang["monobook_toolbox"]              = "Zobraziť nástroje?";                                           // eng: "Show toolbox?";
$lang["monobook_toolbox_default"]      = "Ak áno, použiť štandardné nástroje?";                          // eng: "If yes, use default toolbox?";
$lang["monobook_toolbox_default_print"]= "Ak sú použité štandardné nástroje, zobraziť odkaz na verziu na tlač?"; // eng: "If default toolbox is used, show printable version link?";
$lang["monobook_toolbox_location"]     = "Ak nie štandardné, použiť nasledovnú wiki stránku ako nástroje";  // eng: "If not default, use following wiki page as toolbox location:";

//donation link/button
$lang["monobook_donate"]               = "Zobraziť odkaz/tlačidlo na darovanie?";                        // eng: "Show donation link/button?";
$lang["monobook_donate_url"]           = "Ak nie štandardné, použiť nasledovné URL na darovanie";        // eng: "If not default, use following URL for donations:";

//TOC
$lang["monobook_toc_position"]         = "Pozícia Obsahu (Table of contents) stránky";                   // eng: "Table of contents (TOC) position";

//other stuff; for navigation name (breadcrumb, youarehere) see /inc/lang/sk/lang.php
$lang["monobook_breadcrumbs_position"] = "Pozícia navigácie 'História' (ak je povolená)";                // eng: "Position of breadcrumb navigation (if enabled):";
$lang["monobook_youarehere_position"]  = "Pozícia navigácie 'Nachádzate sa' (ak je povolená)";           // eng: "Position of 'You are here' navigation (if enabled):";
$lang["monobook_cite_author"]          = "Meno autora v 'Citovať túto stránku'";                        // eng: "Author name in 'Cite this Article':";
$lang["monobook_loaduserjs"]           = "Natiahnuť (load) 'monobook/user/user.js'?";                    // eng: "Load 'monobook/user/user.js'?";
$lang["monobook_closedwiki"]           = "Uzavretá wiki (kým sa používateľ neprihlási je väčšina odkazov/záložiek/nástrojov skrytá)?";  // eng: "Closed wiki (most links/tabs/boxes are hidden until user is logged in)?";

