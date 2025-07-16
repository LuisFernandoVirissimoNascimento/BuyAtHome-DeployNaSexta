var sideBarOpened = true;

document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("menu_button");
  const closeBtn = document.getElementById("menu_close_sidebar");
  const sidebar = document.getElementById("menu_sidebar");

  menuBtn.addEventListener("click", () => {
    openMenu(sidebar);
  });

  closeBtn?.addEventListener("click", () => {
    sidebar.style.display = "none";
  });

  document.addEventListener('keydown', function (event) {
    console.log('Tecla pressionada:', event.key);

    if (event.key === 'Escape') {
      if (sideBarOpened == true) {
        openMenu(sidebar);
        sideBarOpened = false;
      } else if (sideBarOpened == false) {
        closeMenu(sidebar);
        sideBarOpened = true;
      }
    }
  });

  fetch('diaria')
    .then(res => res.json()) 
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
