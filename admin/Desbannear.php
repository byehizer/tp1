<?php
require_once("../conect/conect.php");
require_once("header.php");
require_once("../registros/admin.php");
require_once("../registros/ban.php");
if($con){
    if(isset($_GET['estado']) ){

        $id=$_GET['estado'];
    }
    
    $consulta= "UPDATE usuarios SET ESTADO='activo' WHERE ID=$id"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        
        print "<div class='container-fluid'>
        <div class='row justify-content-center'><div class='col-lg-4'><h1 class='sinmargin'>El Usuario ha sido desbanneado</h1></div></div>
        ";
        print "<div class='row justify-content-center'><div class='col-lg-4'><a href=index.php >Volver</a></div></div></div>";
       
    }
}

require_once("footer.php");
?>