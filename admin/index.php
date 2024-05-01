<?php
require_once("../conect/conect.php");
require_once("header.php");
require_once("../registros/admin.php");
require_once("../registros/ban.php");


if($con){

    print "<div class='container-fluid'>
        <div class='row justify-content-center'><div class='col-lg-4'><h1 class='sinmargin'>Bienvenido al panel ABM</h1></div></div>
        ";
    print "
    <div class='row justify-content-center'><div class='col-lg-4'><p class='jabon'>Altas Bajas y modificaciones</p></div></div>
    ";
    
    $consulta= "SELECT idproductos,nombre,descripcion FROM productos"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "
        <div class='row justify-content-center'><div class='col-lg-6'>
        <table>
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
         
        ";
        while($filas=mysqli_fetch_array($resultado)){
        
            print "
                <tr>
                    <td>$filas[nombre]</td>
                    <td><a href=modCat.php?producto=$filas[idproductos] >Modificar</a></td>
                    <td><a href=borrCat.php?producto=$filas[idproductos] >Eliminar</a></td>
                </tr>
            
            ";
    
    
        }

        print "
            </tbody>
            </table>
            </div></div>";

    }
    $consulta2= "SELECT ID,NOMBRE,EMAIL,NIVEL,ESTADO FROM usuarios"; 

    $resultado2= mysqli_query($con,$consulta2);

    if($resultado2){
        print "
        <div class='row justify-content-center'><div class='col-lg-6'>
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Nivel</th>
                <th>Bannear</th>
                <th>Desbannear</th>
            </tr>
        </thead>
        <tbody>
         
        ";
        while($filas=mysqli_fetch_array($resultado2)){
        
            print "
                <tr>
                    <td>$filas[ID]</td>
                    <td>$filas[NOMBRE]</td>
                    <td>$filas[EMAIL]</td>
                    <td>$filas[ESTADO]</td>
                    <td>$filas[NIVEL]</td>
                    <td><a href=Bannear.php?estado=$filas[ID] >Bannear</a></td>
                    <td><a href=Desbannear.php?estado=$filas[ID] >Desbannear</a></td>
                </tr>
            
            ";
    
    
        }

        print "
            </tbody>
            </table>
            </div></div>";

    }

}

?>
<div class='row justify-content-center'><div class='col-lg-8'>

<form action="altaProd.php"  method="post" enctype="multipart/form-data" >
    <fieldset>Agregar Producto</fieldset>
    <div>
        <label for="Nombre" class="em formulariolabel">Nombre</label>
        <input id="Nombre" name="Nombre" type="text" >
    </div>

    <div>
        <label for="Des" class="em formulariolabel">Descripcion</label>
        <textarea name="Des" id="Des" maxlength="250"></textarea>
    </div>

    <div>
        <label for="img" class="em formulariolabel">Subir una imagen</label>
        <input id="img" type="file" name="img" />
    </div>
    <input type="submit" value="Agregar Producto" >
    

</form></div></div></div>

<?php
require_once("footer.php")
?>