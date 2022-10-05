<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo URL_BASE?>/templates/css/style.css" alt="">

<nav>
  
    <div class="nav-wrapper blue darken-3">
      <a href="#!" class="brand-logo"><img id="logoimg" src="<?php echo URL_BASE?>/imagens/logo.png" alt=""  ></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><?php
          
          if(!isset($_SESSION['userName'])){
            echo "<a href=".URL_BASE."/login/loginPage.php>Iniciar sessão";

          }else{
            $name=$_SESSION['userName'];
            echo "<a href=".URL_BASE."/perfil/perfil.php>".$name;

            } ;

        
        ?></li></a></li>
    
      </ul>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-demo">
  <li><?php 
          if(!isset($_SESSION['userName'])){
            echo "<a href=".URL_BASE."/login/loginPage.php>Iniciar sessão";

          }else{
            $name=$_SESSION['userName'];
            echo "<a href=''>".$name;

            } ;
 
          ?></a></li>
        <li><a href="">Configurações</a></li>
    <li><a href="<?php echo URL_BASE?>/index.php">Chats</a></li>
  </ul>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
  </script>