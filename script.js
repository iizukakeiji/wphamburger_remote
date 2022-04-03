$(function() {

if(window.matchMedia("(max-width:1024px)").matches) {     //タブレット以下のみ動作させる

//Menu クリックでサイドバー登場
  $(".c-btn__nav").on("click",function() {
    $(".p-sidebar").toggleClass("active");
    $("body").toggleClass("body-active");
  });

//Menu クリックで黒い背景登場
  $(".c-btn__nav").on("click",function() {
    $(".c-header").toggleClass("panelactive");
  });

//メニューバー側の閉じる動き
  $(".c-sidebar__icon").on("click",function() {
    $(".p-sidebar").toggleClass("active");
    $("body").toggleClass("body-active");
  });
//✖️ボタン クリックで黒い背景隠す
  $(".c-sidebar__icon").on("click",function() {
    $(".c-header").toggleClass("panelactive");
  });
  
};

// index画面 地図の高さの調整 pの高さを取得して代入         // 全画面共通
  var h_wrap = $(".p-section p").outerHeight(true);
    $('.p-section').css('height',h_wrap + 'px');

// リサイズ時にリロード
  var timer = 0;
  var currentWidth = window.innerWidth;
	$(window).resize(function(){
      if (currentWidth == window.innerWidth) {
          return;
      }
      if (timer > 0) {
          clearTimeout(timer);
      }
 
      timer = setTimeout(function () {
          location.reload();
      }, 200);		
	});

});
