// 스크롤
$('body').niceScroll({
  scrollspeed: 10,
  cursorcolor : "white;"
});

setTimeout(function() {
  let $grid = $('.box-1').masonry();
  
  $('.loading-box').addClass('hide');
}, 3000);
