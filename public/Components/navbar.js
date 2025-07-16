const navbar = () => {
  return `  <nav class="navbar">
    <div class="logo">
      <img class="logo_img" src="public/images/nav/logo.png">
      <img class="logo_text" src="public/images/nav/logo_text.png">
    </div>
    <div class="coins_menu_container">
      <p class="coin">2</p>
      <img class="icon" src="public/images/nav/moeda.svg">
      <img id="menu_button" class="menu icon" src="public/images/nav/menu.svg">
    </div>
  </nav>
  <div id="menu_sidebar" class="sidebar">
    <img id="menu_close_sidebar" class="close_sidebar_icon" src="public/images/nav/x.svg" alt="fechar">
    <ul class="sidebar_options">
      <div class="options_container">
        <img class="icon" src="public/images/nav/home.svg" alt="home">
        <li>Inicio</li>
      </div>
      <div class="options_container">
        <img class="icon" src="public/images/nav/promocao.svg" alt="promoção">
        <li>Promoções</li>
      </div>
      <div class="options_container">
        <img class="icon" src="public/images/nav/cupom.svg" alt="cupom">
        <li>Cupons</li>
      </div>
      <div class="options_container">
        <img class="icon" src="public/images/nav/sair.svg" alt="sair">
        <li>Sair</li>
      </div>
    </ul>
  </div>`;
};

export default navbar;