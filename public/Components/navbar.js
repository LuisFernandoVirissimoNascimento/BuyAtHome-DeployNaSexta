const navbar = () => {
  return `
    <nav class="navbar">
      <div class="logo">
        <img class="logo_img" src="/public/images/nav/logo.png" alt="Logo">
        <img class="logo_text" src="/public/images/nav/logo_text.png" alt="Logo Text">
      </div>
      <div class="coins_menu_container">
        <p class="coin"></p>
        <img class="icon" src="/public/images/nav/moeda.svg" alt="Moeda">
        <img id="menu_button" class="menu icon" src="/public/images/nav/menu.svg" alt="Menu">
      </div>
    </nav>
    <div id="menu_sidebar" class="sidebar">
      <img id="menu_close_sidebar" class="close_sidebar_icon" src="/public/images/nav/x.svg" alt="Fechar">
      <ul class="sidebar_options">
        <div class="options_container">
          <img class="icon" src="/public/images/nav/home.svg" alt="Home">
          <li>Inicio</li>
        </div>
        <div class="options_container">
          <img class="icon" src="/public/images/nav/promocao.svg" alt="Promoção">
          <li>Promoções</li>
        </div>
        <div class="options_container">
          <img class="icon" src="/public/images/nav/cupom.svg" alt="Cupom">
          <li>Cupons</li>
        </div>
        <div class="options_container">
          <img class="icon" src="/public/images/nav/sair.svg" alt="Sair">
          <li>Sair</li>
        </div>
      </ul>
    </div>
  `;
};

export default navbar;
