<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<link rel="stylesheet" type="text/css" href="/theme/basic/css/head.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/center.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/bottom.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/iogin.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/ioin_01.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/ioin_02.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/ioin_03.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/ioin_04.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/sub_page_01.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/sub_page_02.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/sub_page_03.css">
<link rel="stylesheet" type="text/css" href="/theme/basic/css/sub_page_04.css">
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">

<!-- 상단시작 { -->
<div id="top_bg">
<div id="head">
<div id="container">



<script>
	function menubtn(){
		var top_menu = document.getElementById("top_menu_all")
		top_menu.style.display="block";
	}
	function menucancel(){
		var top_menu = document.getElementById("top_menu_all");
		top_menu.style.display="none";
	}
</script>

<!-----top_logo_all----->
<div id="top_logo_all">
<div class="top_banner_01">
	<img src="/img/images/top_banner_01.jpg" />
    <button id="menu_btn" onclick="menubtn()">
  	  <img src="/img/images/menu_icon.png"> 
    </button>
</div>
<div class="top_logo"><a href="/"><img src="/img/images/top_logo.jpg" /></a></div>
<!-----top_ct ----->
<div id="top_ct_all">


<!--ct-->

<div class="top_ct">
<ul>
<li><a href="/bbs/sub_page_01.php">로그인</a> / <a href="/bbs/sub_page_02.php">회원가입</a></li>
</ul>
</div>
<!--ct-->

<!--search-->
<div class="search">
 <div class="hd_sch_wr">
            <fieldset id="hd_sch" >
                <legend>사이트 내 전체검색</legend>
                <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only"></span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    return true;
                }
                </script>

            </fieldset>
                
        </div>
</div>

<!--search-->


</div>
<!-----top_ct----->
</div>
<!-----top_logo_all----->
<!-----top_menu_all----->

<ul id="top_menu_all">
<li><button id="menu_cancel_btn" onclick="menucancel()"><img src="/img/images/menu_cancel.png"></button></li>
<li class="top_menu_01"><a href="/bbs/sub_page_07.php">소개</a></li>
<li class="top_menu_02"><a href="/bbs/sub_page_08.php">진단</a></li>
<li class="top_menu_03"><a href="/bbs/sub_page_09_01.php">운동법</a></li>
<li class="top_menu_04"><a href="/bbs/sub_page_10_01.php">찾아보기</a></li>
<li class="top_menu_05"><a href="/bbs/board.php?bo_table=qa">Q&A</a></div>

</ul>
<!-----top_menu_all----->

</div>
</div>
</div>
<!-- } 상단끝 -->
<!-- 콘텐츠시작 -->
<div id="title_01">
<div class="title_01_01"><p>&nbsp;&nbsp;&nbsp;아이디찾기</p></div>

</div>

<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
<!----right_banner_01----->
<!----right_banner_01----->