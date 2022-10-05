<?php
session_start();

error_reporting(E_WARNING);
include 'chat-conection.php';
include 'config.php';
if(isset($_SESSION['userName'])){
}else{
    Header("Location:".URL_BASE."/login/loginPage.php");
}
include TEMPLATE_BASE.'/head.php';
include TEMPLATE_BASE.'/nav.php';


?>
<link rel="stylesheet" href="<?php echo URL_BASE?>/csspaginas/chws.css" alt="">
</head>
<body>
    <div class="row">

    <div class="divs col l3 hide-on-med-and-down centralizar" id="left" >
    <span class="grey-text flow-text "><strong>Menu de Chats</strong> </span>

      <div class="row col l10 offset-l1" >
<div class="col l12 bordinha ">
  <div class="grey darken-4">
<img src="https://pic.clubic.com/v1/images/1715435/raw" alt="" class="responsive-img bordinha" >
<span class="orange-text darken-4 flow-text "><strong>LEAGUE OF LEGENDS</strong> </span><br>
<div class="dropdown-trigger blue lighten-2" data-target='dropdown2'>

  <span class="black-text lighten-2 centered"><strong>VER TODOS OS LOBBY</strong></span>

</div>


</div>
      </div>
      </div> 
    </div>
  
    <ul id='dropdown2' class='dropdown-content'>
    <li><a href="#!" class="centralizar lobby">Lobby 1</a></li>
    <li><a href="#!" class="centralizar lobby">Lobby 2</a></li>
    <li><a href="#!" class="centralizar lobby">Lobby 3</a></li>
    <li><a href="#!" class="centralizar lobby">Lobby 4</a></li>
    <li><a href="#!" class="centralizar lobby">Lobby 5</a></li>
    </ul>

<script>


  document.addEventListener('DOMContentLoaded',function drop() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
    }

   
  );</script>

    <div class="divs col s12 l6" >    
    <iframe src="./chat/src/index.php" id="iframes" ></iframe>
    </div>

    <div class="col l3 hide-on-small-only">
    <ul class="collection hide-on-med-and-down" id="right" >
    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/originals/c3/a5/b3/c3a5b332f9716abb1c67da38a12595e8.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Yen</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/originals/46/fc/ea/46fceacf44dcc4ee00501ca2891d9814.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">José</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://gamenewsbrazil.files.wordpress.com/2013/01/dmc_4_dante-wallpaper-1600x900.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Warrior</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Pikachu</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://images3.alphacoders.com/857/857335.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Gerald</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://images8.alphacoders.com/409/409477.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Pato</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxGRzDqtOS4_VciL7e4DetDlq0itzhw1mUkg&usqp=CAU" alt="" class="circle">
      <p class="grey-text lighten-4">Darkness</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://cdn.clickwallpapers.net/images/clickwallpapers-the-simpsons-cartoon-wallpaper-in-4k-img4.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Pedro</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://tecurius.files.wordpress.com/2011/05/255bdibosdownload-blogspot-com255d_full-hd-mixed-wallpapers-pack-91-by-smpx_1121.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">LightUser</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://www.techreviews.com.br/wp-content/uploads/2020/04/VZI-0-monitor-hd-davidx-rq7e1qwspey-unsplash-scaled.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Boxer</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://images4.alphacoders.com/775/775059.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Lux</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyKcxfE_4sFkXweOpqhQYLiqMRrhaA1ToQrA&usqp=CAU" alt="" class="circle">
      <p class="grey-text lighten-4">Rakan</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://wallpaper29.files.wordpress.com/2017/07/dragon-ball-z-wallpaper-full-hd-1600x900.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Lucky</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://i.pinimg.com/736x/ff/c3/ec/ffc3ecca07adbdde46c6d8c88004c0fd.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Xayah</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://www.publicitarioscriativos.com/wp-content/uploads/2018/01/16-mil-cartazes-de-filmes-e-series-em-hd-sem-textos-1.jpg" alt="" class="circle">
      <p class="grey-text lighten-4">Jess</p> 
    </li>

    <li class="collection-item avatar grey darken-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtVfnqOLfSF4LPOliNBMQgA-XC01CKR5Kqvw&usqp=CAU" alt="" class="circle">
      <p class="grey-text lighten-4">Suporte</p> 
    </li>




  </ul>
    </div>

    </div>
</body>