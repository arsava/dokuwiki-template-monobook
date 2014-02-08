<?php

/**
 * Spanish language for the Config Manager
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
 * @author Jacobo María Pantoja Checa <jacobopantoja@yahoo.es>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//discussion pages
$lang["monobook_discuss"]    = "¿Usar pestañas y páginas de discusión?";
$lang["monobook_discuss_ns"] = "En caso afirmativo, usar el siguiente ':namespace:' como raíz de las mismas:";

//site notice
$lang["monobook_sitenotice"]          = "¿Mostrar noticias del sitio?";
$lang["monobook_sitenotice_location"] = "En caso afirmativo, usar la siguiente wiki-página para las noticias:";

//navigation
$lang["monobook_navigation"]          = "¿Mostrar navegación?";
$lang["monobook_navigation_location"] = "En caso afirmativo, usar la siguiente wiki-página para la navegación:";

//custom copyright notice
$lang["monobook_copyright"]          = "¿Mostrar aviso de copyright?";
$lang["monobook_copyright_default"]  = "En caso afirmativo, ¿usar el aviso por defecto?";
$lang["monobook_copyright_location"] = "En caso de no mostrar el aviso por defecto, usar la siguiente wiki-página como aviso:";

//search form
$lang["monobook_search"] = "¿Mostrar la barra de búsqueda?";

//toolbox
$lang["monobook_toolbox"]               = "¿Mostrar herramientas?";
$lang["monobook_toolbox_default"]       = "En caso afirmativo, ¿usar las herramientas por defecto?";
$lang["monobook_toolbox_default_print"] = "Si se usan las herramientas por defecto, ¿mostrar el enlace 'Versión imprimible'?";
$lang["monobook_toolbox_location"]      = "Si no se usan las herramientas por defecto, usar la siguiente wiki-página para las herramientas";

//donation link/button
$lang["monobook_donate"]          = "¿Mostrar el enlace/botón 'Donar'?";
$lang["monobook_donate_url"]      = "En caso contrario, usar la siguiente URL:";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "&Position of breadcrumb navigation (if enabled):";
$lang["monobook_youarehere_position"]   = "Posición de 'Estás aquí' (si está habilitado)";
$lang["monobook_cite_author"]           = "Nombre de autor en 'Citar este artículo':";
$lang["monobook_loaduserjs"]            = "¿Cargar 'monobook/user/user.js'?";

