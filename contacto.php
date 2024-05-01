<?php 
require_once("header.php");
require_once("registros/usuario.php");
require_once("registros/ban.php");
?>

    <main class="container-fluid">
        <div class="row justify-content-center margin">
            <div class="col-lg-4"><h1>CONTACTANOS</h1></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <form action="datos.php" method="post" enctype="multipart/form-data">
                    <div>
                      <label for="name" class="formulariolabel">Nombre:</label>
                      <input type="text" id="name" name="name">
                    </div>
                    <div>
                      <label for="mail" class="formulariolabel">Correo Electrónico:</label>
                      <input type="email" id="mail" name="mail">
                    </div>
                    <div>
                      <div>
                        <label for="celular" class="em formulariolabel">Telefono:</label>
                        <input type="tel" id="celular" name="celular">
                      </div>
                        <label for="nacimiento" class="em formulariolabel">Fecha de nacimiento:</label>
                        <input type="date" id="nacimiento" name="nacimiento">
                    </div>
                    <div>
                        <label for="seguro" class="em formulariolabel">Seguro que quieres informacion:</label>
                        <select name="seguro" id="seguro">
                            <option value="nada">Selecciona una opcion</option>
                            <option value="Moto">Seguro de moto</option>
                            <option value="Carro">Seguro de carro</option>
                            <option value="Bici">Seguro de bicicleta</option>
                            <option value="Salud">Seguro de salud</option>
                        </select>
                    </div>
                    <div>
                        <label for="img" class="em formulariolabel">Subir una imaben</label>
                        <input id="img" type="file" name="img" />
                    </div>
                    <div class="button">
                      <button type="submit">Envia tu mensaje</button>
                    </div>
                  </form>
            </div>    
           
        </div>

    </main>
<?php 
require_once("footer.php")
?>