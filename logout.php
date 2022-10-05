<?php
session_start();
if(isset($_SESSION)){
    session_destroy();
    header("Location:home.php");
}else{
    header("Location:home.php");
}

?>