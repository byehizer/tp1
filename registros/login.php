<?php
session_start();
require_once("../conect/conect.php");

if($con){
    if(isset($_POST['usuario1']) && isset($_POST['pass1'])){
      $usuario=$_POST['usuario1'];
      $pass=$_POST['pass1'];
    }

    $consulta= "SELECT * FROM usuarios WHERE EMAIL='$usuario' AND CLAVE=MD5('$pass')";

   $resultado = mysqli_query($con,$consulta);
   $filas = mysqli_fetch_array($resultado);

   if($filas['NIVEL'] == 'Admin'){
        $_SESSION = $filas;
        header("Location: ../admin/index.php");

   }else{
        $_SESSION = $filas;
        header("Location: ../index.php");
   }


   if($filas == NULL){
     header("Location: ../index.php?error=ok");
   }

   if($filas['ESTADO'] == 'banneado'){
     header("Location: ../index.php?ban=ok");

   }

}


?>