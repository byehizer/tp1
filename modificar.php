<?php
require_once("conect/conect.php");
require_once("header.php");
require_once("registros/usuario.php");
require_once("registros/ban.php");
if($con){
    if(isset($_POST['nueva']) ){
        $id=$_SESSION['ID'];
        $nueva=$_POST['nueva'];
    }
    
    $consulta= "UPDATE usuarios SET CLAVE=MD5('$nueva') WHERE ID=$id"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        
        print "<div class='container-fluid'>
        <div class='row justify-content-center'><div class='col-lg-4'><h1 class='sinmargin'>Se ha cambiado la contraseña</h1></div></div>
        ";
        print "<div class='row justify-content-center'><div class='col-lg-4'><a href=index.php >Volver</a></div></div></div>";
       
    }
}

require_once("footer.php");
?>