<?php 

require_once("conect/conect.php");
require_once("header.php");
require_once("registros/usuario.php");
require_once("registros/ban.php");


if($con){
    print "<main class='container-fluid'>";
    print "<div class='row justify-content-center'>
    <div class='col-lg-4'>
    <h1>Productos</h1></div>
    </div>
    <div class='row justify-content-center'>";


    $consulta = "SELECT nombre,descripcion,imagen,idproductos  FROM productos ";

    $resultado = mysqli_query($con,$consulta);

    $cont= 1;
    
    
   
    while($filas=mysqli_fetch_array($resultado)){

        if($cont%2!=0 and $cont!=1){
            print"<div class='row justify-content-center'>";
        }
        
        print "
                    <div class='col-lg-5 producto'>
                        <h1 class='productoh1'>$filas[nombre]</h1>
                        <div class='contenedor-img hola'><img src='img/$filas[imagen]' alt='producto'></div>
                        <p>$filas[descripcion]</p>
                    </div>";
        if($cont==2){
             print"</div>";
        }
        $cont++;
    }
 
    
    print"</div></main>";

}
?>
<?php 
require_once("footer.php")
?>