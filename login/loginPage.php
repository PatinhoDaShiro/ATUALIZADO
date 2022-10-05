

<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
       
    <link href="./css/styleL.css" rel="stylesheet">
    <title>Login</title>
</head>



<body>

<div class="container">

<div class="row col s12 m6 l6 offset-m3 offset-l3" id="fundo">

<div class="row col s12 hide-on-small-only">
<h1 id="titulo">Faça seu login</h1>
</div class="col s12">    

    <form class="col s12 hide-on-small-only" action="loginFunc.php" method="POST">
    <div class="row col s12">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="emailLogin" placeholder="">
          <label for="email">Email</label>
        </div>
      </div>
     
      <div class="row col s12">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate"  name="senhaLogin" placeholder="">
          <label for="password">Senha</label>
        </div>
      </div>
    
      <div class="row col s12">
         <button type="submit"
           class="btn">Login</button>
          </div>
       <p class="frase col s12 flow-text">Ainda não possui uma conta? <a href="<?php echo URL_BASE?>/Registro/registroPage.php" class="frase col s12 flow-text"><u>Clique aqui e crie uma!</u></a></p>
         
    </form>

    </div>
   
   </div>
   </div>
   

   </div>
 
 
   

  
<div class="row" id="fundo">
<div class="row col s12 show-on-small hide-on-med-and-up">
<h1 id="titulo">Faça seu login</h1>
</div class="col s12">    

<form class="col s12 show-on-small hide-on-med-and-up" action="loginFunc.php" method="POST">
    <div class="row col s12">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="emailLogin" placeholder="">
          <label for="email">Email</label>
        </div>
      </div>
     
      <div class="row col s12">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate"  name="senhaLogin" placeholder="">
          <label for="password">Senha</label>
        </div>
      </div>
    
      <div class="row col s12">
         <button type="submit"
           class="btn">Login</button>
          </div>
       <p class="frase col s12 flow-text">Ainda não possui uma conta? <a href="<?php echo URL_BASE?>/Registro/registroPage.php" class="frase col s12 flow-text"><u>Clique aqui e crie uma!</u></a></p>
         
    </form>
    </div>
   

 


         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      
         </body>
         </html>

