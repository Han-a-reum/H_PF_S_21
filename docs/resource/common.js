console.log("common.js 로딩");

function Fullpage__init() {
  new fullpage('#fullpage', {
    //menu: ".top-bar .menu-box-1"
  });
  
  // 기존 섹션을 다시 활성화 하여, 최초에도 애니메이션이 발동 하도록
  const $current = $('.section.fp-section.active');
  $current.removeClass('active');
  setTimeout(function() {
    $current.addClass('active');
  });
}

Fullpage__init();