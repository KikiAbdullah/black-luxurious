/*------------------------------------------------------------------
jQuery document ready
-------------------------------------------------------------------*/
$(document).ready(function () {
  "use strict";

  var pageid = $(".page").data("page");

  $("#panel-left").load("panel-left.php", function () {
    var swipersubnav = new Swiper(".multinav", {
      direction: "horizontal",
      effect: "slide",
      slidesPerView: 1,
      slidesPerGroup: 1,
    });
    swipersubnav.on("slideChangeTransitionEnd", function () {
      $(".panel").animate({ scrollTop: 0 }, "slow");
    });
    $(".opensubnav").on("click", function (e) {
      swipersubnav.slideTo(1);
    });
    $(".opensubsubnav").on("click", function (e) {
      swipersubnav.slideTo(2);
    });
    $(".backtonav").on("click", function (e) {
      swipersubnav.slideTo(0);
    });
    $(".backtosubnav").on("click", function (e) {
      swipersubnav.slideTo(1);
    });
  });
  $("#panel-right").load("panel-right.php");
  $("#panel-bottom").load("panel-bottom.php", function () {
    var swipernav = new Swiper(".swiper-toolbar", {
      direction: "horizontal",
      effect: "slide",
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 1,
      pagination: {
        el: ".swiper-pagination-toolbar",
      },
    });
  });

  $("#popup-pengantin").load("popup-pengantin.php");
  $("#popup-tanggal").load("popup-tanggal.php");
  $("#popup-alamat").load("popup-alamat.php");
  $("#popup-ucapan").load("popup-ucapan.php");

  $("#header-page").load("header-page.php");

  $("#mobile_wrap").on("click", ".open-panel", function () {
    var panelPosition = $(this).data("panel");
    var panel = $(".panel-" + panelPosition);
    var panelOverlay = $(".panel-overlay");
    panel.addClass("active");
    panelOverlay.css({ display: "block" }).addClass("active");
    $("body").addClass("with-panel-" + panelPosition + "-reveal");
    $(".panel-overlay").on("click", function (e) {
      panel.css({ display: "" }).removeClass("active");
      $(this).css({ display: "" }).removeClass("active");
      $("body")
        .addClass("panel-closing")
        .removeClass("with-panel-" + panelPosition + "-reveal");
      $("#bottom-menu-icon").removeClass("open");
    });
  });

  $("#mobile_wrap").on("click", ".open-popup", function () {
    var popupClass = $(this).data("popup");
    var popup = $(popupClass);
    popup.css({ display: "block" }).addClass("active");
    $("#RegisterForm").validate();
    $("#LoginForm").validate();
    $("#ForgotForm").validate();
  });
  $("#mobile_wrap").on("click", ".close-popup", function () {
    var popupClassclose = $(this).data("popup");
    var popupclose = $(popupClassclose);
    popupclose.removeClass("active");
    $("label.error").hide();
  });
  $("#mobile_wrap").on("click", "#bottom-menu-icon", function () {
    $(this).toggleClass("open");
  });

  /*-------------- Page Index----------- */
  if (pageid == "index") {
    var swiperslider = new Swiper(".introslider", {
      direction: "horizontal",
      effect: "slide",
      parallax: true,
      pagination: {
        el: ".swiper-pagination",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    $(".close_info_popup").on("click", function (e) {
      $(".info_popup").fadeOut(500);
    });
  }
});
