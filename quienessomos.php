<?php 
require_once("header.php");
require_once("registros/usuario.php");
require_once("registros/ban.php");
?>

    <main class="main">
        <div class="contenedor-acordeon">
            <h1>Preguntas frecuentes</h1>
            <div class="acordeon">
                <input type="radio" name="acordeon" id="btn-acordeon1" class="btn-acordeon">
                <label for="btn-acordeon1">
                    ¿Cuál es la vigencia del seguro?
                </label>
                <div class="contenido-acordeon">
                    <p>El seguro es mensual y comenzará a regir desde la fecha y por los capitales estipulados en el frente de póliza. La renovación del seguro se hará en forma automática al término de cada período mensual de cobertura. Para que esto suceda, al vencimiento de cada mensualidad, el cliente debe abonar el importe por adelantado de la vigencia que desea renovar.
                        <br>
                        Por lo tanto si no abona en término no adhiere a la continuidad del seguro. Vencido el plazo para el pago de la cobertura, se podrá aceptar el pago de la misma dentro de los 5 días corridos desde aquel vencimiento, no obstante la cobertura no entrará en vigencia hasta las 0hs del día siguiente al que La Caja reciba el importe vencido.</p>
                </div>
            </div>
            <div class="acordeon">
             <input type="radio" name="acordeon" id="btn-acordeon2" class="btn-acordeon">
             <label for="btn-acordeon2">
                ¿Cuándo puedo dar de baja la póliza?
             </label>
             <div class="contenido-acordeon">
                 <p>En cualquier momento de la vigencia con un simple llamado al Centro de Atención al Cliente y una nota firmada, la cual podés enviar por fax al N° que te brindará el operador, o dirigiéndote personalmente a cualquiera de nuestras sucursales.</p>
             </div>
         </div>
         <div class="acordeon">
             <input type="radio" name="acordeon" id="btn-acordeon3" class="btn-acordeon">
             <label for="btn-acordeon3">
                ¿Qué es la Franquicia?
             </label>
             <div class="contenido-acordeon">
                 <p>La franquicia es el monto con el que participás en caso de un siniestro y que queda a tu cargo.
                    <br>
                    Este monto, es variable según el precio del 0Km correspondiente a tu vehículo (debes tener en cuenta que en caso de que el vehículo asegurado no se continúe fabricando se estima un precio de referencia según las características del automóvil) o del monto del siniestro. A partir de esa suma, nos haremos cargo de la diferencia hasta completar el monto de la reparación de tu vehículo en caso de siniestro cubierto.
                    <br>
                    Recordá que participarás en cada siniestro con una franquicia, por ejemplo, si reclamara en forma conjunta la indemnización por la reparación de los daños provenientes de un choque por un lado, y por otro la reparación de unos daños de estacionamiento, como tales daños provienen de 2 eventos distintos, se deducirán de la indemnización que correspondiere a cada evento, que será el importe equivalente a UNA (1) franquicia en cada caso.</p>
             </div>
         </div>
         <div class="acordeon">
             <input type="radio" name="acordeon" id="btn-acordeon4" class="btn-acordeon">
             <label for="btn-acordeon4">
                ¿Puedo asegurar mi casa en dólares?
             </label>
             <div class="contenido-acordeon">
                 <p>Los contratos de seguro de hogar, solo podrán ser emitidos en Pesos, no obstante para mantener el valor de las coberturas, se puede contratar la cláusula de ajuste.</p>
             </div>
         </div>
        </div>
    </main>
<?php 
require_once("footer.php")
?>