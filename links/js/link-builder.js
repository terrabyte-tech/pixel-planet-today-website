window.addEventListener("load", function(){

  console.log("link-builder.js loaded");

  // created link section & row
  var createdSection, createdLink;

  // where the link sections will go
  var linkSectionsContainer = document.querySelector("[data-links-section-container]");

  // link section template
  var linkSectionTemplate = document.getElementById("links-section-template");
  var linkSectionElem = linkSectionTemplate.content.querySelector("[data-links-section]");

  // link template
  var linkTemplate = document.getElementById("link-template");
  var linkTemplateElem = linkTemplate.content.querySelector("[data-link-row]");

  // get JSON data
  fetch("./js/links.json")
    .then(response => response.json())
      .then(data => {

        for(let x = 0; x < data.linkSections.length; x++){

          createdSection = document.importNode(linkSectionElem, true);

          // set innerHTML of label
          createdSection.querySelector("[data-header-label]").innerHTML = data.linkSections[x].label;

          // append to link section container
          linkSectionsContainer.appendChild(createdSection);


          // get where the links will go (inside section)
          var linksContainer = createdSection.querySelector("[data-section-content]");

          // build links inside sections
          for(let y = 0; y < data.linkSections[x].linkItems.length; y++){

            createdLink = document.importNode(linkTemplateElem, true);

            // set link label
            createdLink.querySelector("[data-link-label]").innerHTML = data.linkSections[x].linkItems[y].label;

            // set href of a tag
            createdLink.href = data.linkSections[x].linkItems[y].href;

            // attach css class to row, if it exists
            if(!data.linkSections[x].linkItems[y].styleClass == ""){
              createdLink.classList.add(data.linkSections[x].linkItems[y].styleClass);
            }

            // set link icon, if it has custom one
            if(!data.linkSections[x].linkItems[y].icon == ""){
              createdLink.querySelector("[data-link-icon]").classList.add(data.linkSections[x].linkItems[y].icon);
            }
            

            // append to links section
            linksContainer.appendChild(createdLink);
          }


            


        }
      })

  ///////////////
  
}, false);