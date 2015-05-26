<?php

/**
 * Main file of the "monobook" template for DokuWiki
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @link https://www.dokuwiki.org/template:monobook
 * @link https://www.dokuwiki.org/devel:templates
 * @link https://www.dokuwiki.org/devel:coding_style
 * @link https://www.dokuwiki.org/devel:environment
 * @link https://www.dokuwiki.org/devel:action_modes
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


/**
 * Stores the template wide action
 *
 * Different DokuWiki actions requiring some template logic. Therefore the
 * template has to know, what we are doing right now - and that is what this
 * var is for.
 *
 * Please have a look at the "detail.php" file in the same folder, it is also
 * influencing the var's value.
 *
 * @var string
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 */
$monobook_action = "article";
//note: I used $_REQUEST before (cause DokuWiki controls and fills it. Normally,
//      using $_REQUEST is a possible security threat. For details, see
//      <http://www.suspekt.org/2008/10/01/php-53-and-delayed-cross-site-request-forgerieshijacking/>
//      and <https://forum.dokuwiki.org/post/16524>), but it did not work as
//      expected by me (maybe it is a reference and setting $monobook_action
//      also changed the contents of $_REQUEST?!). That is why I switched back,
//      checking $_GET and $_POST like I did it before.
if (!empty($_GET["mddo"])){
    $monobook_action = (string)$_GET["mddo"];
}elseif (!empty($_POST["mddo"])){
    $monobook_action = (string)$_POST["mddo"];
}
if (!empty($monobook_action) &&
    $monobook_action !== "article" &&
    $monobook_action !== "print" &&
    $monobook_action !== "detail" &&
    $monobook_action !== "cite"){
    //ignore unknown values
    $monobook_action = "article";
}


/**
 * Stores the template wide context
 *
 * This template offers discussion pages via common articles, which should be
 * marked as "special". DokuWiki does not know any "special" articles, therefore
 * we have to take care about detecting if the current page is a discussion
 * page or not.
 *
 * @var string
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 */
$monobook_context = "article";
if (preg_match("/^".tpl_getConf("monobook_discuss_ns")."?$|^".tpl_getConf("monobook_discuss_ns").".*?$/i", ":".getNS(getID()))){
    $monobook_context = "discuss";
}


/**
 * Stores the name the current client used to login
 *
 * @var string
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 */
$loginname = "";
if (!empty($conf["useacl"])){
    if (isset($_SERVER["REMOTE_USER"]) && //no empty() but isset(): "0" may be a valid username...
        $_SERVER["REMOTE_USER"] !== ""){
        $loginname = $_SERVER["REMOTE_USER"]; //$INFO["client"] would not work here (-> e.g. if
                                              //current IP differs from the one used to login)
    }
}


//get needed language array
include DOKU_TPLINC."lang/en/lang.php";
//overwrite English language values with available translations
if (!empty($conf["lang"]) &&
    $conf["lang"] !== "en" &&
    file_exists(DOKU_TPLINC."/lang/".$conf["lang"]."/lang.php")){
    //get language file (partially translated language files are no problem
    //cause non translated stuff is still existing as English array value)
    include DOKU_TPLINC."/lang/".$conf["lang"]."/lang.php";
}


//detect revision
$rev = (int)$INFO["rev"]; //$INFO comes from the DokuWiki core
if ($rev < 1){
    $rev = (int)$INFO["lastmod"];
}


//get tab config
include DOKU_TPLINC."/conf/tabs.php";  //default
if (file_exists(DOKU_TPLINC."/user/tabs.php")){
    include DOKU_TPLINC."/user/tabs.php"; //user defined
}


//get boxes config
include DOKU_TPLINC."/conf/boxes.php"; //default
if (file_exists(DOKU_TPLINC."/user/boxes.php")){
    include DOKU_TPLINC."/user/boxes.php"; //user defined
}


//get button config
include DOKU_TPLINC."/conf/buttons.php"; //default
if (file_exists(DOKU_TPLINC."/user/buttons.php")){
    include DOKU_TPLINC."/user/buttons.php"; //user defined
}


