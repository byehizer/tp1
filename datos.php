<?php
require_once("header.php");
require_once("registros/usuario.php");
require_once("registros/ban.php");
?>
<main class="container-fluid">
<div class="row justify-content-center">
    <div class="col-lg-5">
        <h1>Gracias por enviar tus datos, los cuales son los siguientes:</h1>
    </div>
</div>
<div class="row justify-content-center ">
    <div class="col-lg-8 ">
        <?php 
            $name;
            $mail;
            $celular;
            $nacimiento;
            $seguro;
            $img;
            $temporal;

            print "<ul>";
            if(isset($_POST["name"])){
                $name=$_POST["name"];
                print"<li class='centrar'>$name</li>";
            }
            if(isset($_POST["mail"])){
                $mail=$_POST["mail"];
                print"<li class='centrar'>$mail</li>";
            }
            if(isset($_POST["celular"])){
                $celular=$_POST["celular"];
                print"<li class='centrar'>$celular</li>";
            }
            if(isset($_POST["nacimiento"])){
                $nacimiento=$_POST["nacimiento"];
                print"<li class='centrar'>$nacimiento</li>";
            }
            if(isset($_POST["seguro"])){
                $seguro=$_POST["seguro"];
                print"<li class='centrar'>$seguro</li>";
            }
            print "</ul>";

            $img=time().".jpg";
            $temporal=$_FILES["img"]["tmp_name"];

            move_uploaded_file("$temporal","img/$img");
            print"<img src=img/$img alt='imagen subida' class='hola'>";
            
        ?>
    </div>

</div>


</main>




<?php
require_once("footer.php");
?>