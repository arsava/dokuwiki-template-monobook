<?php

/**
 * User defined box configuration of the "monobook" DokuWiki template
 *
 * If you want to add/remove some boxes, have a look at the comments/examples
 * and the DocBlock of {@link _monobook_renderBoxes()}, main.php
 *
 * To change the non-box related config, use the admin webinterface of DokuWiki.
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


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


//note: The boxes will be rendered in the order they were defined. Means:
//      first box will be rendered first, last box will be rendered at last.





//examples: uncomment to see what is happening
/*
$_monobook_boxes["example1"]["headline"] = "Hello World!";
$_monobook_boxes["example1"]["xhtml"] = "DokuWiki with monobook... <em>rules</em>!";
*/


/*
$_monobook_boxes["example2"]["headline"] = "Some links";
$_monobook_boxes["example2"]["xhtml"] =  "<ul>\n"
                                        ."  <li><a href=\"".wl(cleanID(getId()), array("do" => "backlink"))."\" rel=\"nofollow\">".hsc($lang["monobook_toolbxdef_whatlinkshere"])."</a></li>\n" //we might use tpl_actionlink("backlink", "", "", hsc($lang["monobook_toolbxdef_whatlinkshere"]), true), but it would be the only toolbox link where this is possible... therefor I don't use it to be consistent
                                        ."  <li><a href=\"http://www.example.com\">Example link</a></li>\n"
                                        ."  <li><a href=\"".wl(cleanID(getId()), array("rev" => 0, "mddo" => "cite"))."\" rel=\"nofollow\">Cite newest version</a></li>\n"
                                        ."</ul>";
*/


/*
$_monobook_boxes["example3"]["headline"] = "Buttons";
$_monobook_boxes["example3"]["xhtml"] = "<a href=\"http://syn-systems.com/donate/dokuwiki-template-monobook/\" title=\"Donate\" target=\"_blank\"><img src=\"".DOKU_TPL."static/img/button-donate.gif\" width=\"80\" height=\"15\" alt=\"Donate\" border=\"0\" /></a>";
*/


/*
//include the content of another wiki page (you have to create it first, for
//sure. In this example, the page "wiki:your_page_here" is used)
$_monobook_boxes["example4"]["headline"] = "wiki:your_page_here";
$_monobook_boxes["example4"]["xhtml"] = tpl_include_page("wiki:your_page_here", false);
*/

