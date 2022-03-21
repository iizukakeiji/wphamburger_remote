$(function() {

//Menu クリックでサイドバー登場
  $(".c-btn__nav").on("click",function() {
    $(".p-sidebar").toggleClass("active");
  });

//Menu クリックで黒い背景登場
  $(".c-btn__nav").on("click",function() {
    $(".c-header").toggleClass("panelactive");
  });


//メニューバー側の閉じる動き
  $(".c-sidebar__icon").on("click",function() {
    $(".p-sidebar").toggleClass("active");
  });
//✖️ボタン クリックで黒い背景隠す
  $(".c-sidebar__icon").on("click",function() {
    $(".c-header").toggleClass("panelactive");
  });

  //  ハンバーガーメニュー✖️がクリックされるたびにopenというクラスを付け外しする　擬似要素
$('.menu-icon').on("click",function() {
$('.menu-icon, .bar1, .bar2, .bar3').toggleClass('open');
});


});
