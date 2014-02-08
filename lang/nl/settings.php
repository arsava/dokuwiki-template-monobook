<?php

/**
 * Dutch language for the Config Manager
 * by Theo Klein (16/02/2010)
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
 * @author Theo Klein
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//discussion pages
$lang["monobook_discuss"]    = "Gebruik discussie pagina's en tabs?";
$lang["monobook_discuss_ns"] = "Indien ja, gebruik de volgende ':namespace:' als root voor discussies:";

//site notice
$lang["monobook_sitenotice"]          = "Toon notificatie door de gehele site?";
$lang["monobook_sitenotice_location"] = "Indien ja, gebruik de volgende wiki pagina als notificatie:";

//navigation
$lang["monobook_navigation"]          = "Toon navigatie?";
$lang["monobook_navigation_location"] = "Indien ja, gebruik de volgende wiki pagina als navigatie:";

//custom copyright notice
$lang["monobook_copyright"]          = "Toon copyright notificatie?";
$lang["monobook_copyright_default"]  = "Indien ja, gebruik de standaard copyright notificatie?";
$lang["monobook_copyright_location"] = "Wanneer de standaard niet gebruikt wordt, gebruik de volgende wiki pagina als copyright notificatie:";

//search form
$lang["monobook_search"] = "Toon zoek veld?";

//toolbox
$lang["monobook_toolbox"]               = "Toon gereedschappen?";
$lang["monobook_toolbox_default"]       = "Indien ja, gebruik maken van de standaard gereedschappen?";
$lang["monobook_toolbox_default_print"] = "Indien de standaard gebruikt wordt, toon een link naar de printbare versie?";
$lang["monobook_toolbox_location"]      = "Indien niet de standaard gereedschappen gebruikt worden, wordt deze wiki pagina gebruikt:";

//donation link/button
$lang["monobook_donate"]          = "Toon donatie link/knop?";
$lang["monobook_donate_url"]      = "Indien niet standaard, gebruik de volgende URL voor donaties:";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "Positie van broodkruimel navigatie (indien ingeschakeld):";
$lang["monobook_youarehere_position"]   = "Positie van 'U bent hier' navigatie (indien ingeschakeld):";
$lang["monobook_cite_author"]           = "Naam van de auteur in 'Citeer dit artikel':";
$lang["monobook_loaduserjs"]            = "Laad 'monobook/user/user.js'?";

