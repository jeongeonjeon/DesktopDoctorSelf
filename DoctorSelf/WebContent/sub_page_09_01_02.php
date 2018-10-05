<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_09_01_01.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_09_01_01";
        $gr_id = 'sub_page_09_01_01';    
		include_once(G5_THEME_PATH.'/head_07.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<div class="latest_wr">


<!-- 메인화면 최신글 시작 -->
<div id="sub_img_09">
<div class="tab_01" style="background-color:#666;><a href="/bbs/sub_page_09_01.php">스트레칭</a></div>
<div class="tab_02"><a href="/bbs/sub_page_09_02.php">지압법</a></div>
<div class="tab_03"><a href="/bbs/sub_page_09_03.php">기타</a></div>
</div>

<div id="sub_img_09_title"><img src="/img/images/sub_title_07.jpg"></div>

<div id="sub_img_09_01_01">
<div class="tab_01">굽은 등을 펴주는 스트레칭</div>
<div class="detail">
	<img src="/img/images/YOGA_002_pic_1.jpg">
	<p>1. 기어가는 자세에서 두 손과 두 무릎을 각각 어깨너비만큼 벌린다.</p>
	<img src="/img/images/YOGA_002_pic_2.jpg">
	<p>2. 숨 들이마시면서 머리를 뒤로 젖히고 허리를 움푹하게 바닥 쪽으로 내린다.</p>
	<img src="/img/images/YOGA_002_pic_3.jpg">
	<p>3. 반대로 숨 내쉬면서 머리를 숙이는 동시에 복부를 등 쪽으로 당기고 허리를 천장 쪽으로 둥글게 끌어올린다. 3~5회 반복한다.</p>
	<img src="/img/images/YOGA_002_pic_1.jpg">
	<p>4. 호흡을 정리하며 처음 자세로 돌아온다.</p>
</div>
</div>


<!-- 메인화면 최신글 시작 -->

</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
