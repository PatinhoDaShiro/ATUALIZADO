<?php
session_start();
include '../conexao.php';
include '../config.php';
if(isset($_SESSION['userName'])){
}else{
    Header("Location:".URL_BASE."/login/loginPage.php");
}
include TEMPLATE_BASE.'/head.php';

?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" />
    <link rel="stylesheet" href="<?php echo URL_BASE?>/csspaginas/editarperfil.css" alt=""/>
    

</head>

<?php

include TEMPLATE_BASE.'/nav.php';

include TEMPLATE_BASE.'/opcoes.php';

?>
 
<body>  
  
  <script src="jquery.min.js"></script>  
  <script src="bootstrap.min.js"></script>
  <script src="croppie.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="croppie.css" />
    </head>  
    <body>  
           <div class="panel panel-default">
      <div class="panel-heading">Select Profile Image</div>
      <div class="panel-body" align="center">
       <input type="file" name="upload_image" id="upload_image" accept="image/*" />
       <br />
       <img src="../profilePics/<?php echo $imgPerf;?>">
      </div>
     </div>
    </body>  


<div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload & Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
       <div class="col-md-8 text-center">
        <div id="image_demo" style="width:350px; margin-top:30px"></div>
       </div>
       <div class="col-md-4" style="padding-top:30px;">
        <br />
        <br />
        <br/>
        <a href="perfil.php"><button class="btn btn-success crop_image">Crop & Upload Image</button></a>
     </div>
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
    </div>
</div>

<script>  
$(document).ready(function(){

 $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'circle' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
        }   
      });
    })
  });

});  
</script>
    <form action="upload.php" method="post">
      <h3>Alterar descrição:</h3>
    <textarea name="descriptionChange" id="textDescr" minLength="1" maxLength="2000"></textarea>
    <button type="submit">VAI!</button>
    </form>


    <form action="upload.php" method="post">
    <h3>Alterar Senha:</h3>
    <input name="alterarSenha" type="password" data-ls-module="charCounter" minLength="8" maxLength="32"></input>
    <button type="submit">VAI!</button>
    </form>

    <form action="upload.php" method="post">
    <h3>Alterar Nome:</h3>
    <input name="alterarNome" data-ls-module="charCounter" minLength="6" maxLength="16"></input>
    <button type="submit">VAI!</button>
    </form>
    <form action="upload.php" method="post">

    <h3>Alterar Email:</h3>
    <input name="alterarEmail" type="email" minLength="1" maxLength="140"></input>
    <button type="submit">VAI!</button>
    </form>
    
    



