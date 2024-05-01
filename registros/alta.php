<?php
session_start();
require_once("../conect/conect.php");

if($con){
    if(isset($_POST['usuario']) && isset($_POST['pass']) && isset($_POST['ape'])){
        $usuario=$_POST['usuario'];
        $pass=$_POST['pass'];
        $nom=$_POST['nom'];
        $ape=$_POST['ape'];
    }

    $consulta ="INSERT INTO usuarios SET NOMBRE='$nom', APELLIDO='$ape', EMAIL='$usuario', CLAVE=MD5('$pass'), NIVEL='usuario', FECHA_ALTA=NOW()";

    mysqli_query($con,$consulta);

    header("Location: ../index.php?alta=ok");

}


?>