<?php

/**
 * Italian language for the Config Manager
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
 * @author Luigi Micco <l.micco@tiscali.it>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//discussion pages
$lang["monobook_discuss"]    = "Usare linguetta discussioni?";
$lang["monobook_discuss_ns"] = "Se si, usa questo ':namespace:' come radice per le discussioni:";

//site notice
$lang["monobook_sitenotice"]          = "Mostra annunci generali?";
$lang["monobook_sitenotice_location"] = "Se si, usa la seguente pagina wiki come annuncio:";

//navigation
$lang["monobook_navigation"]          = "Mostra pannello di navigazione?";
$lang["monobook_navigation_location"] = "Se si, usa la seguente pagina wiki come pannello di navigazione:";

//custom copyright notice
$lang["monobook_copyright"]          = "Mostra avviso di copyright?";
$lang["monobook_copyright_default"]  = "Se si, usa l'avviso di copyright predefinito?";
$lang["monobook_copyright_location"] = "Se non usi il predefinito, usa la seguente pagina wiki come avviso di copyright:";

//search form
$lang["monobook_search"] = "Mostra casella di ricerca?";

//toolbox
$lang["monobook_toolbox"]               = "Mostra pannello strumenti?";
$lang["monobook_toolbox_default"]       = "Se si, usa il pannello predefinito?";
$lang["monobook_toolbox_default_print"] = "Se utilizzi il pannello predefinito, mostra link per versione stampabile?";
$lang["monobook_toolbox_location"]      = "Se non usi il predefinito, usa la seguente pagina wiki come pannello degli strumenti:";

//donation link/button
$lang["monobook_donate"]          = "Mostra link/pulsante per le donazioni?";
$lang["monobook_donate_url"]      = "Se non predefinito, usa il seguente indirizzo URL per le donazioni:";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "Posizione del pannello breadcrumb (se abilitato):";
$lang["monobook_youarehere_position"]   = "Posizione del pannello 'Tu sei qui' (se abilitato):";
$lang["monobook_cite_author"]           = "Nome autore in 'Cita questo articolo':";
$lang["monobook_loaduserjs"]            = "Carica 'monobook/user/user.js'?";

