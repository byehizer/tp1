<?php 
require_once("header.php");
require_once("registros/usuario.php");
require_once("registros/ban.php");
?>

    <main class="container-fluid">
        <div class="row justify-content-center margin">
            <div class="col-lg-4"><h1>CAMBIAR CONTRASEÑA</h1></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <form action="" method="post" id="form" >
                    <div>
                      <label for="vieja" class="formulariolabel">Contraseña actual:</label>
                      <input type="password" id="vieja" name="vieja">
                    </div>
                    <div>
                      <label for="nueva" class="formulariolabel">Contraseña nueva:</label>
                      <input type="password" id="nueva" name="nueva">
                    </div>
                      <div>
                        <label for="dnvo" class="em formulariolabel">Repita contraseña</label>
                        <input type="password" id="dnvo" name="dnvo">
                      </div>
                    <div class="button">
                      <button type="submit" id="boton">Envia tu mensaje</button>
                    </div>
                  </form>
            </div>    
        </div>
    </main>
    <script>
        var pass = document.getElementById("vieja");
        var pass1 = document.getElementById("nueva");
        var pass2 = document.getElementById("dnvo");
        var passS="<?php echo $_SESSION['CLAVE']; ?>";
        var boton = document.getElementById("boton");
        
        var form = document.getElementById("form");


        boton.onclick = function(){
            if(pass1.value != pass2.value){
                alert("Las contraseñas no coinciden!!");
            }
            else if(pass.value==passS){
                alert("La contraseña anterior no coincide!");
            }
            else{
                form.action= "modificar.php";
            }

        }

    </script>
<?php 
require_once("footer.php")
?>