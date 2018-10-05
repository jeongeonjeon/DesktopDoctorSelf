<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_09_03.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_09_03";
        $gr_id = 'sub_page_09_03';    
		include_once(G5_THEME_PATH.'/head_07.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->
<div id="sub_img_09">
<div class="tab_01"><a href="/bbs/sub_page_09_01.php">스트레칭</a></div>
<div class="tab_02"><a href="/bbs/sub_page_09_02.php">지압법</a></div>
<div class="tab_03" style="background-color:#666;"><a href="/bbs/sub_page_09_03.php">기타</a></div>
</div>

<div id="sub_img_09_title"><img src="/img/images/sub_title_07_03.png"></div>

<div id="sub_img_09_01">
<div class="tab_01"><a href="/bbs/sub_page_09_03_01.php">수전증 완치훈련</a></div>
<div class="tab_02"><a href="/bbs/sub_page_09_03_02.php">편두통의 원인은?</a></div>
<div class="tab_03"><a href="/bbs/sub_page_09_03_03.php">몸이 흔들리고 중심이 안잡히고 자꾸 쓰러지는 증상</a></div>
</div>

<div id="sub_img_09_01_ft">
<img  src="/img/images/sub_img_09_01.jpg">
</div>

<!-- 메인화면 최신글 시작 -->

</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