/**
 * Helper to render the tabs (like a dynamic XHTML snippet)
 *
 *
 * NOTE: This function is heavily inspired by "writeMBPortlet(), context.php" of
 *       the "Monobook for Dokuwiki" template by Terence J. Grant.
 *
 * @param array The tab data to render within the snippet. Each element is
 *        represented by a subarray:
 *        $array = array("tab1" => array("text"     => "hello world!",
 *                                       "href"     => "http://www.example.com"
 *                                       "nofollow" => true),
 *                       "tab2" => array("text"  => "I did it again",
 *                                       "href"  => DOKU_BASE."doku.php?id=foobar",
 *                                       "class" => "foobar-css"),
 *                       "tab3" => array("text"  => "I did it again and again",
 *                                       "href"  => wl("start", false, false, "&"),
 *                                       "class" => "foobar-css"),
 *                       "tab4" => array("text"      => "Home",
 *                                       "wiki"      => ":start"
 *                                       "accesskey" => "H"));
 *        Available keys within the subarrays:
 *        - "text" (mandatory)
 *          The text/label of the element.
 *        - "href" (optional)
 *          URL the element should point to (as link). Please submit raw,
 *          unencoded URLs, the encoding will be done by this function for
 *          security reasons. If the URL is not relative
 *          (= starts with http(s)://), the URL will be treated as external
 *          (=a special style will be used if "class" is not set).
 *        - "wiki" (optional)
 *          ID of a WikiPage to link (like ":start" or ":wiki:foobar").
 *        - "class" (optional)
 *          Name of an additional CSS class to use for the element content.
 *          Works only in combination with "text" or "href", NOT with "wiki"
 *          (will be ignored in this case).
 *        - "nofollow" (optional)
 *          If set to TRUE, rel="nofollow" will be added to the link if "href"
 *          is set (otherwise this flag will do nothing).
 *        - "accesskey" (optional)
 *          accesskey="<value>" will be added to the link if "href" is set
 *          (otherwise this option will do nothing).
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @return bool
 * @see _monobook_renderButtons()
 * @see _monobook_renderBoxes()
 * @link http://www.wikipedia.org/wiki/Nofollow
 * @link http://de.selfhtml.org/html/verweise/tastatur.htm#kuerzel
 * @link https://www.dokuwiki.org/devel:environment
 * @link https://www.dokuwiki.org/devel:coding_style
 */
function _monobook_renderTabs($arr)
{
    //is there something useful?
    if (empty($arr) ||
        !is_array($arr)){
        return false; //nope, break operation
    }

    //array to store the created tabs into
    $elements = array();

    //handle the tab data
    foreach($arr as $li_id => $element){
        //basic check
        if (empty($element) ||
            !is_array($element) ||
            !isset($element["text"])){
            continue; //ignore invalid stuff and go on
        }
        $li_created = true; //flag to control if we created any list element
        $interim = "";
        //do we have an external link?
        if (!empty($element["href"])){
            //add URL
            $interim = "<a href=\"".hsc($element["href"])."\""; //@TODO: real URL encoding
            //add rel="nofollow" attribute to the link?
            if (!empty($element["nofollow"])){
                $interim .= " rel=\"nofollow\"";
            }
            //add special css class?
            if (!empty($element["class"])){
                $interim .= " class=\"".hsc($element["class"])."\"";
            } elseif (substr($element["href"], 0, 4) === "http" ||
                      substr($element["href"], 0, 3) === "ftp"){
                $interim .= " class=\"urlextern\"";
            }
            //add access key?
            if (!empty($element["accesskey"])){
                $interim .= " accesskey=\"".hsc($element["accesskey"])."\" title=\"[ALT+".hsc(strtoupper($element["accesskey"]))."]\"";
            }
            $interim .= ">".hsc($element["text"])."</a>";
        //internal wiki link
        }else if (!empty($element["wiki"])){
            //add special css class?
            if (!empty($element["class"])){
                $interim = "<span class=\"".hsc($element["class"])."\">".html_wikilink($element["wiki"], hsc($element["text"]))."</span>";
            }else{
                $interim = html_wikilink($element["wiki"], hsc($element["text"]));
            }
        /* Following works, but I think it is too heavy... //use a wiki page as content
        } elseif ($element["wiki_include"]){

            //we have to show a wiki page. get the rendered content of the
            //defined wiki article to use as content.
            $interim = tpl_include_page($element["wiki_include"], false);
            if ($interim === "" ||
                $interim === false){
                //show creation/edit link if the defined page got no content
                $interim = "[&#160;".html_wikilink($element["wiki_include"], hsc($lang["monobook_fillplaceholder"]." (".hsc($element["wiki_include"]).")"))."&#160;]<br />";
            }*/
        //text only
        }else{
            $interim = "<span";
            //add special css class?
            if (!empty($element["class"])){
                $interim .= " class=\"".hsc($element["class"])."\"";
            }else{
                $interim .= " style=\"color:#ccc;\"";
            }
            $interim .= ">&#160;".hsc($element["text"])."&#160;</span>";
        }
        //store it
        $elements[] = "        <li id=\"".hsc($li_id)."\">".$interim."</li>\n";
    }

    //show everything created
    if (!empty($elements)){
        echo  "\n"
             ."    <div id=\"p-cactions\" class=\"portlet\">\n" //don't touch the id, it is needed as css selector
             ."      <ul>\n";
        foreach ($elements as $element){
            echo $element;
        }
        echo  "      </ul>\n"
             ."    </div>\n";
    }
    return true;
}


