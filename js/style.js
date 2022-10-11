// start active nav

let active = document.querySelectorAll(".collapse a");
active.forEach(function (element) {
  if (element.getAttribute("href") == window.location.pathname)
    element.classList.add("nav-active");
});

// end active nav

// start scrollup
let toTop = function () {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    window.scrollBy(0, -50);
    setTimeout(toTop, 5);
  }
};

window.onscroll = function () {
  let scrolled = window.pageYOffset || document.documentElement.scrollTop;
  if (scrolled > 400) {
    document.querySelector(".scrollup").style.display = "block";
  } else {
    document.querySelector(".scrollup").style.display = "none";
  }
};
// end scrollup

// START FORM SEND MAIL

$(function () {
  $("#send-form").submit(function () {
    $.ajax({
      type: "POST",
      url: "send.php",
      data: $(this).serialize(),
    }).done(function () {
      $(".contacts__massage")
        .addClass("active-form")
        .css("display", "flex")
        .hide()
        .fadeIn();
      setTimeout(function () {
        jQuery("#send-form").trigger("reset");
        $(".contacts__massage").removeClass("active-form").fadeOut();
      }, 3000);
    });
    return false;
  });
});

// END FORM SEND MAIL

// start lightbox change default options

lightbox.option({
  showImageNumberLabel: false,
  wrapAround: true,
});

// end lightbox change default options
