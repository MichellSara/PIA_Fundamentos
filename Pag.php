<html>
<head>
<title> Conversiones </title>
</head>
<body bgcolor="Pink">
<form method=post action="" align="left">
 <p align=center>Pesos:</p><input style="margin-Left: 75px" type=textbox
 name=Pesos>
  <p align=center>Dolares:</p><input style="margin-Left: 75px" type=textbox
 name=Dolares> <br>
 <input style="MARGIN-LEFT: 125px" value=Enviar type=submit>
</form>

 <?php

 if(isset($_POST['Pesos']))
 {
  $Pesos=$_POST['Pesos'];
  $Dolares=$_POST['Dolares'];
  $Resultado=($Pesos)/($Dolares);
  echo("<h2>El numero de Pesos es: $Pesos <br>");
  echo("El numero de Dolares es: $Dolares <br>"); 
  echo("El resultado es: $Resultado");
 }

?>
</body>
</html>