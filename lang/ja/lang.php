<?php

/**
 * Japanese language for the "monobook" DokuWiki template
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
 * @author Yoshitaka Kunikane <y.kunikane@gmail.com>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs
$lang["monobook_tab_article"] = "本文";
$lang["monobook_tab_discussion"] = "議論";
$lang["monobook_tab_userpage"] = "ユーザー";
$lang["monobook_tab_specialpage"] = "特別";
$lang["monobook_tab_mytalk"] = "トーク";
$lang["monobook_tab_exportodt"] = "書き出し: ODT";
$lang["monobook_tab_exportpdf"] = "書き出し: PDF";

//headlines for the different bars
$lang["monobook_bar_views"] = "表示";
$lang["monobook_bar_personnaltools"] = "個人ツール";
$lang["monobook_bar_navigation"] = "ナビゲーション";
$lang["monobook_bar_toolbox"] = "ツールボックス";
$lang["monobook_bar_inotherlanguages"] = "言語選択";
$lang["monobook_bar_search"] = "検索";

//buttons
$lang["monobook_btn_go"] = "Go";
$lang["monobook_btn_search"] = "検索";

//default toolbox
$lang["monobook_toolbxdef_whatlinkshere"] = "被リンク";
$lang["monobook_toolbxdef_upload"] = "アップロード";
$lang["monobook_toolbxdef_siteindex"] = "索引";
$lang["monobook_toolbxdef_print"] = "印刷用";
$lang["monobook_toolboxdef_permanent"] = "固定リンク";
$lang["monobook_toolboxdef_cite"] = "項目の引用";

//cite this article
$lang["monobook_cite_bibdetailsfor"] = "Bibliographic details for";
$lang["monobook_cite_pagename"] = "Page name";
$lang["monobook_cite_author"] = "Author";
$lang["monobook_cite_publisher"] = "Publisher";
$lang["monobook_cite_dateofrev"] = "Date of this revision";
$lang["monobook_cite_dateretrieved"] = "Date retrieved";
$lang["monobook_cite_permurl"] = "Permanent URL";
$lang["monobook_cite_pageversionid"] = "Page Version ID";
$lang["monobook_cite_citationstyles"] = "Citation styles for";
$lang["monobook_cite_checkstandards"] = "Please remember to check with your standards guide or professor's guidelines for the exact syntax to suit your needs.";
$lang["monobook_cite_latexusepackagehint"] = "When using the LaTeX package 'url' (hint: search for '\usepackage{url}' somewhere in the preamble), which tends to give much more nicely formatted web addresses, the following may be preferred";
$lang["monobook_cite_retrieved"] = "Retrieved";
$lang["monobook_cite_from"] = "from";
$lang["monobook_cite_accessed"] = "Accessed";
$lang["monobook_cite_cited"] = "Cited";
$lang["monobook_cite_lastvisited"] = "Last visited";
$lang["monobook_cite_availableat"] = "Available at";

//other
$lang["monobook_accessdenied"] = "アクセスは拒否されました";
$lang["monobook_fillplaceholder"] = "Please fill this placeholder";
$lang["monobook_donate"] = "寄付";
$lang["monobook_mdtemplatefordw"] = "monobook template for DokuWiki";
$lang["monobook_recentchanges"] = "最近の変更";

