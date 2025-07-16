import navbar from "../../Components/Navbar.js";

document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("navbar");
  container.innerHTML = navbar();

  const menuBtn = document.getElementById("menu_button");
  const closeBtn = document.getElementById("menu_close_sidebar");
  const sidebar = document.getElementById("menu_sidebar");

  menuButton.addEventListener("click", () => {
    openMenu(sidebar);
  });

  closeBtn?.addEventListener("click", () => {
    sidebar.style.display = "none";
  });
  

  fetch('diaria')
    .then(res => console.log(res.text()))
    .then(data => {
      if (data.success) {
        document.querySelector('.coin').textContent = data.nova_quantidade;
      } else {
        console.log(data.message);
      }
    })
    .catch(error => {
      console.error('Erro ao buscar moedas:', error);
    });
});