/**
 * Helper to render the boxes (like a dynamic XHTML snippet)
 *
 *
 * NOTE: This function is heavily inspired by "writeMBPortlet(), context.php" of
 *       the "Monobook for Dokuwiki" template by Terence J. Grant.
 *
 * @param array The box data to render within the snippet. Each box is
 *        represented by a subarray:
 *        $array = array("box-id1" => array("headline" => "hello world!",
 *                                          "xhtml"    => "I am <i>here</i>."));
 *        Available keys within the subarrays:
 *        - "xhtml" (mandatory)
 *          The content of the Box you want to show as XHTML. Attention: YOU
 *          HAVE TO TAKE CARE ABOUT FILTER EVENTUALLY USED INPUT/SECURITY. Be
 *          aware of XSS and stuff.
 *        - "headline" (optional)
 *          Headline to show above the box. Leave empty/do not set for none.
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @return bool
 * @see _monobook_renderButtons()
 * @see _monobook_renderTabs()
 * @link http://www.wikipedia.org/wiki/Nofollow
 * @link http://www.wikipedia.org/wiki/Cross-site_scripting
 * @link https://www.dokuwiki.org/devel:coding_style
 */
function _monobook_renderBoxes($arr)
{
    //is there something useful?
    if (empty($arr) ||
        !is_array($arr)){
        return false; //nope, break operation
    }

    //array to store the created boxes into
    $boxes          = array();
    $search_handled = false;

    //handle the box data
    foreach($arr as $div_id => $contents){
        //basic check
        if (empty($contents) ||
            !is_array($contents) ||
            !isset($contents["xhtml"])){
            continue; //ignore invalid stuff and go on
        }
        $interim  = "    <div class=\"portlet\" id=\"".hsc($div_id)."\">\n";
        if (isset($contents["headline"])
            && $contents["headline"] !== ""){
            //hack for search box
            if ($search_handled === true ||
                $div_id !== "p-search") {
                $interim .= "      <h5>".hsc($contents["headline"])."</h5>\n";
            } else {
                $interim .= "      <h5><label for=\"qsearch__in\">".hsc($contents["headline"])."</label></h5>\n";
            }
        }
        $interim .= "      <div class=\"pBody\">\n"
                   ."        <div class=\"dokuwiki\">\n" //dokuwiki CSS class needed cause we might have to show rendered page content
                   .$contents["xhtml"]."\n"
                   ."        </div>\n"
                   ."      </div>\n"
                   ."    </div>\n";
        //hack for search box
        if ($search_handled === false &&
            $div_id === "p-search") {
            $interim .= "    <div id=\"qsearch__out\" class=\"ajax_qsearch JSpopup\"></div>\n";
            //set flag
            $search_handled = true;
        }
        //store it
        $boxes[] = $interim;
    }
    //show everything created
    if (!empty($boxes)){
        echo  "\n";
        foreach ($boxes as $box){
            echo $box;
        }
        echo  "\n";
    }

    return true;
}


