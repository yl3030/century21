// 手機版漢堡鍵  - 點擊後效果
$("#menu-icon").click(function () {
  // 若有class = "active"，則
  // 1. 移除class = "active"
  // 2. 導覽列往下展開，展開時間 300 毫秒 ( 0.3秒 )
  if ($(this).hasClass("active")) {
    $(this).removeClass("active");
    $("header nav").slideUp(300);
  } else {
    // 若無class = "active"，則
    // 1. 增加class = "active"
    // 2. 導覽列往上收合，收合時間 300 毫秒 ( 0.3秒 )
    $(this).addClass("active");
    $("header nav").slideDown(300);
  }
});

// 針對每個元素
// "*" 代表所有元素
$("*").each(function () {
  // 點擊
  $(this).click(function () {
    // 存取他的 data-goto-target 值
    var target = $(this).attr("data-goto-target");
    // 如果他的 data-goto-target 有定義
    if (target != undefined) {
      // 存取要滾動到的位置
      // $(target).offset().top : 此元素頂部到整個網頁頂部的距離
      // 100 是我設定 header 的高度
      var top = $(target).offset().top - 100;
      // 網頁滾動到 top 的位置
      // 移動時間 300 毫秒 ( 0.3秒 )
      $("html,body").animate({ scrollTop: top }, parseInt(300));
      // 如果視窗寬度 < 768px ( 手機版 )
      if ($(window).width() <= 768) {
        // "#menu-icon" 移除 class="active"
        $("#menu-icon").removeClass("active");
        // 導覽列往上收合，收合時間 300 毫秒 ( 0.3秒 )
        $("header nav").slideUp(300);
      }
    }
  });
});

// 聯絡我們 - 勾選
// 點擊
$(".check_item").click(function(){
  // 此元素 增加/移除 class="active"
  $(this).toggleClass("active");
})
// 點擊
$(".check_label").click(function(){
  // 此元素的父元素 ".check_item" 增加/移除 class="active"
  $(this).parents(".check_item").toggleClass("active");
})

// 推薦好案 輪播圖
// 搭配swiper套件
var swiper = new Swiper(".RSwiper", {
  // 一頁展示一個
  slidesPerView: 1,
  // 間隔 20px
  spaceBetween: 20,
//   slidesPerGroup: 2,
  observer: true,
  observeSlideChildren: true,
  observeParents: true,
  // 可無限循環
  loop: true,
  // 顯示頁籤
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // 顯示箭頭
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // 自動播放，每頁停留 5000 毫秒 ( 5秒 )
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  // RWD
  breakpoints: {
    // 視窗 > 576px
    576: {
      slidesPerView: 2,
    },
  },
});



