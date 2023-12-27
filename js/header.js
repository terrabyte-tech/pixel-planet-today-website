window.addEventListener("load", function(){

  console.log("header.js loaded");

  var headerElem = document.querySelector("[data-header]");

  // on load
  if(headerElem !== null){
    stickHeader(headerElem);
  }

  // on scroll, run again
  this.addEventListener("scroll", function(){
    if(headerElem !== null){
      stickHeader(headerElem);
    }
  });

  // sticky header
  function stickHeader(headerElem){

    if(window.scrollY > 220){
      headerElem.classList.add("scrolled");
    }
    else if(window.scrollY < 220){
      headerElem.classList.remove("scrolled");
    }
  }

  // mobile menu
  var mobileMenuTrigger = document.querySelector("[data-mobile-menu-trigger]");

  if(mobileMenuTrigger !== null){
    mobileMenuTrigger.addEventListener('click', function(){
      headerElem.classList.toggle("menu-open");
      // mobileMenuTrigger.classList.toggle("show");
    })
  }

},false);