/**
 * Helper to render the footer buttons (like a dynamic XHTML snippet)
 *
 * @param array The button data to render within the snippet. Each element is
 *        represented by a subarray:
 *        $array = array("btn1" => array("img"      => DOKU_TPL."static/img/button-monobook.png",
 *                                       "href"     => "https://andreashaerter.com/",
 *                                       "width"    => 80,
 *                                       "height"   => 15,
 *                                       "title"    => "Andreas Haerters's website",
 *                                       "nofollow" => true),
 *                       "btn2" => array("img"   => DOKU_TPL."user/mybutton1.png",
 *                                       "href"  => wl("start", false, false, "&")),
 *                       "btn3" => array("img"   => DOKU_TPL."user/mybutton2.png",
 *                                       "href"  => "http://www.example.com");
 *        Available keys within the subarrays:
 *        - "img" (mandatory)
 *          The relative or full path of an image/button to show. Users may
 *          place own images within the /user/ dir of this template.
 *        - "href" (mandatory)
 *          URL the element should point to (as link). Please submit raw,
 *          unencoded URLs, the encoding will be done by this function for
 *          security reasons.
 *        - "width" (optional)
 *          width="<value>" will be added to the image tag if both "width" and
 *          "height" are set (otherwise, this will be ignored).
 *        - "height" (optional)
 *          height="<value>" will be added to the image tag if both "height" and
 *          "width" are set (otherwise, this will be ignored).
 *        - "nofollow" (optional)
 *          If set to TRUE, rel="nofollow" will be added to the link.
 *        - "title" (optional)
 *          title="<value>"  will be added to the link and image if "title"
 *          is set + alt="<value>".
 * @author ARSAVA <dokuwiki@dev.arsava.com>
 * @return bool
 * @see _monobook_renderButtons()
 * @see _monobook_renderBoxes()
 * @link http://www.wikipedia.org/wiki/Nofollow
 * @link https://www.dokuwiki.org/devel:coding_style
 */
function _monobook_renderButtons($arr)
{
    //array to store the created buttons into
    $elements = array();

    //handle the button data
    foreach($arr as $li_id => $element){
        //basic check
        if (empty($element) ||
            !is_array($element) ||
            !isset($element["img"]) ||
            !isset($element["href"])){
            continue; //ignore invalid stuff and go on
        }
        $interim = "";

        //add URL
        $interim = "<a href=\"".hsc($element["href"])."\""; //@TODO: real URL encoding
        //add rel="nofollow" attribute to the link?
        if (!empty($element["nofollow"])){
            $interim .= " rel=\"nofollow\"";
        }
        //add title attribute to the link?
        if (!empty($element["title"])){
            $interim .= " title=\"".hsc($element["title"])."\"";
        }
        $interim .= " target=\"_blank\"><img src=\"".hsc($element["img"])."\"";
        //add width and height attribute to the image?
        if (!empty($element["width"]) &&
            !empty($element["height"])){
            $interim .= " width=\"".(int)$element["width"]."\" height=\"".(int)$element["height"]."\"";
        }
        //add title and alt attribute to the image?
        if (!empty($element["title"])){
            $interim .= " title=\"".hsc($element["title"])."\" alt=\"".hsc($element["title"])."\"";
        } else {
            $interim .= " alt=\"\""; //alt is a mandatory attribute for images
        }
        $interim .= " border=\"0\" /></a>";

        //store it
        $elements[] = "      ".$interim."\n";
    }

    //show everything created
    if (!empty($elements)){
        echo  "\n";
        foreach ($elements as $element){
            echo $element;
        }
    }
    return true;
}

