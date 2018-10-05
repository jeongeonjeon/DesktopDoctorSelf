
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/sub_page_01.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "sub_page_01";
        $gr_id = 'sub_page_01';    
		include_once(G5_THEME_PATH.'/head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
<script>

	function loginFunc(){
    <?php 
        session_start(); 
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $myusername=addslashes($_POST['id']);
            $mypassword=addslashes($_POST['pw']);
      
            $sql="SELECT mb_id FROM g5_member WHERE mb_id='$myusername' and mb_password='$mypassword'";
            
            $result=mysql_query($sql);
            
            $count=mysql_num_rows($result);
     ?>
            if(<?=$count?>==1){  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다.
               return true;
               
            }else{
                return false;
            }
    <?php
            }
    ?>
	}
</script>
<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->
<div id="login_all">

<!--로그인-->
<div id="login_ta_all">
<form name="loginForm" method="post" action="/" onsubmit="return loginFunc()">
<div class="login_ta_01">  <input name="id" type="text"  placeholder="ID" onClick="javascript:this.value='';"  size="45"  maxlength="40" /></div>
<div class="login_ta_02"> <input name="pw" type="password" placeholder="PW" onClick="javascript:this.value='';"  size="45"  maxlength="40" /></div>
<div class="login_ta_bt"><button type="submit" style="border: 0; color:white; width:100%; height:100%; background-color: #1975D1; font-weight:bold;">로그인</button></div>
</form>
</div>
<!--로그인끝-->
<!--로그인버튼-->
<div id="login_ta_all_02">
<div class="login_ta_01_01"> <a href="/bbs/sub_page_02.php"></a></div>
<div class="login_ta_02_01"> <a href="/bbs/sub_page_03.php"></a></div>
<div class="login_ta_bt_01"> <a href="/bbs/sub_page_06.php"></a></div>
<a id="custom-login-btn" href="javascript:loginWithKakao()" style="width: 55%;">
<img src="//mud-kage.kakao.com/14/dn/btqbjxsO6vP/KPiGpdnsubSq3a0PHEGUK1/o.jpg" style="width: 100%;"/>
</a>
</div>

<script type='text/javascript'>
  //<![CDATA[
    // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('531cde853a2f1609efbecb82421ff336');
    function loginWithKakao() {
      // 로그인 창을 띄웁니다.
      Kakao.Auth.login({
        success: function(authObj) {
          alert(JSON.stringify(authObj));
        },
        fail: function(err) {
          alert(JSON.stringify(err));
        }
      });
    };
  //]]>
</script>
<!--로그인버튼-->
</div>
<!-- 메인화면 최신글 끝 -->
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
