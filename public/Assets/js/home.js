import navbar from "../../Components/Navbar.js";

document.addEventListener("DOMContentLoaded", () => {
  const div = document.querySelector("navbar");
  div.innerHTML = navbar();

  const menuButton = document.getElementById("menu_button");
  const sidebarCloseButton = document.getElementById("menu_close_sidebar");
  const sidebar = document.getElementById("menu_sidebar");

  menuButton.addEventListener("click", () => {
    openMenu(sidebar);
  });

  sidebarCloseButton.addEventListener("click", () => {
    closeMenu(sidebar);
  });

  function openMenu(div) {
    div.classList.add('open');
  }

  function closeMenu(div) {
    div.classList.remove('open'); 
  }
});
