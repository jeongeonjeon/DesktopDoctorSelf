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
<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
<script>
    function execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('postcode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('address').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('address2').focus();
            }
        }).open();
    }
</script>
<script>

	function submitFunc(){
		var name = document.joinForm.name.value;
		var id = document.joinForm.userId.value;
		var pass= document.joinForm.userPw.value;
		var passcheck= document.joinForm.pwCheck.value;
		var addr = document.joinForm.address.value;

		if(id.length==0||pass.length==0||passcheck.length==0||addr.length==0){
			alert("이름, 아이디, 비밀번호, 비밀번호확인, 주소는 필수항목입니다.");
			return false;
		}
		if(id.length<5||id.length>20){
			alert("아이디는 5~20자로 설정해주세요");
			return false;
		} 
		var check = /^(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])(?=.*[0-9]).{6,16}$/;
		if (!check.test(pass)){
			alert("6~16자 영문 대 소문자,숫자,특수문자를 사용하세요.");
			return false;
		}
		if(pass!=passcheck){
			alert("비밀번호와 비밀번호 확인이 다릅니다.");
			return false;
		}
		return true;
	}

</script>
<div class="latest_wr">

<!-- 메인화면 최신글 시작 -->
<div id="top_img_all">
<div class="top_img_01_02"><img src="/img/images/sub_title_05.jpg" /></div>
<div class="top_img_02_02"><img src="/img/images/sub_title_04.jpg" /></div>
<div class="top_img_03_02"><img src="/img/images/sub_title_03.jpg" /></div>
</div>
<form name="joinForm" method="post" action="/bbs/sub_page_05.php" onsubmit="return submitFunc()" >
    <table id="sub_img_04_01" width="90%" border="1" cellpadding="0" cellspacing="0">
    <!--첫번째줄-->
    <tr>
    <th width="20%" height="60px">이름</th>
    <td><input type="text" name="name" size="25"></td>
    <th width="20%">생년월일 </th>
    <td><input type="date" name="birth" size="25"></td>
    </tr>
    <!--첫번째줄--->
    <!--두번째줄--->
    <tr>
    <th height="60px">아이디</th>
    <td colspan="3"><input type="text" name="userId" size="25">　<br>&nbsp;&nbsp;&nbsp; 아이디는 5~20자로 설정해주세요</td>
    </tr>
    <!--두번째줄--->
    <!--세번째줄--->
    <tr>
    <th height="60px">비밀번호</th>
    <td colspan="3" ><input type="password" name="userPw" size="25">　<br>&nbsp;&nbsp;&nbsp; 6~16자 영문 대 소문자,숫자,특수문자를 사용하세요.</td>
    </tr>
    
    <!--세번째줄--->
    <!--네번째줄--->
    <tr>
    <th height="60px">비밀번호 확인</th>
    <td colspan="3"><input type="password" name="pwCheck" size="25"></td>
    </tr>
    <!--네번째줄--->
    <!--다섯번째줄--->
    <tr>
    <th height="60px">우편번호</th>
    <td colspan="3">
        <input type="text" name="postNo" id="postcode" size="15" readonly> &nbsp; 
        <button  onclick="execDaumPostcode()" style="border:0;"><img src="/img/images/sub_img_04_img_01.jpg" /></button>
        </td>
    </tr>
    <!--다섯번째줄--->
    <!--여섯번째줄--->
    <tr>
    <th height="60px">주소</th>
    <td colspan="3">
    	<input type="text" id="address"  name="address"  placeholder="주소"  size="40" readonly>
    	<input type="text" id="address2" name="address2" placeholder="상세주소" size="25">
    </td>
    </tr>
    <!--여섯번째줄--->
    <!--일곱번째줄--->
    <tr>
    <th height="60px">연락처</th>
    <td colspan="3"><input type="tel" name="telNo" size="25"></td>
    </tr>
    <!--일곱번째줄--->
    <!--여덟번째줄--->
    <tr>
    <th height="60px">E-mail 주소</th>
    <td colspan="3"><input type="email" name="email" size="45">&nbsp;&nbsp; <input name="sub_05" type="radio" value="동의함" >수신 <input name="sub_05" type="radio" value="동의안함">수신거부</td>
    </tr>
    <!--여덟번째줄--->
    </table>
    <!--버튼 --->
    <div id="sub_04_bt_01_all">
    <button type="submit" class="sub_04_bt_01" style="border:0; color:white;">회원가입</button><!--/bbs/sub_page_05.php  -->
    <button type="reset" class="sub_04_bt_02" style="border:0; color:white;">회원가입취소</button><!-- /bbs/sub_page_02.php -->
    </div>
    <!--버튼 --->
    <!--회원가입폼-->
</form>

<!-- 메인화면 최신글 끝 -->
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
