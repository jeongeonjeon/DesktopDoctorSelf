<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_10_01.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_10_01";
        $gr_id = 'sub_page_10_01';    
		include_once(G5_THEME_PATH.'/head_08.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<div class="latest_wr">


<!-- 메인화면 최신글 시작 -->
<div id="sub_img_10_all">
<!-- 01 -->
<div id="sub_img_10_01_01">
    <div>
    	<div class="sub_img_10_img">
    	    <img src="/img/images/sub_img_10_01_01.jpg" >
        </div>
        <div  class="sub_img_10_btn">
        	<a href="/bbs/sub_page_10_02.php"><img src="/img/images/sub_img_10_01_11.jpg"></a>
        </div>
    </div>
</div>
<!-- 01 -->
<!-- 02 -->
<div id="sub_img_10_02_01">
	<div>
    	<div class="sub_img_10_img">
    	    <img src="/img/images/sub_img_10_01_02.jpg" >
        </div>
        <div class="sub_img_10_btn">
        	<a href="/bbs/sub_page_10_03.php"><img src="/img/images/sub_img_10_01_12.jpg"></a>
        </div>
    </div>
</div>
<!-- 02 -->
<!-- 03 -->
<div id="sub_img_10_03_01">
    <div>
    	<div class="sub_img_10_img">
    	    <img src="/img/images/sub_img_10_01_03.jpg" >
        </div>
        <div class="sub_img_10_btn">
        	<a  href="/bbs/sub_page_10_04.php"><img src="/img/images/sub_img_10_01_13.jpg"></a>
        </div>
    </div>
</div>
<!-- 03 -->
<!-- 04 -->
<div id="sub_img_10_04_01">
    <div>
    	<div class="sub_img_10_img">
    	    <img src="/img/images/sub_img_10_01_04.jpg" >
        </div>
        <div class="sub_img_10_btn">
        	<a href="https://terms.naver.com/medicineSearch.nhn" target="_blank"><img src="/img/images/sub_img_10_01_14.jpg"></a>
        </div>
    </div>
</div>
<!-- 04 -->
</div>
<!-- 메인화면 최신글 시작 -->

</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
