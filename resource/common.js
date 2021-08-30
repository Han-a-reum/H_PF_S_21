// 스크롤
$('body').niceScroll({
  scrollspeed: 10,
  cursorcolor : "white;"
});

setTimeout(function() {
  let $grid = $('.box-1').masonry();
  
  $('.loading-box').addClass('hide');
}, 3000);


$(document).ready(function(){
  //처음화면
  $(".box_1").show();
  $(".box_2").hide();
  //맨처음 이미지
  $(".bn_buttom_1").click(function(){
    $(".box_1").hide();
    $(".box_2").show();
  });
  //다음이미지에서 처음 이미지
  $(".bn_buttom_2").click(function(){
    $(".box_1").show();
    $(".box_2").hide();
  });
});
