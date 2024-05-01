<?php
require_once("../conect/conect.php");
require_once("header.php");
require_once("../registros/admin.php");
require_once("../registros/ban.php");
if($con){
    if(isset($_GET['producto'])){

        $id=$_GET['producto'];

    }
    
    $consulta= "DELETE FROM productos WHERE idproductos='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1>El producto fue eliminado</h1>";
        print "<a href=index.php >Volver</a>";      
       
    }
}

require_once("footer.php");
?>