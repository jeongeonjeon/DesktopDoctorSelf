<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head_01.php');
?>
<link rel="stylesheet" href="/theme/basic/css/jquery_bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
    $(document).ready(function(){
      $('#center_ta').bxSlider({
    	  auto:true,
 		  autoStart:true,
    	  randomStart:true,
    	  speed : 500
    	  
      });
    });
//     'background:url("/img/images/main_pic.png") no-repeat center center;'
</script>               


<div id="center_bg">
    <div id="center">
        <div id="center_ta">
    		<div><img src="/img/images/main_pic.png"></div>
    		<div><a href="https://nip.cdc.go.kr/irgd/introduce.do?MnLv1=3&MnLv2=7&MnLv3=1" target="_blank"><img src="/img/images/main0222.jpg"></a></div>
    		<div><img src="/img/images/main_pic.png"></div>
    	</div>
    </div>
</div>

<!-- 콘텐츠 끝 { -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>