<?php
if(!isset($_SESSION['NIVEL'])){

    print"<h1>No tienes permisos</h1>";

    include_once("footer.php");
    die();

}
?>