//workaround for the "jumping textarea" IE bug. CSS only fix not possible cause
//some DokuWiki JavaScript is triggering this bug, too. See the following for
//info:
//- <http://blog.andreas-haerter.com/2010/05/28/fix-msie-8-auto-scroll-textarea-css-width-percentage-bug>
//- <http://msdn.microsoft.com/library/cc817574.aspx>
if ($ACT === "edit" &&
    !headers_sent()){
    header("X-UA-Compatible: IE=EmulateIE7");
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo hsc($conf["lang"]); ?>" lang="<?php echo hsc($conf["lang"]); ?>" dir="<?php echo hsc($lang["direction"]); ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php tpl_pagetitle(); echo " - ".hsc($conf["title"]); ?></title>
<?php
//show meta-tags
tpl_metaheaders();
echo "<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />";

//include default or userdefined favicon
//
//note: since 2011-04-22 "Rincewind RC1", there is a core function named
//      "tpl_getFavicon()". But its functionality is not really fitting the
//      behaviour of this template, therefore I don't use it here.
if (file_exists(DOKU_TPLINC."user/favicon.ico")){
    //user defined - you might find http://tools.dynamicdrive.com/favicon/
    //useful to generate one
    echo "\n<link rel=\"shortcut icon\" href=\"".DOKU_TPL."user/favicon.ico\" />\n";
}elseif (file_exists(DOKU_TPLINC."user/favicon.png")){
    //note: I do NOT recommend PNG for favicons (cause it is not supported by
    //all browsers), but some users requested this feature.
    echo "\n<link rel=\"shortcut icon\" href=\"".DOKU_TPL."user/favicon.png\" />\n";
}else{
    //default
    echo "\n<link rel=\"shortcut icon\" href=\"".DOKU_TPL."static/3rd/dokuwiki/favicon.ico\" />\n";
}

//include default or userdefined Apple Touch Icon (see <http://j.mp/sx3NMT> for
//details)
if (file_exists(DOKU_TPLINC."user/apple-touch-icon.png")){
    echo "<link rel=\"apple-touch-icon\" href=\"".DOKU_TPL."user/apple-touch-icon.png\" />\n";
}else{
    //default
    echo "<link rel=\"apple-touch-icon\" href=\"".DOKU_TPL."static/3rd/dokuwiki/apple-touch-icon.png\" />\n";
}

//load userdefined js?
if (tpl_getConf("monobook_loaduserjs") && file_exists(DOKU_TPLINC."user/user.js")){
    echo "<script type=\"text/javascript\" charset=\"utf-8\" src=\"".DOKU_TPL."user/user.js\"></script>\n";
}

//show printable version?
if ($monobook_action === "print"){
  //note: this is just a workaround for people searching for a print version.
  //      don't forget to update the styles.ini, this is the really important
  //      thing! BTW: good text about this: http://is.gd/5MyG5
  echo  "<link rel=\"stylesheet\" media=\"all\" type=\"text/css\" href=\"".DOKU_TPL."static/css/print.css\" />\n"
       ."<link rel=\"stylesheet\" media=\"all\" type=\"text/css\" href=\"".DOKU_TPL."static/3rd/wikipedia/commonPrint.css\" />\n";
  if (file_exists(DOKU_TPL."user/print.css")){
      echo "<link rel=\"stylesheet\" media=\"all\" type=\"text/css\" href=\"".DOKU_TPL."user/print.css\" />\n";
  }
}

//load language specific css hacks?
if (file_exists(DOKU_TPLINC."lang/".$conf["lang"]."/style.css")){
  $interim = trim(file_get_contents(DOKU_TPLINC."lang/".$conf["lang"]."/style.css"));
  if (!empty($interim)){
      echo "<style type=\"text/css\" media=\"all\">\n".hsc($interim)."\n</style>\n";
  }
}
?>
<!--[if lte IE 8]><link rel="stylesheet" media="all" type="text/css" href="<?php echo DOKU_TPL; ?>static/css/screen_iehacks.css" /><![endif]-->
<!--[if lt IE 5.5000]><link rel="stylesheet" media="all" type="text/css" href="<?php echo DOKU_TPL; ?>static/3rd/monobook/IE50Fixes.css" /><![endif]-->
<!--[if IE 5.5000]><link rel="stylesheet" media="all" type="text/css" href="<?php echo DOKU_TPL; ?>static/3rd/monobook/IE55Fixes.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" media="all" type="text/css" href="<?php echo DOKU_TPL; ?>static/3rd/monobook/IE60Fixes.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" media="all" type="text/css" href="<?php echo DOKU_TPL; ?>static/3rd/monobook/IE70Fixes.css" /><![endif]-->
<!--[if lt IE 7]><script type="text/javascript" charset="utf-8" src="<?php echo DOKU_TPL; ?>static/3rd/wikipedia/IEFixes.js"></script><meta http-equiv="imagetoolbar" content="no" /><![endif]-->
</head>
<body class="<?php //different styles/backgrounds for different page types
             switch (true){
                 //special: tech
                 case ($monobook_action === "detail"):
                 case ($monobook_action === "cite"):
                 case ($ACT === "media"): //var comes from DokuWiki
                 case ($ACT === "search"): //var comes from DokuWiki
                   echo "mediawiki ns-2 ltr";
                   break;
                 //special: other
                 case ($ACT === "edit"): //var comes from DokuWiki
                 case ($ACT === "draft"): //var comes from DokuWiki
                 case ($ACT === "revisions"): //var comes from DokuWiki
                 case ($monobook_context === "discuss"):
                 case (preg_match("/^wiki$|^wiki:.*?$/i", getNS(getID()))):
                   echo "mediawiki ns-1 ltr";
                   break;
                 //"normal" content
                 case ($monobook_action === "print"):
                 default:
                   echo "mediawiki ns-0 ltr";
                   break;
             }
             ?>">
<div id="globalWrapper">

  <div id="column-content">
    <div id="content">
      <a name="top" id="top"></a>
      <a name="dokuwiki__top" id="dokuwiki__top"></a>
      <div id="bodyContent">
        <div class="dokuwiki">
          <!-- start main content area -->
          <?php
          //show messages (if there are any)
          html_msgarea();
          //show site notice
          if (tpl_getConf("monobook_sitenotice")){
              //detect wiki page to load as content
              if (!empty($transplugin) &&  //var comes from conf/boxes.php
                  is_object($transplugin) &&
                  tpl_getConf("monobook_sitenotice_translate")){
                  //translated site notice?
                  $transplugin_langcur = $transplugin->hlp->getLangPart(cleanID(getId())); //current language part
                  $transplugin_langs   = explode(" ", trim($transplugin->getConf("translations"))); //available languages
                  if (empty($transplugin_langs) ||
                      empty($transplugin_langcur) ||
                      !is_array($transplugin_langs) ||
                      !in_array($transplugin_langcur, $transplugin_langs)) {
                      //current page is no translation or something is wrong, load default site notice
                      $sitenotice_location = tpl_getConf("monobook_sitenotice_location");
                  } else {
                      //load language specific site notice
                      $sitenotice_location = tpl_getConf("monobook_sitenotice_location")."_".$transplugin_langcur;
                  }
              }else{
                  //default site notice, no translation
                  $sitenotice_location = tpl_getConf("monobook_sitenotice_location");
              }

              //we have to show a custom site notice
              if (empty($conf["useacl"]) ||
                  auth_quickaclcheck(cleanID($sitenotice_location)) >= AUTH_READ){ //current user got access?
                  echo "\n          <div id=\"siteNotice\" class=\"noprint\">\n";
                  //get the rendered content of the defined wiki article to use as
                  //custom site notice.
                  $interim = tpl_include_page($sitenotice_location, false);
                  if ($interim === "" ||
                      $interim === false){
                      //show creation/edit link if the defined page got no content
                      echo "[&#160;";
                      tpl_pagelink($sitenotice_location, hsc($lang["monobook_fillplaceholder"]." (".hsc($sitenotice_location).")"));
                      echo "&#160;]<br />";
                  }else{
                      //show the rendered page content
                      echo $interim;
                  }
                  echo "\n          </div>\n";
              }
          }
          //show breadcrumps if enabled and positioned on top
          if ($conf["breadcrumbs"] == true &&
              $ACT !== "media" && //var comes from DokuWiki
              (empty($conf["useacl"]) || //are there any users?
               $loginname !== "" || //user is logged in?
               !tpl_getConf("monobook_closedwiki")) &&
              tpl_getConf("monobook_breadcrumbs_position") === "top"){
              echo "\n          <div class=\"catlinks noprint\"><p>\n            ";
              tpl_breadcrumbs();
              echo "\n          </p></div>\n";
          }
          //show hierarchical breadcrumps if enabled and positioned on top
          if ($conf["youarehere"] == true &&
              $ACT !== "media" && //var comes from DokuWiki
              (empty($conf["useacl"]) || //are there any users?
               $loginname !== "" || //user is logged in?
               !tpl_getConf("monobook_closedwiki")) &&
              tpl_getConf("monobook_youarehere_position") === "top"){
              echo "\n          <div class=\"catlinks noprint\"><p>\n            ";
              tpl_youarehere();
              echo "\n          </p></div>\n";
          }
          ?>

          <!-- start rendered wiki content -->
          <?php
          //flush the buffer for faster page rendering, heaviest content follows
          if (function_exists("tpl_flush")) {
              tpl_flush(); //exists since 2010-11-07 "Anteater"...
          } else {
              flush(); //...but I won't loose compatibility to 2009-12-25 "Lemming" right now.
          }
          //decide which type of pagecontent we have to show
          switch ($monobook_action){
              //"image details"
              case "detail":
                  include DOKU_TPLINC."inc_detail.php";
                  break;
              //"cite this article"
              case "cite":
                  include DOKU_TPLINC."inc_cite.php";
                  break;
              //show "normal" content
              default:
                  tpl_content(((tpl_getConf("monobook_toc_position") === "article") ? true : false));
                  break;
          }
          ?>
          <!-- end rendered wiki content -->

          <br />
          <?php
          //show breadcrumps if enabled and positioned on bottom
          if ($conf["breadcrumbs"] == true &&
              $ACT !== "media" && //var comes from DokuWiki
              (empty($conf["useacl"]) || //are there any users?
               $loginname !== "" || //user is logged in?
               !tpl_getConf("monobook_closedwiki")) &&
              tpl_getConf("monobook_breadcrumbs_position") === "bottom"){
              echo "\n          <div class=\"catlinks noprint\"><p>\n            ";
              tpl_breadcrumbs();
              echo "\n          </p></div>\n";
          }
          //show hierarchical breadcrumps if enabled and positioned on bottom
          if ($conf["youarehere"] == true &&
              $ACT !== "media" && //var comes from DokuWiki
              (empty($conf["useacl"]) || //are there any users?
               $loginname !== "" || //user is logged in?
               !tpl_getConf("monobook_closedwiki")) &&
              tpl_getConf("monobook_youarehere_position") === "bottom"){
              echo "\n          <div class=\"catlinks noprint\"><p>\n            ";
              tpl_youarehere();
              echo "\n          </p></div>\n";
          }
          ?>

          <!-- end main content area -->
          <div class="visualClear"></div>
        </div>
      </div>
    </div>
  </div>

  <div id="column-one" class="noprint">
    <div class="portlet" id="p-logo">
      <?php
      //include default or userdefined logo
      echo "<a href=\"".wl()."\" ";
      if (file_exists(DOKU_TPLINC."user/logo.png")){
          //user defined PNG
          echo "style=\"background-image:url(".DOKU_TPL."user/logo.png);\"";
      }elseif (file_exists(DOKU_TPLINC."user/logo.gif")){
          //user defined GIF
          echo "style=\"background-image:url(".DOKU_TPL."user/logo.gif);\"";
      }elseif (file_exists(DOKU_TPLINC."user/logo.jpg")){
          //user defined JPG
          echo "style=\"background-image:url(".DOKU_TPL."user/logo.jpg);\"";
      }else{
          //default
          echo "style=\"background-image:url(".DOKU_TPL."static/3rd/dokuwiki/logo.png);\"";
      }
      echo " accesskey=\"h\" title=\"[ALT+H]\"></a>\n";
      ?>
    </div>
    <?php
    //show tabs, see monobook/user/tabs.php to configure them
    if (!empty($_monobook_tabs) &&
         is_array($_monobook_tabs)){
        _monobook_renderTabs($_monobook_tabs);
    }

    //show personal tools
    if (!empty($conf["useacl"])){ //...makes only sense if there are users
        echo  "\n"
             ."    <div id=\"p-personal\" class=\"portlet\">\n"
             ."      <div class=\"pBody\">\n"
             ."        <ul>\n";
        //login?
        if ($loginname === ""){
            echo  "          <li id=\"pt-login\"><a href=\"".wl(cleanID(getId()), array("do" => "login"))."\" rel=\"nofollow\">".hsc($lang["btn_login"])."</a></li>\n"; //language comes from DokuWiki core
        }else{
            //username and userpage
            echo "          <li id=\"pt-userpage\">".(tpl_getConf("monobook_userpage")
                                                      ? html_wikilink(tpl_getConf("monobook_userpage_ns").$loginname, hsc($loginname))
                                                      : hsc($loginname))."</li>";
            //admin
            if (!empty($INFO["isadmin"]) ||
                !empty($INFO["ismanager"])){
                echo  "          <li id=\"pt-admin\"><a href=\"".wl(cleanID(getId()), array("do" => "admin"))."\" rel=\"nofollow\">".hsc($lang["btn_admin"])."</a></li>\n"; //language comes from DokuWiki core
            }
            //personal discussion
            if (tpl_getConf("monobook_discuss") &&
                tpl_getConf("monobook_userpage")){
                echo "          <li id=\"pt-mytalk\">".html_wikilink(tpl_getConf("monobook_discuss_ns").ltrim(tpl_getConf("monobook_userpage_ns"), ":").$loginname, hsc($lang["monobook_tab_mytalk"]))."</li>";
            }
            //profile
            echo  "          <li id=\"pt-preferences\"><a href=\"".wl(cleanID(getId()), array("do" => "profile"))."\" rel=\"nofollow\">".hsc($lang["btn_profile"])."</a></li>\n"; //language comes from DokuWiki core
            //logout
            echo  "          <li id=\"pt-logout\"><a href=\"".wl(cleanID(getId()), array("do" => "logout"))."\" rel=\"nofollow\">".hsc($lang["btn_logout"])."</a></li>\n"; //language comes from DokuWiki core
        }
        echo  "        </ul>\n"
             ."      </div>\n"
             ."    </div>\n";
    }

    //show boxes, see monobook/user/boxes.php to configure them
    if (!empty($_monobook_boxes) &&
        is_array($_monobook_boxes)){
        _monobook_renderBoxes($_monobook_boxes);
    }
    ?>
  </div> <!-- end of the left (by default at least) column -->

  <div class="visualClear"></div>

  <div id="footer" class="noprint">
    <div id="footer-buttons">
    <?php
    //show buttons, see monobook/user/buttons.php to configure them
    if (!empty($_monobook_btns) &&
        is_array($_monobook_btns)){
        _monobook_renderButtons($_monobook_btns);
    }
    ?>
    </div>
    <ul id="f-list">
      <li id="lastmod">
        <?php tpl_pageinfo()?><br />
      </li>
      <?php
      //copyright notice
      if (tpl_getConf("monobook_copyright")){
          //show dokuwiki's default notice?
          if (tpl_getConf("monobook_copyright_default")){
              echo "<li id=\"copyright\">\n        <div class=\"dokuwiki\">";
              tpl_license(false);
              echo "</div>\n      </li>\n";
          //show custom notice
          }else{
              //detect wiki page to load as content
              if (!empty($transplugin) &&  //var comes from conf/boxes.php
                  is_object($transplugin) &&
                  tpl_getConf("monobook_copyright_translate")){
                  //translated copyright notice?
                  $transplugin_langcur = $transplugin->hlp->getLangPart(cleanID(getId())); //current language part
                  $transplugin_langs   = explode(" ", trim($transplugin->getConf("translations"))); //available languages
                  if (empty($transplugin_langs) ||
                      empty($transplugin_langcur) ||
                      !is_array($transplugin_langs) ||
                      !in_array($transplugin_langcur, $transplugin_langs)) {
                      //current page is no translation or something is wrong, load default copyright notice
                      $copyright_location = tpl_getConf("monobook_copyright_location");
                  } else {
                      //load language specific copyright notice
                      $copyright_location = tpl_getConf("monobook_copyright_location")."_".$transplugin_langcur;
                  }
              }else{
                  //default copyright notice, no translation
                  $copyright_location = tpl_getConf("monobook_copyright_location");
              }

              if (empty($conf["useacl"]) ||
                  auth_quickaclcheck(cleanID($copyright_location)) >= AUTH_READ){ //current user got access?
                  echo "<li id=\"copyright\">\n        ";
                  //get the rendered content of the defined wiki article to use as custom notice
                  $interim = tpl_include_page($copyright_location, false);
                  if ($interim === "" ||
                      $interim === false){
                      //show creation/edit link if the defined page got no content
                      echo "[&#160;";
                      tpl_pagelink($copyright_location, hsc($lang["monobook_fillplaceholder"]." (".hsc($copyright_location).")"));
                      echo "&#160;]<br />";
                  }else{
                      //show the rendered page content
                      echo  "<div class=\"dokuwiki\">\n" //dokuwiki CSS class needed cause we are showing rendered page content
                           .$interim."\n        "
                           ."</div>";
                  }
                  echo "\n      </li>\n";
              }
          }
      }
      ?>
      <li id="usermod">
        <?php tpl_userinfo(); ?><br />
      </li>
    </ul>
    <?php tpl_includeFile('user/footer.html'); ?>
  </div>

</div>  <!-- end of global wrap -->
<a href="<?php echo wl("", array("do" => "recent"));?>" accesskey="r" style="visibility:hidden;" rel="nofollow">&#160;</a>
<?php
//provide DokuWiki housekeeping, required in all templates
tpl_indexerWebBug();

//include web analytics software
if (file_exists(DOKU_TPLINC."/user/tracker.php")){
    include DOKU_TPLINC."/user/tracker.php";
}
?>
</body>
</html>
