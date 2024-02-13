// scripts to manage header behavior

window.addEventListener("load", function(){

  console.log("header.js loaded");

  var headerElem = document.querySelector("header#masthead");

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

},false);