document.addEventListener('DOMContentLoaded', function() {
  var submenuToggles = document.querySelectorAll('.nav .top_menu');

  submenuToggles.forEach(function(toggle) {
    toggle.addEventListener('click', function(event) {
      var submenu = toggle.nextElementSibling;

      //hide all submenus
      var allSubmenus = document.querySelectorAll('.nav ul');
      allSubmenus.forEach(function(submenu) {
        submenu.style.display = 'none';
      });

      //show the clicked submenu
      submenu.style.display = 'block';

      //remove 'active' class from all top menu items
      submenuToggles.forEach(function(menuItem) {
        menuItem.classList.remove('active');
      });

      //add 'active' class to clicked top menu item
      toggle.classList.add('active');
    });
  });

  //show the "Men" submenu by default
  var defaultSubMenu = document.querySelector('.mn_submenu');
  defaultSubMenu.style.display = 'block';
  //addd 'active' class to the default top menu item
  var defaultTopMenu = document.querySelector('.top_menu');
  defaultTopMenu.classList.add('active');
});


//makes the black logo opacity 0 by fading 
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('blackLogoImg').style.opacity = '0';
  });

//changes from black logo to white logo function
function toggleLogo(isHovered) {
  var blackLogoImg = document.getElementById('blackLogoImg');

  if (isHovered) {
      //fading in black logo
      blackLogoImg.style.opacity = '1';
      blackLogoImg.style.transition = 'opacity 0.3s ease-in-out'; 
  } else {
      //fadign out the black logo
      blackLogoImg.style.opacity = '0';
      blackLogoImg.style.transition = 'opacity 0.5s ease-in-out';
  }
}



document.addEventListener('DOMContentLoaded', function() {
  //check if the URL contains a category related to women's clothing
  var urlParams = new URLSearchParams(window.location.search);
  var category = urlParams.get('category');

  if (category && category.includes('womens')) {
    //show the women's submenu and make it active
    var womensSubMenu = document.querySelector('.wmn_submenu');
    if (womensSubMenu) {
      womensSubMenu.style.display = 'block';
      var womensTopMenu = document.querySelector('.top_menu#women_menu');
      if (womensTopMenu) {
        womensTopMenu.classList.add('active');
      }
    }

    //remove 'active' class from the men's top menu item
    var mensTopMenu = document.querySelector('.top_menu#men_menu');
    if (mensTopMenu) {
      mensTopMenu.classList.remove('active');
    }
  }
});


