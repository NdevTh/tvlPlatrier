var myNav = document.getElementById('dkfixed');
var myFooter = document.getElementById('footer');
window.onscroll = function () { 
    //"use strict";
     if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
        myNav.classList.add("nav-colored");
        myNav.classList.add("nav-fixed");
        myNav.classList.remove("nav-transparent");

        myFooter.classList.add("nav-colored");
        myFooter.classList.add("nav-fixed");
        myFooter.classList.remove("nav-transparent");
    } 
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("nav-colored");

        myFooter.classList.add("nav-transparent");
        myFooter.classList.remove("nav-colored");
    }
};

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

window.activeFunction = function(event) {
  // reset all menu items
  document.querySelectorAll('div a.active').forEach(function(item) {
  item.classList.remove('active');
})
  // mark as active selected menu item
  event.target.classList.add("active");
};