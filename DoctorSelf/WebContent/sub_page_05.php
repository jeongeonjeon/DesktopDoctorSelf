<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_05.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_05";
        $gr_id = 'sub_page_05';    
		include_once(G5_THEME_PATH.'/head_02.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<?php 
    $id = $_POST['userId'];
    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $pwd = $_POST['userPw'];
    $tel = $_POST['telNo'];
    $email = $_POST['email'];
    $addr = $_POST['address'];
    $addr2 = $_POST['address2'];
    
    $sql = "insert into g5_member(mb_id,mb_name,mb_birth,mb_password,mb_tel,mb_email,mb_addr1,mb_addr2) 
            values('$id','$name','$birth','$pwd','$tel','$email','$addr','$addr2')" ;
    
    sql_query($sql);
    
?>

<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->
<div id="top_img_all">
<div class="top_img_01_03"><img src="/img/images/sub_title_05.jpg" /></div>
<div class="top_img_02_03"><img src="/img/images/sub_title_02.jpg" /></div>
<div class="top_img_03_03"><img src="/img/images/sub_title_06.jpg" /></div>
</div>


<div id="sub_img_05_all">
<div class="tab_all">
<div class="tab_01">DOCTOR SELF</div>
<div class="tab_02">회원이 되어주셔서 감사합니다.</div>
<div class="tab_03"><a href="#">마이페이지</div></div>

</div>
</div>

<!-- 메인화면 최신글 끝 -->
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
