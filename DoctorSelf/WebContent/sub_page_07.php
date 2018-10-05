<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_07.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_07";
        $gr_id = 'sub_page_07';    
		include_once(G5_THEME_PATH.'/head_05.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<link href="https://fonts.googleapis.com/css?family=Hi+Melody|Nanum+Brush+Script|Nanum+Pen+Script" rel="stylesheet">
<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->

<div id="sub_img_07">
<p>
<span style="font-size:43px;">안녕하세요.</span> 
<br><br>
<b>DOCTOR SELF</b> 사이트 방문을 환영합니다.
<br><br>
요즘 건강에 대한 관심이 날로 증가하고 있으나, 바쁜 일상 속에서 병원가기 어려운 상황이거나 집에서 간단히 자신이 무슨 질병인지 검색하여 정보를 얻고 싶어 하는 경우가 많습니다.
<br><br>
「<b>DOCTOR SELF</b>」에서는 예기치 못한 건강 사고를 예방하기 위해 사용자의 증상에 해당되는 질병을 진단하고, 도움이 되는 식단과 운동법 등 다양한 정보를 제공하고 있으며 과거 진단 기록들을 토대로 빠르고 간편하게 사용자의 건강 상태를 분석할 것 입니다.
<br><br>
향후, 저희는 여러분의 건강관리를 위한 지속적인 서비스 개선과 믿을 수 있는 건강정보 제공에 최선을 다하겠습니다. 
<br><br>
앞으로도 끊임없는 관심과 격려를 부탁드리며, 가정에 건강과 행운이 함께 하시길 기원합니다.
<br><br>
<span style="font-size:43px;">감사합니다.</span>
</p>
</div>


<!-- 메인화면 최신글 시작 -->

</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
