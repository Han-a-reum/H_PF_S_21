// 로딩 화면 박스
setTimeout(function() {
  let $grid = $('.box-1').masonry();
  
  $('.loading-box').addClass('hide');
}, 3000);

// 메인화면 전등
function change() {
  $(".bn_buttom_1").click(function() {
    $(".box_1_2").addClass("show");
  });
  
  $(".bn_buttom_2").click(function() {
    $(".box_1_2").removeClass("show");
  });
}

change();

// 포폴 슬라이드
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
});

// 기타 버튼
function change1() {
  $(".btn-1").click(function() {
    $(".img-2").addClass("show");
  });
}

change1();
