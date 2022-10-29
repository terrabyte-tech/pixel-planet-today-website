window.addEventListener("load", function(){

  //set date in footer
  var currentDate = new Date();
  var currentYear = currentDate.getFullYear();

  var copyrightSpan = document.getElementsByClassName("copyright-date")[0];

  copyrightSpan.appendChild(document.createTextNode(currentYear));
  
  
},false);
