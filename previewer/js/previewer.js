window.addEventListener("load", function(){

  // build categories and options from array (future things)
  // let bgs = [
  //   ["Apple",
  //     ["charcoal", "creme"]
  //   ],
  //   ["Android",
  //     ["grey", "green"]
  //   ],
  //   ["Windows",
  //     ["blue", "teal"]
  //   ]
  // ];

  var bgButtons = document.querySelectorAll(".bg-button");

  for(i = 0; i < bgButtons.length; i++){
    bgButtons[i].addEventListener('click', function(){

      for(x = 0; x < bgButtons.length; x++){
        bgButtons[x].classList.remove("selected");
      }
      this.classList.add("selected");

      buildFilePath();

    })
  }

  document.getElementById("show-options-hamburger").addEventListener('click', function(){
    document.getElementById("previewer-controls").classList.add("shown");
  })

  document.getElementById("close-options-x").addEventListener('click', function(){
    document.getElementById("previewer-controls").classList.remove("shown");
  })


  var selectedDeviceCheckbox = document.getElementById("mobile-checkbox");

  selectedDeviceCheckbox.addEventListener('change', function(){
    var selectedDevice = checkDeviceSelected();

    document.querySelector(".previewer-frame.shown").classList.remove("shown");

    document.getElementById(selectedDevice + "-previewer").classList.add("shown");

    // if(selectedDevice == "mobile"){
    // document.getElementById("previewer-frame-container").classList.add(selectedDevice + "-preview");
    document.getElementById("previewer-frame-container").classList.toggle("mobile-preview");
    document.getElementById("previewer-frame-container").classList.toggle("desktop-preview");

    // }

    buildFilePath();
  })

  function checkDeviceSelected(){
    if(selectedDeviceCheckbox.checked){
      return "mobile";
    }
    else{
      return "desktop";
    }
  }


  function buildFilePath(){
    var selectedButton = document.querySelector(".bg-button.selected");
    var selectedOS = selectedButton.getAttribute("data-os");
    var selectedColor = selectedButton.getAttribute("data-color");

    var selectedDevice = checkDeviceSelected();

    //build file path from selected button attributes
    var fileName = selectedDevice + "-" + selectedOS + "-" + selectedColor;
    var fullFilePath = "downloadables/" + fileName + ".png";


    //set background image to the new 
    document.getElementById(selectedDevice + "-previewer").style.backgroundImage = "url(" + fullFilePath + ")";
    
    // document.querySelector(".preview-image.shown").classList.remove("shown");
    // document.getElementById(fileName).classList.add("shown");


    //set download button
    document.getElementById("download-link").setAttribute("href", fullFilePath);

    document.getElementById("previewer-controls").classList.remove("shown");
  }


  // function previewSelection(selectedDevice, selectedOS, selectedColor){
  //   console.log(selectedDevice + selectedOS + selectedColor);

  //   var filePath = "url(downloadables/" + selectedDevice + "-" + selectedOS + "-" + selectedColor + ".png)";
  //   console.log(filePath);

  //   document.getElementById("computer-previewer").style.backgroundImage = filePath;
  // }

},false);