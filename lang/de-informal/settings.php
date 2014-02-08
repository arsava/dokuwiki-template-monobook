<?php

/**
 * German language (informal, "Du") for the Config Manager
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
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//user pages
$lang["monobook_userpage"]    = "Benutzerseiten benutzen?";
$lang["monobook_userpage_ns"] = "Falls ja, folgenden ':namensraum:' als Wurzel für Benutzerseiten nutzen:";

//discussion pages
$lang["monobook_discuss"]    = "Diskussions-Tabs/Seiten benutzen?";
$lang["monobook_discuss_ns"] = "Falls ja, folgenden ':namensraum:' als Wurzel für Diskussionen nutzen:";

//site notice
$lang["monobook_sitenotice"]           = "Seitenübergreifenden Hinweis einblenden?";
$lang["monobook_sitenotice_location"]  = "Falls ja, folgende wiki-Seite als Hinweis verwenden:";
$lang["monobook_sitenotice_translate"] = "Falls ja und <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation-Plugin</a> verfügbar: sprachspezifische Seiten-Hinweis(e) laden?<br />Die wiki-Seite des/der übersetzten Seiten-Hinweis(e) lautet [Wert von 'monobook_sitenotice_location']_[iso-sprach-code] (z.B. ':wiki:site_notice_en').";

//navigation
$lang["monobook_navigation"]           = "Navigation anzeigen?";
$lang["monobook_navigation_location"]  = "Falls ja, folgende wiki-Seite als Navigation verwenden:";
$lang["monobook_navigation_translate"] = "Falls ja und <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation-Plugin</a> verfügbar: sprachspezifische Navigation laden?<br />Die wiki-Seite der übersetzten Navigation(en) lautet [Wert von 'monobook_navigation_location']_[iso-sprach-code] (z.B. ':wiki:navigation_en').";

//qr code box
$lang["monobook_qrcodebox"] = "Box mit QR-Code der aktuellen Wiki-Seiten-URL anzeigen (für einfache Übertragung der URL auf Mobiltelefone)?";

//custom copyright notice
$lang["monobook_copyright"]           = "Copyright-Hinweis einblenden?";
$lang["monobook_copyright_default"]   = "Falls ja, Standard-Copyright-Hinweis nutzen?";
$lang["monobook_copyright_location"]  = "Falls nicht den Standard-Copyright-Hinweis, folgende wiki-Seite als Copyright-Hinweis verwenden:";
$lang["monobook_copyright_translate"] = "Falls nicht den Standard-Copyright-Hinweis und <a href=\"https://www.dokuwiki.org/plugin:translation\">Translation-Plugin</a> verfügbar: sprachspezifische Copyright-Hinweis(e) laden?<br />Die wiki-Seite des/der übersetzten Copyright-Hinweis(e) lautet [Wert von 'monobook_copyright_location']_[iso-sprach-code] (z.B. ':wiki:copyright_en').";

//search form
$lang["monobook_search"] = "Suchformular anzeigen?";

//toolbox
$lang["monobook_toolbox"]               = "Toolbox/Werkzeuge anzeigen?";
$lang["monobook_toolbox_default"]       = "Falls ja, Standard-Toolbox nutzen?";
$lang["monobook_toolbox_default_print"] = "Falls die Standard-Toolbox genutzt wird, zusätzlichen Druckversionslink anzeigen?";
$lang["monobook_toolbox_location"]      = "Falls nicht die Standard-Toolbox, folgende wiki-Seite als Toolbox verwenden:";

//donation link/button
$lang["monobook_donate"]          = "'Spenden'-Link/button anzeigen?";
$lang["monobook_donate_url"]      = "Folgende URL als Spendenziel benutzen:";

//TOC
$lang["monobook_toc_position"] = "Position des Inhaltsverzeichnisses";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "Position der breadcrumb-Navigation (sofern aktiviert):";
$lang["monobook_youarehere_position"]   = "Position der 'Sie befinden sich hier'-Navigation (sofern aktiviert):";
$lang["monobook_cite_author"]           = "Zu nutzender Autorenname in 'Artikel zitieren':";
$lang["monobook_loaduserjs"]            = "Datei 'monobook/user/user.js' laden?";
$lang["monobook_closedwiki"]            = "Nicht-öffentliches Wiki (die meisten Links/Tabs/Boxen werden versteckt bis man sich einloggt)?";

