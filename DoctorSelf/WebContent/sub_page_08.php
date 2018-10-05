<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_08.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_08";
        $gr_id = 'sub_page_08';    
		include_once(G5_THEME_PATH.'/head_06.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->

<form>
    <div id="sub_img_08_all">
    	<div id="sub_img_08_01">
    		<p>머리,목</p>
        	<ul >
        		<li><a href="/bbs/sub_page_08_01.php?part=head">머리</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=eye">눈</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=nose">코</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=mouth">입</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=ear">귀</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=throat">목</a></li>
        	</ul>
    	</div>
    	<div id="sub_img_08_02">
    		<p>뒷목,어깨,팔,손</p>
        	<ul >
        		<li><a href="/bbs/sub_page_08_01.php?part=neck">뒷목</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=shoulder">어깨</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=arm">팔</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=wrist">손목</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=hand">손</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=finger">손가락</a></li>
        	</ul>
    	</div>
    	<div id="sub_img_08_03">
    		<p>허벅지,다리,발</p>
        	<ul >
        		<li><a href="/bbs/sub_page_08_01.php?part=thigh">허벅지</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=knee">무릎</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=calf">종아리</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=ankle">발목</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=foot">발</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=toe">발가락</a></li>
        	</ul>
    	</div>
    	<div id="sub_img_08_04">
    		<p>가슴,등,배,허리,옆구리</p>
        	<ul >
        		<li><a href="/bbs/sub_page_08_01.php?part=breast">유방</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=chest">가슴</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=back">등</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=stomach">배</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=side">옆구리</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=waist">허리</a></li>
        	</ul>
    	</div>
    	<div id="sub_img_08_05">
    		<p>엉덩이,항문,서혜부,생식기</p>
        	<ul >
        		<li><a href="/bbs/sub_page_08_01.php?part=hip">엉덩이, 항문</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=lower_abdomen">아랫배, 허벅지 주변</a></li>
        		<li><a href="/bbs/sub_page_08_01.php?part=genitals">생식기</a></li>
        	</ul>   
    	</div>      
    </div>       
</form>   

<!-- 메인화면 최신글 시작 -->

</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
