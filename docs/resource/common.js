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
    delay: 3500,
    disableOnInteraction: false,
  },
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
  },
    
});

// 기타 버튼
function change1() {
  $(".btn-1, .btn-2").click(function () {
    $(".img-2").addClass("show");
  });
}

change1();

$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
