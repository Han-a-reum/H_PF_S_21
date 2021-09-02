<?php
$pageCode = "email";
?>

<?php
require_once "head.php";
?>

<div class="bn_5_1">
  <img src="resource/img/bn_5_1.png" alt=""></a>
</div>

<div class="bn_5_1_1 cursor-pointer"><a href="index.ssg.php"><img src="resource/img/bn_5_1_1.png" alt=""></div>
</a>

<div class="email_1">
  <form target="_blank" action="https://formspree.io/f/mrgrrpjr" onsubmit="sendEmailForm(this); return false;" method="POST">
    <div><input autofocus type="email" name="_replyto" placeholder="이메일 주소를 입력해주세요"></div>
    <div><textarea name="message" placeholder="자기소개와 내용을 입력하세요"></textarea></div>
    <div><button name="submit1" type="submit">보내기</button></div>
  </form>
</div>

<div class="email_icon">
  <div class="email_icon_1 cursor-pointer"><a href="https://koooongboo.tistory.com/" target="_blank"><img src="resource/img/bn_5_1_2.png" alt=""></a></div>
  <div class="email_icon_1 cursor-pointer"><a href="https://www.youtube.com/channel/UCA28z5nhhsw8xKKNJHnOkOw/videos" target="_blank"><img src="resource/img/bn_5_1_3.png" alt=""></a></div>
  <div class="email_icon_1 cursor-pointer"><a href="https://wiken.io/b/244" target="_blank"><img src="resource/img/bn_5_1_4.png" alt=""></a></div>
</div>

<div class="email_bn_1_1_7 chatbox">
  <img src="resource/img/bn_1_1_7.png" alt="">
</div>

<?php
require_once "foot.php";
?>