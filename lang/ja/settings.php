<?php

/**
 * Japanese language for the Config Manager
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

//discussion pages
$lang["monobook_discuss"]    = "ディスカッションタブを使用する";
$lang["monobook_discuss_ns"] = "使用する場合、ディスカッションのルート名前空間を指定:";

//site notice
$lang["monobook_sitenotice"]          = "サイト案内を使用する";
$lang["monobook_sitenotice_location"] = "使用する場合、サイト案内の名前空間を指定:";

//navigation
$lang["monobook_navigation"]          = "ナビゲーションを使用する";
$lang["monobook_navigation_location"] = "使用する場合、ナビゲーションの名前空間を指定:";

//custom copyright notice
$lang["monobook_copyright"]          = "著作権表示を使用する";
$lang["monobook_copyright_default"]  = "使用する場合、著作権表示の名前空間を指定:";
$lang["monobook_copyright_location"] = "デフォルトを使用しない場合、著作権表示を下記のページに指定する:";

//search form
$lang["monobook_search"] = "検索窓を使用する";

//toolbox
$lang["monobook_toolbox"]               = "ツールボックスを使用する";
$lang["monobook_toolbox_default"]       = "使用する場合、デフォルトのツールボックスを使用する";
$lang["monobook_toolbox_default_print"] = "デフォルトのツールボックスを使う場合、印刷用リンクを表示する。";
$lang["monobook_toolbox_location"]      = "デフォルトを使用しない場合、ツールボックスを下記のページに指定する:";

//donation link/button
$lang["monobook_donate"]          = "寄付のリンク／ボタンを表示する";
$lang["monobook_donate_url"]      = "デフォルトを使用しない場合、下記のURLを指定する。";

//other stuff
$lang["monobook_breadcrumbs_position"]  = "パンくずの表示位置（利用している場合のみ適用）:";
$lang["monobook_youarehere_position"]   = "現在位置の表示位置（利用している場合のみ適用）:";
$lang["monobook_cite_author"]           = "'項目を引用'に表示する作者の名前:";
$lang["monobook_loaduserjs"]            = "'monobook/user/user.js'をロードする";

