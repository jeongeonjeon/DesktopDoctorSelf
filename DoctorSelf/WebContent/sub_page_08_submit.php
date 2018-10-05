<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_08_submit.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_08_submit";
        $gr_id = 'sub_page_08_submit';    
		include_once(G5_THEME_PATH.'/head_06.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>




<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->
<div id="sub_img_08_submit">

<?php 
    $disease = $_GET['disease'];
    $part = $_GET['part'];
    if($disease==null){
        $sql='SELECT * FROM disease where part="'.$part.'"';
    }else{
        $sql='SELECT * FROM disease where no="'.$disease.'" and part="'.$part.'"';
    }
    $result = sql_query($sql);
    
    while($row=mysqli_fetch_array($result)){
        $name = $row['name'];
        $egname = $row['egname'];
        $detail = $row['detail'];
?>
	<h1><?=$name?><br>(<?=$egname?>)</h1>
	<p><?=$detail?></p>
<?php 
    }    
?>

</div>
	
<!-- 메인화면 최신글 시작 -->

</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
