<?php
$nombre=$_GET['nombre'];
$asunto=$_GET['asunto'];
$email=$_GET['email'];

echo"<h2> Gracias por escribirnos </h2>";
echo "Se le envio informacion a este correo: " . $email . "<br/>";

?>
<a href="http://localhost/Sara/pagina.php#">Regresar</a>