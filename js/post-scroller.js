window.addEventListener("load", function(){

  var selectedContent = 0;
  var margLeft = 0;
  var margRightOffset = 0;

  //this will be rebuilt to create the content from this array as well
  let contentArray = ["test1", "test2", "test3", "test4"];


  setArrows();


  document.getElementById("left-arrow").addEventListener('click', function(){
    if(selectedContent < contentArray.length && selectedContent > 0){

      margLeft-=100;
      margRightOffset-=50;
      selectedContent--;

      setNewMargin();
      setArrows();
    }

  })

  document.getElementById("right-arrow").addEventListener('click', function(){
    if(selectedContent < contentArray.length - 1 && selectedContent >= 0){

      margLeft+=100;
      margRightOffset+=50;
      selectedContent++;

      setNewMargin();
      setArrows();
    }

  })

  function setNewMargin(){
    var marginCSS = "calc(-" + margLeft + "% + -" + margRightOffset + "px)";

    document.querySelector(".fact-content:first-child").style.marginLeft = marginCSS;

  }

  function setArrows(){
    document.getElementById("left-arrow").classList.add("hide");

    switch(selectedContent){
      case 0:
        document.getElementById("left-arrow").classList.add("hide");
        document.getElementById("right-arrow").classList.remove("hide");
        break;
      case (contentArray.length - 1):
        document.getElementById("left-arrow").classList.remove("hide");
        document.getElementById("right-arrow").classList.add("hide");
        break;
      default:
        document.getElementById("left-arrow").classList.remove("hide");
        document.getElementById("right-arrow").classList.remove("hide");
        break;
    }
  }
  
  
},false);
