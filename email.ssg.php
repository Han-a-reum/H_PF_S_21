<?php
$pageCode = "email";
?>

<?php
require_once "head.php";
?>

<!-- 이메일부분 배경 -->
<div class="bn_5_1">
  <img src="resource/img/bn_5_1.png" alt=""></a>
</div>
<!-- 엑스 버튼 -->
<div class="bn_5_1_1"><a href="index.ssg.php"><img class="cursor-pointer" src="resource/img/bn_5_1_1.png" alt=""></div>
</a>
<!-- 메일 보내기 -->
<div class="email_1">
  <form target="_blank" action="https://formspree.io/f/mrgrrpjr" onsubmit="sendEmailForm(this); return false;" method="POST">
    <div><input autofocus type="email" name="_replyto" placeholder="이메일 주소를 입력해주세요"></div>
    <div><textarea name="message" placeholder="자기소개는 간단히, 내용을 입력해주세요"></textarea></div>
    <div><button class="cursor-pointer" name="submit1" type="submit">보내기</button></div>
  </form>
</div>
<!-- 공부 아이콘 -->
<div class="email_icon">
  <div class="email_icon_1"><a href="https://koooongboo.tistory.com/" target="_blank"><img class="cursor-pointer" src="resource/img/bn_5_1_2.png" alt=""></a></div>
  <div class="email_icon_1"><a href="https://www.youtube.com/channel/UCA28z5nhhsw8xKKNJHnOkOw/videos" target="_blank"><img class="cursor-pointer" src="resource/img/bn_5_1_3.png" alt=""></a></div>
  <div class="email_icon_1"><a href="https://wiken.io/b/244" target="_blank"><img class="cursor-pointer" src="resource/img/bn_5_1_4.png" alt=""></a></div>
</div>
<!-- 편지봉투 -->
<div class="email_bn_1_1_7 chatbox">
  <img src="resource/img/bn_1_1_7.png" alt="">
</div>

<?php
require_once "foot.php";
?>