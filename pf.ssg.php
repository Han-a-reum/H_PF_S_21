<?php
$pageCode = "pf";
?>

<?php require_once "head.php";?>

<div class="about_1">
  <img src="resource/img/bn_3_1.png" alt="">
</div>

<div class="pf_1_1">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide_1">
        <!-- 개인사이트 -->
      <img class="bn_3_2_1" src="resource/img/bn_3_2_1.png" onmouseover="this.src='resource/img/bn_3_2_2.png'" onmouseout="this.src='resource/img/bn_3_2_1.png'">
        <a href="#"><img class="bn_3_1_2" src="resource/img/bn_3_1_2.svg" alt=""></a>
      </div>
      <div class="swiper-slide swiper-slide_1">
        <img class="bn_3_1_1" src="resource/img/bn_3_1_1.png" alt="">
        <div class="bn_3_1_2_2">
          <img class="bn_3_1_2_1" src="resource/img/bn_3_1_2.svg" alt="">
          <img class="bn_3_1_3" src="resource/img/bn_3_1_3.svg" alt="">
        </div>
      </div>
      <!-- 데일리 루틴 -->
      <div class="swiper-slide swiper-slide_1">
        <img class="bn_3_2_1" src="resource/img/bn_3_2_1.png" onmouseover="this.src='resource/img/bn_3_2_2.png'" onmouseout="this.src='resource/img/bn_3_2_1.png'">
        <a href="#"><img class="bn_3_1_2" src="resource/img/bn_3_1_2.svg" alt=""></a>
      </div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
    </div>
    <div class="swiper-pagination"></div>
  </div> 
</div>

<?php
require_once "foot.php";
?>