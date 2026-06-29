window.addEventListener("load", function(){

  console.log(`[${window.siteData.project}] site-scripts.js loaded`);

  // Add a class to the body element to indicate that the page has loaded
  document.body.classList.add("loaded");

  // custom script here
  
}, false);