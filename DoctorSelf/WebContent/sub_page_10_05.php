<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_08_02.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_08_02";
        $gr_id = 'sub_page_08_02';    
		include_once(G5_THEME_PATH.'/head_08.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->

<div id="sub_img_10_all">
<div><img src="/img/images/sub_img_10_05.jpg" border="0" ></div>
</div>

<!-- 메인화면 최신글 시작 -->

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
