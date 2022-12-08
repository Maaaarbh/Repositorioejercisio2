
<?php
//Creo el formulario que se solicita


$Nombres = $_GET ['Nombres'];
$Apellidos =$_GET ['Apellidos'];
$Ciudad =$_GET ['Ciudad'];
$Fecha_inicio =$_GET ['Fecha_inicio'];
$Foto = $_FILES ['Foto'];
$Comprobante_de_pago = $_FILES ['Comprobante_de_pago'];


echo "<h2>Informacion recibida desde PHP</h2>";
echo "Los Nombres recibidos son:" .$Nombres. "<br/>";
echo "Los Apellidos recibidos son:" .$Apellidos. "<br/>";
echo "La Ciudad recibida es:" .$Ciudad. "<br/>";
echo "La Fecha_inicio recibida es:" .$Feha_inicio. "<br/>";
echo "La Foto recibida es:" .$Foto. "<br/>";
echo "El Comprobante_de_pago recibido es:" .$Comprobante_de_pago. "<br/>"; 

?>