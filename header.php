<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
<body>
  <?php
  session_start();
  ?>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="img/descarga1.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

    <?php 
        $Paginas=array();

        $Paginas['Home']='index.php';
        if(isset($_SESSION['NIVEL'])){
          $Paginas['Contacto']='contacto.php';
          $Paginas['Productos']='Productos.php';
          $Paginas['Quienes somos']='quienessomos.php';
          $Paginas['Deslogearse']='registros/logout.php';
          $Paginas['Cambiar contraseña']='modificarcontrasena.php';
          if($_SESSION['NIVEL']=='admin'){
            $Paginas['Panel de admin']='admin/index.php';
          }
        }
        print '<ul class="navbar-nav">';

        foreach($Paginas as $nombres=>$links){

            print " <li class='nav-item'>
            <a class='nav-link' href=$links>$nombres <span class='sr-only'>(current)</span></a>
          </li>";
        
        }
        print '</ul>';
    ?>
  </div>
</nav>
    </header>