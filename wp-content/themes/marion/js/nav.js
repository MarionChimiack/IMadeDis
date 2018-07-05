window.onload = function() {

  var dotsIcon = document.getElementById("toggleMenu");
  var toggle = document.getElementById("toggleIcon");

  dotsIcon.addEventListener("click", function(){

    var mobileMenu = document.getElementById("mobileNav");
    var menu = document.getElementById("nav-full");

    if (mobileMenu.className === "nav-mobile") {

        mobileMenu.className += " open";
        toggle.classList.remove("fa-bars");
        toggle.className += " fa-times";


    } else {
        mobileMenu.className = "nav-mobile";
        toggle.classList.remove("fa-times");
        toggle.className += " fa-bars";

    }
  });
};
