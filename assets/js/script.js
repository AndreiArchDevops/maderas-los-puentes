// Script para el menú hamburguesa y animaciones básicas
document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');

  menuToggle.addEventListener('click', function() {
    // Alterna la visualización del menú en dispositivos móviles
    if(menu.style.display === "flex") {
      menu.style.display = "none";
    } else {
      menu.style.display = "flex";
      menu.style.flexDirection = "column";
    }
  });
});
