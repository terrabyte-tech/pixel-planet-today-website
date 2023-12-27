window.addEventListener("load", function(){

  console.log("header.js loaded");

  var headerElem = document.querySelector("[data-header]");

  // sticky banner
  function stickHeader(headerElem){

    if(window.scrollY > 220){
      headerElem.classList.add("scrolled");
    }
    else if(window.scrollY < 220){
      headerElem.classList.remove("scrolled");
    }
  }

  this.addEventListener("scroll", function(){
    if(headerElem !== null){
      stickHeader(headerElem);
    }
  });

},false);
