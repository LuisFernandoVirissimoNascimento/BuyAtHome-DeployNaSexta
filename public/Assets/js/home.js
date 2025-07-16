var sideBarOpened = true;

document.addEventListener("DOMContentLoaded", () => {
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
  document.addEventListener('keydown', function (event) {
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
        const hora = data.ultima_moeda.split(' ')[1];
        console.log(`Você ganhou 1 moeda agora, às ${hora}!`);
        document.querySelector('.coin').textContent = data.nova_quantidade;
      } else {
        if (data.ultima_moeda) {
          const hora = data.ultima_moeda.split(' ')[1];
          console.log(`Você já coletou moedas hoje, às ${hora}.`);
        } else {
          console.log('Você ainda não coletou moedas hoje.');
        }
        document.querySelector('.coin').textContent = data.nova_quantidade;
      }
    })
    .catch(error => console.error('Erro ao buscar moedas:', error));

  document.addEventListener('DOMContentLoaded', () => {
    const alertDiv = document.getElementById('moeda-alert');
    if (!alertDiv) return;

    if (sessionStorage.getItem('moedaAlertShown') !== 'true') {
      alertDiv.style.display = 'block';
      sessionStorage.setItem('moedaAlertShown', 'true');

      setTimeout(() => {
        alertDiv.style.display = 'none';
      }, 5000);
    }
  });

});
