// Script JavaScript para mostrar y ocultar submenús
document.addEventListener('DOMContentLoaded', function () {
    var subMenu = document.querySelectorAll('.menu li');
  
    Submenu.forEach(function (menuItem) {
      if (menuItem.querySelector('ul')) {
        menuItem.classList.add('has-submenu');
  
      menuItem.addEventListener('click', function () {
          var submenu = this.querySelector('ul');
          submenu.style.display = (submenu.style.display === 'flex') ? 'none' : 'flex';
      });
    }
  });
});