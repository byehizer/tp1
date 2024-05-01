<?php
if($_SESSION['ESTADO']=='banneado'){

    print"<h1 class=mensajeerror>Estas banneado</h1>";

    include_once("footer.php");
    die();

}
?>