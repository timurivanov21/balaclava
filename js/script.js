$(document).ready(function () {
  var r = $("#menu");
  $(window).scroll(function () {
    $(this).scrollTop() > 80 && r.hasClass("normal") ? r.removeClass("normal").addClass("fix shadow") : $(this).scrollTop() <= 80 && r.hasClass("fix shadow") && r.removeClass("fix shadow").addClass("normal")
  }), $(".menuBurger").on("click", function () {
    $(".header-nav").slideToggle(300, function () {
      "none" === $(this).css("display") && $(this).removeAttr("style")
    })
  }), $("#main-button").on("click", function () {
    return $("#rentroom").arcticmodal(), !1
  }), $(".rooms-button").on("click", function () {
    return $("#rentroom").arcticmodal(), !1
  }), $(".bath-button").on("click", function () {
    return $("#rentroom1").arcticmodal(), !1
  });
   $.validator.addMethod("isName", function (r, e) {
    return this.optional(e) || r == r.match(/[A-Za-zА-Яа-яЁё]{3,}/)
  }), $.validator.addMethod("isEmail", function (r, e) {
    return this.optional(e) || r == r.match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/)
  }), $(".feedback-form-validate").validate({
    rules: {
      user_name: {
        required: !0,
        minlength: 2,
        isName: !0
      },
      user_phone: {
        required: !0
      },
      user_email: {
        required: !0,
        isEmail: !0
      },
      user_message: {
        required: !0,
        minlength: 6
      }
    },
    messages: {
      user_name: "",
      user_phone: "",
      user_email: "",
      user_message: ""
    },
    submitHandler: function () {
      $(".feedback-form-validate").submit(function (r) {
        return r.preventDefault(), 
        $.ajax({
          type: "POST",
          url: "mailer/smart.php",
          data: $(this).serialize()
        }).done(function () {
          console.log("Успех");
          $("#thanks-modal").arcticmodal(),
          $(this).find("input").val(""),
          $(this).find("textarea").val(""), 
          $(".feedback-form-validate").trigger("reset")
        }), !1
      })
    }
  }), $(".form-validate").validate({
    rules: {
      user_name: {
        required: !0,
        minlength: 2,
        isName: !0
      },
      user_phone: {
        required: !0
      },
      user_email: {
        required: !0,
        isEmail: !0
      },
      user_message: {
        required: !0,
        minlength: 6
      }
    },
    messages: {
      user_name: "",
      user_phone: "",
      user_email: "",
      user_message: ""
    },
    submitHandler: function () {
      $(".form-validate").submit(function () {
        $.ajax({
          type: "POST",
          url: "mailer/smart.php",
          data: $(this).serialize()
        }).done(function () {
          $("#thanks-modal").arcticmodal(), $(this).find("input").val(""), $(this).find("textarea").val(""), $(".form-validate").trigger("reset")
        }), !1
      })
    }
  }), $("#last-form").validate({
    rules: {
      user_name: {
        required: !0,
        minlength: 2,
        isName: !0
      },
      user_email: {
        required: !0,
        isEmail: !0
      },
      user_message: {
        required: !0,
        minlength: 6
      }
    },
    messages: {
      user_name: "",
      user_email: "",
      user_message: ""
    },
    submitHandler: function () {
      $("#last-form").submit(function (r) {
        return r.preventDefault(), $.ajax({
          type: "POST",
          url: "mailer/smart.php",
          data: $(this).serialize()
        }).done(function () {
          $("#thanks-modal").arcticmodal(), $(this).find("input").val(""), $(this).find("textarea").val(""), $("#last-form").trigger("reset")
        }), !1
      })
    }
  }), $("#phone1").mask("+7 (999) 999-99-99"), $("#phone2").mask("+7 (999) 999-99-99"), $("#phone3").mask("+7 (999) 999-99-99"), $(".arcticmodal-close").on("click", function () {
    $.arcticmodal("close")
  }), $(".btn").on("click", function () {
    return yaCounter51598838.reachGoal("button"), !0
  }), $("form").on("submit", function () {
    return yaCounter51598838.reachGoal("form"), !0
  }), $(".rooms-slider-big1").slick({
    infinite: !0,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !1,
    asNavFor: ".rooms-slider-mini1"
  }), $(".rooms-slider-mini1").slick({
    infinite: !0,
    slidesToShow: 3,
    focusOnSelect: !0,
    prevArrow: '<div class="arrow arrow-prev"></div>',
    nextArrow: '<div class="arrow arrow-next"></div>',
    asNavFor: ".rooms-slider-big1",
    responsive: [{
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  }), $(".rooms-slider-big2").slick({
    infinite: !0,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !1,
    asNavFor: ".rooms-slider-mini2"
  }), $(".rooms-slider-mini2").slick({
    infinite: !0,
    slidesToShow: 3,
    focusOnSelect: !0,
    prevArrow: '<div class="arrow arrow-prev"></div>',
    nextArrow: '<div class="arrow arrow-next"></div>',
    asNavFor: ".rooms-slider-big2",
    responsive: [{
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  }), $(".rooms-slider-big3").slick({
    infinite: !0,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !1,
    asNavFor: ".rooms-slider-mini3"
  }), $(".rooms-slider-mini3").slick({
    infinite: !0,
    slidesToShow: 3,
    focusOnSelect: !0,
    prevArrow: '<div class="arrow arrow-prev"></div>',
    nextArrow: '<div class="arrow arrow-next"></div>',
    asNavFor: ".rooms-slider-big3",
    responsive: [{
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  }), $(".rooms-slider-big4").slick({
    infinite: !0,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !1,
    asNavFor: ".rooms-slider-mini4"
  }), $(".rooms-slider-mini4").slick({
    infinite: !0,
    slidesToShow: 3,
    focusOnSelect: !0,
    prevArrow: '<div class="arrow arrow-prev"></div>',
    nextArrow: '<div class="arrow arrow-next"></div>',
    asNavFor: ".rooms-slider-big4",
    responsive: [{
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  }), $(".rooms-slider-big5").slick({
    infinite: !0,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !1,
    asNavFor: ".rooms-slider-mini5"
  }), $(".rooms-slider-mini5").slick({
    infinite: !0,
    slidesToShow: 3,
    focusOnSelect: !0,
    prevArrow: '<div class="arrow arrow-prev"></div>',
    nextArrow: '<div class="arrow arrow-next"></div>',
    asNavFor: ".rooms-slider-big5",
    responsive: [{
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  }), $(".gallery-slider-big").slick({
    infinite: !0,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !1,
    asNavFor: ".gallery-slider-mini"
  }), $(".gallery-slider-mini").slick({
    infinite: !0,
    slidesToShow: 6,
    slidesToScroll: 1,
    focusOnSelect: !0,
    prevArrow: '<div class="arrow arrow-prev"></div>',
    nextArrow: '<div class="arrow arrow-next"></div>',
    asNavFor: ".gallery-slider-big",
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  })
});