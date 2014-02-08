<?php

/**
 * Korean language for the "monobook" DokuWiki template
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
 * @author 관인생략
 * @author Myeongjin <aranet100@gmail.com>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//tabs
$lang["monobook_tab_article"] = "문서";
$lang["monobook_tab_discussion"] = "토론";
$lang["monobook_tab_userpage"] = "사용자 문서";
$lang["monobook_tab_specialpage"] = "특수 문서";
$lang["monobook_tab_mytalk"] = "사용자 토론";
$lang["monobook_tab_exportodt"] = "내보내기: ODT";
$lang["monobook_tab_exportpdf"] = "내보내기: PDF";

//headlines for the different bars
$lang["monobook_bar_views"] = "보기";
$lang["monobook_bar_personnaltools"] = "개인 도구";
$lang["monobook_bar_navigation"] = "둘러보기";
$lang["monobook_bar_toolbox"] = "도구모음";
$lang["monobook_qrcodebox"] = "QR 코드";
$lang["monobook_bar_inotherlanguages"] = "다른 언어";
$lang["monobook_bar_search"] = "찾기";

//buttons
$lang["monobook_btn_go"] = "보기";
$lang["monobook_btn_search"] = "찾기";

//default toolbox
$lang["monobook_toolbxdef_whatlinkshere"] = "여기를 가리키는 문서";
$lang["monobook_toolbxdef_upload"] = "파일 올리기";
$lang["monobook_toolbxdef_siteindex"] = "사이트맵";
$lang["monobook_toolbxdef_print"] = "인쇄용 문서";
$lang["monobook_toolboxdef_permanent"] = "고유 링크";
$lang["monobook_toolboxdef_cite"] = "이 문서 인용하기";

//qr code box
$lang["monobook_qrcodebox_qrcode"] = "QR 코드";
$lang["monobook_qrcodebox_genforcurrentpage"] = "현재 문서의 생성된 QR 코드";
$lang["monobook_qrcodebox_urlofcurrentpage"] = "현재 문서의 QR 코드 (쉽게 모바일 접근을 하려면 스캔)";

//cite this article
$lang["monobook_cite_bibdetailsfor"] = "다음 문서의 출처 정보:";
$lang["monobook_cite_pagename"] = "문서 이름";
$lang["monobook_cite_author"] = "저자";
$lang["monobook_cite_publisher"] = "발행처";
$lang["monobook_cite_dateofrev"] = "이 판의 날짜";
$lang["monobook_cite_dateretrieved"] = "확인한 날짜";
$lang["monobook_cite_permurl"] = "고유 URL";
$lang["monobook_cite_pageversionid"] = "문서 판 ID";
$lang["monobook_cite_citationstyles"] = "다음 문서의 인용 양식:";
$lang["monobook_cite_checkstandards"] = "필요에 따라 정확한 구문에 대한 양식 매뉴얼, 표준 가이드 또는 안내자의 지침을 확인하는 것을 기억하세요";
$lang["monobook_cite_latexusepackagehint"] = "LaTeX 패키지 URL(프리앰블의 어딘가에 \usepackage{url})을 사용하면 더 정돈된 형식의 웹 주소를 얻을 수 있습니다. 다음과 같은 방법을 선호합니다";
$lang["monobook_cite_retrieved"] = "확인한 날짜:";
$lang["monobook_cite_from"] = "다음에서 찾아볼 수 있음:";
$lang["monobook_cite_in"] = "발행처:";
$lang["monobook_cite_accessed"] = "접근한 날짜:";
$lang["monobook_cite_cited"] = "인용한 날짜:";
$lang["monobook_cite_lastvisited"] = "마지막으로 방문한 날짜:";
$lang["monobook_cite_availableat"] = "다음에서 찾아볼 수 있음";
$lang["monobook_cite_discussionpages"] = "도쿠위키 토론 문서";
$lang["monobook_cite_markup"] = "문법";
$lang["monobook_cite_result"] = "결과";
$lang["monobook_cite_thisversion"] = "이 판";

//other
$lang["monobook_accessdenied"] = "접근 거부됨";
$lang["monobook_fillplaceholder"] = "이 자리를 채우거나 비활성화하세요";
$lang["monobook_donate"] = "기부";
$lang["monobook_mdtemplatefordw"] = "도쿠위키를 위한 모노북 템플릿";
$lang["monobook_recentchanges"] = "최근 바뀜";

