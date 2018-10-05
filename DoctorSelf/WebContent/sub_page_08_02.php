<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_08_01.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_08_01";
        $gr_id = 'sub_page_08_01';    
		include_once(G5_THEME_PATH.'/head_06.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<script type="text/javascript">
	
</script>
<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->
<div id="sub_img_08_01_01">
	<h1>가장 해당되는 생각하는 증상을 선택하세요.</h1><br>
	<form name="diseaseForm" method="get" action="/bbs/sub_page_08_submit.php" onsubmit="return submitForm()">
	<?php 
	$part = $_GET['part'];
	$sql='SELECT * FROM disease where part="'.$part.'"';
	$result = sql_query($sql);
	while($row=mysqli_fetch_array($result)){
	    $no = $row['no'];
	    $quest = $row['question'];
	    
	?>
		<label><input type="radio" name="disease" value="<?=$no?>"><span><?=$quest?></span><br></label>

	<?php
	}
	?>
		<input type="hidden" name="part" value="<?=$part?>">
		<input id="next_btn" type="submit" value="다음">
	</form>
</div>
<!-- 메인화면 최신글 시작 -->

</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
