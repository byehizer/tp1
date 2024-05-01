<?php 
require_once("header.php")
?>

    <main class="container-fluid">
        <div class="row justify-content-center "><div class="col-lg-4 "><h1>Mira lo nuevo de LA CAJA!!!</h1></div></div>
    <div class="row justify-content-center">
    <div id="micarousel" class="carousel slide col-lg-9" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#micarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#micarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
   </div>
    <div class="carousel-inner">
  
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="img/banner1.png" alt="banner1" class="d-block w-100">
      </div>
      
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/banner2.png" alt="banner2" class="d-block w-100">
      </div>
  
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#micarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
  
    <button class="carousel-control-next" type="button" data-bs-target="#micarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

    <section class="row justify-content-center">
    <div class="col-lg-8">
      <form action="" method="post" class="formulario" id="form">
 
        <fieldset>
                <legend>Registrate</legend>
            <div>
                <label for="usuario" class="formulariolabel">Email</label>
                <input id="usuario" name="usuario" type="email"  required>
            </div>
            <div>
                <label for="pass" class="formulariolabel">Contraseña</label>
                <input id="pass" name="pass" type="password"  required>
            </div>
            <div>
            <label for="pass2" class="formulariolabel" >Repetir Contraseña</label>
            <input type="password" id="pass2" name="pass2" >
            </div>
            <div>
                <label for="nom" class="formulariolabel">Nombre</label>
                <input id="nom" name="nom" type="text"  required>
            </div>
            <div>
                <label for="ape" class="formulariolabel " >Apellido</label>
                <input id="ape" name="ape" type="text" required>
            </div>
            <div >
              <input type="submit" value="Registrate" id="boton">
            </div>
            
        </fieldset>
      </form>
    </div>
    </section>

    <?php 
      if(isset($_GET["alta"])){
        print"<div class='row justify-content-center'>
          <div class='col-lg-8'>
          <h2 class=mensaje >YA TE PODES LOGUEAR </h2>
          </div>
        </div>";
      }
    ?>
    <section class="row justify-content-center">
    <div class="col-lg-8">
      <form action="registros/login.php" method="post" class="formulario" >
        <fieldset>
            <legend>Ingresar</legend>
          <div>
              <label for="usuario1" class="formulariolabel" >Usuario</label>
              <input id="usuario1" name="usuario1" type="email" >
          </div>
          <div>
              <label for="pass1"  class="formulariolabel">Contraseña</label>
              <input id="pass1" name="pass1" type="password" >
          </div>
          <div><input type="submit" value="Ingresar"  ></div>
          
        </fieldset>
      </form>
    </div>
    </section>   

    <?php 
      if(isset($_GET["error"])){
        print"<div class='row justify-content-center'>
          <div class='col-lg-8'>
          <h2 class=mensajeerror>Error al ingresar contraseña y usuario</h2>
          </div>
        </div>";
      }
      if(isset($_GET["ban"])){
        print"<div class='row justify-content-center'>
          <div class='col-lg-8'>
          <h2 class=mensajeerror>Estas baneado</h2>
          </div>
        </div>";
      }
    ?>
    <script>
        var pass = document.getElementById("pass");
        var pass1 = document.getElementById("pass2");

        var boton = document.getElementById("boton");
        
        var form = document.getElementById("form");


        boton.onclick = function(){
            if(pass.value != pass1.value){
                alert("Las contraseñas no coinciden!!");
            }else{
                form.action= "registros/alta.php";
            }
        }

    </script>

  </main>
<?php 
require_once("footer.php")
?>