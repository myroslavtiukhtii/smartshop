jQuery(document).ready(function() {
    jQuery('.menu-link').click(function() {
        jQuery('.menu').toggleClass('active');
    });

    jQuery('.icon-search').click(function() {
      jQuery('.main-header__search').toggleClass('active');
  });

  document.addEventListener('click', function(event) {
    const searchContainer = document.querySelector('.main-header__search');
    const iconSearch = document.querySelector('.icon-search');

    if (!searchContainer.contains(event.target) && !iconSearch.contains(event.target)) {
        searchContainer.classList.remove('active');
    }
  });


});



function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 100;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);
