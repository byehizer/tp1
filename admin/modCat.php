<?php
require_once("../conect/conect.php");
require_once("header.php");
require_once("../registros/admin.php");
require_once("../registros/ban.php");
if($con){
    if(isset($_GET['producto'])){

        $id=$_GET['producto'];

    }
    
    $consulta= "SELECT idproductos,nombre,imagen,descripcion FROM productos WHERE idproductos='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){

        $filas=mysqli_fetch_array($resultado);
        print "
        <div class='container-fluid'>
        <div class='row justify-content-center'><div class='col-lg-8'>
        <form action=modCat2.php method=post enctype='multipart/form-data'>
        <fieldset>Modificar $filas[nombre]</fieldset>
            <div>
                <label for=nombre class='em formulariolabel'>Nombre: </label>
                <input id=nombre name=nombre type=text value='$filas[nombre]'>

                <input name=id type=hidden value=$filas[idproductos]>

            </div>
            <div>
                <label for=img class='em formulariolabel'>Imagen</label>
                <input id=img name=img type=file >

            </div>
            <div>
                <label for='Des' class='em formulariolabel'>Descripcion</label>
                <textarea name='Des' id='Des' maxlength='250' value='$filas[descripcion]'></textarea>
        </div>
            <input type=submit value=Modificar />

        </form>
        </div></div></div>
        
        ";

    }
}
require_once("footer.php");
?>