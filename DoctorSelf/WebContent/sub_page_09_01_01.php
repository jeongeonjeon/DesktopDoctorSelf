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
<div class="tab_01">피로 해소를 위한 간단한 스트레칭</div>
<div class="detail">
	<img src="/img/images/lowerback.jpg">
	<p>
	<br>
	허리 근육이 과도하게 긴장되어 통증이 느껴질 때나 하이힐을 신고 오래 서 있을 때 뻐근한 경우 엉덩이와 허리의 경계선 부분을 늘려주고 긴장으로 인한 통증을 완화시켜 준다.
	<br><br>
	1. 천장을 바라보고 바르게 누운 상태에서 두 무릎을 구부려 가슴 쪽으로 당긴다. 숨을 들이쉬면서 시작 자세를 유지한다.
	<br><br>
	2. 숨을 내쉬면서 무릎을 가슴 쪽으로 당긴다. 이때 엉덩이가 바닥에서 들리는데 최대한 바닥에 닿아 있도록 한다. 4차례 깊게 호흡하면서무릎이 가슴 쪽으로 당겨진 상태를 유지한 뒤 천천히 시작 자세로 돌아간다. 총 5세트 반복한다.
	</p>
</div>
</div>


<!-- 메인화면 최신글 시작 -->

</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
