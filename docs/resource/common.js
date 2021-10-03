// 로딩 화면 박스
$('body').imagesLoaded(function() {
  $('.loading-box').addClass('hide');
});

// 메인화면 전등
function change() {
  $(".bn_buttom_1").click(function () {
    $(".box_1_2").addClass("show");
  });

  $(".bn_buttom_2").click(function () {
    $(".box_1_2").removeClass("show");
  });
}

change();

// 어바웃 로딩 컬러사진
setTimeout(function () {
  $('.loading-box-2').addClass('hide');
}, 3500);

// 어바웃 로딩 톡로딩
setTimeout(function () {
  $('.loading-box-3').addClass('hide');
}, 2000);

// 포폴 슬라이드
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

$('.swiper-slide').on('mouseover', function(){
  swiper.autoplay.stop();
});
$('.swiper-slide').on('mouseout', function(){
  swiper.autoplay.start();
});

// 기타 버튼
function change1() {
  $(".btn-1, .btn-2").click(function () {
    $(".img-2").addClass("show");
  });
}

change1();