<?php
session_start();
$user = $_SESSION['userName'];
include '../conexao.php';
include '../config.php';
error_reporting(E_ALL ^ E_NOTICE);


if(isset($_POST["image"])){
    $data = $_POST["image"];

    $image_array_1 = explode(";", $data);
   
    $image_array_2 = explode(",", $image_array_1[1]);
   
    $data = base64_decode($image_array_2[1]);
   
    $imageName = md5(time()) . '.png';
    $pasta = DIR_PATH."/profilePics/";
    file_put_contents($imageName, $data);
    $pastaImgs = "$pasta/$imageName";
    rename($imageName, $pastaImgs);

    $sql_code = "UPDATE usuarios SET imgPerf = '$imageName' WHERE usuario = '$user'";
    mysqli_query($conexao, $sql_code);
}

if(isset($_POST["descriptionChange"])){
    $descricao = $_POST["descriptionChange"];
    if($descricao != "" || $descricao != null){
        $query = "UPDATE usuarios SET descricao = '$descricao' where usuario = '$user'";
        mysqli_query($conexao, $query);
        header("Location:".URL_BASE."perfil/modificarPerfil.php");
    }else{
        header("Location:".URL_BASE."perfil/modificarPerfil.php");
    }
}

if(isset($_POST["alterarSenha"])){
    $senha = $_POST["alterarSenha"];
    if($senha != "" || $senha != null){
        $query = "UPDATE usuarios SET senha = md5('$senha') where usuario = '$user'";
        mysqli_query($conexao, $query);
        header("Location:".URL_BASE."perfil/modificarPerfil.php");
    }else{
        header("Location:".URL_BASE."perfil/modificarPerfil.php");
    }
        
}

if(isset($_POST["alterarNome"])){
    $nome = $_POST["alterarNome"];
    if($nome != "" || $nome != null){
        $query = "UPDATE usuarios SET usuario = '$nome' where usuario = '$user'";
        mysqli_query($conexao, $query);
        session_start();
        $_SESSION['userName'] = $nome;
        $user = $nome;
        header("Location:".URL_BASE."perfil/modificarPerfil.php");
    }else{
        header("Location:".URL_BASE."perfil/modificarPerfil.php");
    }
        
}

if(isset($_POST["alterarEmail"])){
    $email = $_POST["alterarEmail"];
    if($email != "" || $email != null){
        $query = "UPDATE usuarios SET email = '$email' where usuario = '$user'";
        mysqli_query($conexao, $query);
        header("Location:".URL_BASE."perfil/modificarPerfil.php");
    }else{
        header("Location:".URL_BASE."perfil/modificarPerfil.php");
    }
        
}
?>