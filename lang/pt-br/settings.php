<?php

/**
 * Portuguese language for the Config Manager
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
 * @author Sérgio Evandro Motta <sergio@cisne.com.br>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//discussion pages
$lang["monobook_discuss"]    = "Usar tabs de discussão?";
$lang["monobook_discuss_ns"] = "Se sim, usar o seguinte ':namespace:' como raiz para as discussões:";

//site notice
$lang["monobook_sitenotice"]          = "Mostrar 'site wide notice'?";
$lang["monobook_sitenotice_location"] = "Se sim, usar a seguinte página do wiki para 'site wide notice':";

//navigation
$lang["monobook_navigation"]          = "Mostrar navegação?";
$lang["monobook_navigation_location"] = "Se sim, usar a seguinte página do wiki para navegação:";

//custom copyright notice
$lang["monobook_copyright"]          = "Mostrar nota de copyright?";
$lang["monobook_copyright_default"]  = "Se sim, usar a nota de copyright padrão?";
$lang["monobook_copyright_location"] = "Se não for o padrão, use a seguinte página do wiki como nota de copyright:";

//search form
$lang["monobook_search"] = "Mostrar formulário de busca?";

//toolbox
$lang["monobook_toolbox"]               = "Mostrar ferramentas?";
$lang["monobook_toolbox_default"]       = "Se sim, usar ferramentas padrão?";
$lang["monobook_toolbox_default_print"] = "Se as ferramentas padrão forem usadas, mostrar o link 'versão para impressão'?";
$lang["monobook_toolbox_location"]      = "Se não for o padrão, usar a seguinte página do wiki como ferramentas:";

//donation link/button
$lang["monobook_donate"]          = "Mostrar o botão/link de doação?";
$lang["monobook_donate_url"]      = "Se não, usar a seguinte URL para doações:";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "Posição das páginas visitadas (se habilitado):";
$lang["monobook_youarehere_position"]   = "Posição do 'Você está aqui' (se habilitado):";
$lang["monobook_cite_author"]           = "Nome do autor em 'Cite este artigo':";
$lang["monobook_loaduserjs"]            = "Carregar 'monobook/user/user.js'?";

