<?php
require_once("../conect/conect.php");
require_once("header.php");
require_once("../registros/admin.php");
require_once("../registros/ban.php");
if($con){
    if(isset($_POST['Nombre']) and isset($_POST['Des']) ){

        $nombre=$_POST['Nombre'];
        $desc=$_POST['Des'];
        $hora= time();

        move_uploaded_file($_FILES ['img']['tmp_name'], "../img/".$hora.'.jpg');
        $foto=$hora.'.jpg';
    }
    
    $consulta= "INSERT INTO productos (nombre,imagen,descripcion) VALUE ('$nombre','$foto','$desc')"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        
        print "<div class='container-fluid'>
        <div class='row justify-content-center'><div class='col-lg-4'><h1 class='sinmargin'>El Producto $nombre fue agregada</h1></div></div>
        ";
        print "<div class='row justify-content-center'><div class='col-lg-4'><a href=index.php >Volver</a></div></div></div>";      
       
    }
}

require_once("footer.php");
?>