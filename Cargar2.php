<center>
	<body bgcolor="violet">
<h2><b><font size="5" face="Arial"> 
<?php
$nombres=$_POST['Nombres'];
$ApellidoP=$_POST['ApellidoP'];
$Correo=$_POST['Correo'];

echo " Gracias " . $nombres . $ApellidoP . "<br/>";
echo "Se lo enviaremos a este correo: " .$Correo. "<br/>";
echo "<br/>";
echo "Nombres: ".$nombres. "<br/>";
echo "ApellidoP: ".$ApellidoP. "<br/>";
echo "Correo: ".$Correo. "<br/>";
 
?>
<br>
<center><font size="5"><a href="form.php"> Regresar </a></font></center>
</font>
</b>
</br>
</body>
</center>