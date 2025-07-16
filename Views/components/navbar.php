 <nav class="navbar">
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
         <button class="options_container" onclick="window.location.href='<?php echo $_ENV['APP_URL'] . route('homepage');  ?>'">
             <img class="icon" src="public/images/nav/home.svg" alt="home">
             <li>Inicio</li>
         </button>
         <button class="options_container" onclick="window.location.href='<?php echo $_ENV['APP_URL'] . route('lista_descontos');  ?>'">
             <img class="icon" src="public/images/nav/cupom.svg" alt="cupom">
             <li>Cupons</li>
         </button>
         <button class="options_container" onclick="window.location.href='<?php echo $_ENV['APP_URL'] . route('logout'); ?>'">
             <img class="icon" src="public/images/nav/sair.svg" alt="sair">
             <li>Sair</li>
         </button>
     </ul>
 </div>