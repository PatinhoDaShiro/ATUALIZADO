<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include '../conexao.php';
include '../config.php';
if(isset($_SESSION['userName'])){
}else{
    Header("Location:".URL_BASE."/login/loginPage.php");
}
include TEMPLATE_BASE.'/head.php';
include TEMPLATE_BASE.'/nav.php';
include TEMPLATE_BASE.'/opcoes.php';
$user = $_SESSION['userName'];

 $query = "select usuario, imgPerf, descricao from usuarios where usuario = '$user'";
 //envia os dados e compara no banco
 $result = mysqli_query($conexao, $query);
 $row = mysqli_num_rows($result);
 if($row == 1){
     $dados = mysqli_fetch_assoc($result);
     $SessionUser = $dados;
     $_SESSION['userName'] = $SessionUser['usuario'];
     $user = $_SESSION['userName'];
     $_SESSION['imgPerf'] = $SessionUser['imgPerf'];
     $imgPerf = $_SESSION['imgPerf'];
     $_SESSION['description'] = $SessionUser['descricao'];
     $descricao = $_SESSION['description'];
 }


?>
