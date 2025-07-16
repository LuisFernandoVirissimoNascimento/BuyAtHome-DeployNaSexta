
var sideBarOpened = true

document.addEventListener("DOMContentLoaded", () => {
  

  const menuButton = document.getElementById("menu_button");
  const sidebarCloseButton = document.getElementById("menu_close_sidebar");
  const sidebar = document.getElementById("menu_sidebar");

  
  menuButton.addEventListener("click", () => {
    openMenu(sidebar);
  });

  sidebarCloseButton.addEventListener("click", () => {
    closeMenu(sidebar);
  })

  function openMenu(div) {
    div.style.display = "flex";
  }

  function closeMenu(div) {
    div.style.display = "none"
  }
  document.addEventListener('keydown', function(event) {
    
    console.log('Tecla pressionada:', event.key); // Ótimo para depurar e descobrir o nome de outras teclas!
  
    if (event.key === 'Escape') {
      if (sideBarOpened == true){
        openMenu(sidebar);
        sideBarOpened = false;
      } else if (sideBarOpened == false) {
        closeMenu(sidebar)
        sideBarOpened = true;
      }
    }
  });



  


});
