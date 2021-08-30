setTimeout(function() {
  let $grid = $('.box-1').masonry();
  
  $('.loading-box').addClass('hide');
}, 3000);

function change() {
  $(".bn_buttom_1").click(function() {
    $(".box_1_2").addClass("show");
  });
  
  $(".bn_buttom_2").click(function() {
    $(".box_1_2").removeClass("show");
  });
}

change();

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});