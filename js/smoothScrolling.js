//on load, namespace
window.addEventListener("load", function(){

  document.getElementById("hero-option-yes").addEventListener('click', function(){
    document.getElementById("what-the-project-anchor").scrollIntoView({
      behavior: 'smooth'
    })
  })

  document.getElementById("see-examples-link").addEventListener('click', function(){
    document.getElementById("recent-posts-anchor").scrollIntoView({
      behavior: 'smooth'
    })
  })

  document.getElementById("how-to-support-link").addEventListener('click', function(){
    document.getElementById("support-anchor").scrollIntoView({
      behavior: 'smooth'
    })
  })

  document.getElementById("what-else-link").addEventListener('click', function(){
    document.getElementById("newsletter-anchor").scrollIntoView({
      behavior: 'smooth'
    })
  })

  

  

}, false);