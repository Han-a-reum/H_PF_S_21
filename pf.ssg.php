<?php
$pageCode = "pf";
?>

<?php require_once "head.php";?>

<!-- 포폴배경 -->
<div class="about_1">
  <img src="resource/img/bn_3_1.png" alt="">
</div>

<!-- 포폴 슬라이드 -->
<div class="pf_1_1">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- 개인 사이트 -->
      <div class="swiper-slide swiper-slide_1">
        <img class="bn_3_2_1" src="resource/img/bn_3_1_4.png" onmouseover="this.src='resource/img/bn_3_1_1.png'"
          onmouseout="this.src='resource/img/bn_3_1_4.png'">
        <a href="https://han-a-reum.github.io/H_pf_ps_2021/"><img class="bn_3_1_2 cursor-pointer" src="resource/img/bn_3_1_3_1.png" alt=""></a>
      </div>
      <!-- 리뉴얼 사이트 -->
      <div class="swiper-slide swiper-slide_1">
        <img class="bn_3_2_1" src="resource/img/bn_3_3_1.png" onmouseover="this.src='resource/img/bn_3_3_1.png'"
          onmouseout="this.src='resource/img/bn_3_3_1.png'">
        <div class="bn_3_1_2_2">
          <a href="#"><img class="bn_3_1_2_1 cursor-pointer" src="resource/img/bn_3_1_2.png" alt=""></a>
          <a href="#"><img class="bn_3_1_3 cursor-pointer" src="resource/img/bn_3_1_3.png" alt=""></a>
        </div>
      </div>
      <!-- 데일리 루틴 -->
      <div class="swiper-slide swiper-slide_1">
        <img class="bn_3_2_1" src="resource/img/bn_3_2_1.png" onmouseover="this.src='resource/img/bn_3_2_2.png'"
          onmouseout="this.src='resource/img/bn_3_2_1.png'">
        <a href="https://han-a-reum.github.io/2021-DR-HAR/pf/work1/" target='_blank'><img
            class="bn_3_1_2 cursor-pointer" src="resource/img/bn_3_1_3_1.png" alt=""></a>
      </div>
      <div class="swiper-slide">준비중</div>
      <div class="swiper-slide">준비중</div>
      <div class="swiper-slide">준비중</div>
    </div>
    <!-- 포폴 페이지 번호 -->
    <div class="swiper-pagination"></div>
  </div>
</div>

<?php
require_once "foot.php";
?>