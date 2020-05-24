<html>
  <head>
  	<title> SOLICITUD DE EMPLEO</title>
  </head>
     <body bgcolor="sky blue">
      	<form action="cargar2.php" method="post">
      		<center><table border ="1.5"></center>
      			<center><font size="8">Solicitud de empleo</font></center>
      			<tr>
      			<td><label><font size="5">Fecha de Solicitud:</font></label>
      	        <input type="date" name="Fecha"></td>
      	  </tr>
      	  <tr>
      	  	<td><label><font size="5" for="ApellidoP">ApellidoP:</font></label>
            <input type="text" name="ApellidoP"></td>
        </tr>
        <tr>
           	<td><label><font size="5" for="ApellidoM">ApellidoM:</font></label>
      	    <input type="text" name="ApellidoM"></td>
      	   </tr>
      	   <tr>
      	 	<td><label><font size="5" for="Nombres">Nombres:</font></label>
    	    <input type="text" name="Nombres"></td>
    	  </tr>
    	  <tr>
    	  	<td><label><font size="5">Fecha de Nacimiento:</font></label>
      	    <input type="date" name="Fecha de Nacimiento"></td>
          </tr>
          <tr>
    	<td><label><font size="5" for="sexo">Sexo:</font></label>
    	  <input size="4" type="radio" name="sexo" value="Femenino"> Femenino
    	  <input type="radio" name="sexo" value="Masculino"> Masculino </td>
    	</tr>
    	

    	<tr>
    		<td><label for="colonia">Colonia:</label><input type="text" name="colonia">
    		<label for="domicilio">Domicilio:</label><input type="text" name="domicilio">
    		<label for="codigopos">Codigo Postal:</label><input type="text" name="codigopos"></td> 
    	</tr>
    	<tr>

        <td><label><font size="5" for="Estado Civil">Estado Civil:</font></label>
        <input type="radio" name="Estado Civil" name="Casado"> Casado
        <input type="radio" name="Estado Civil" name="Soltero"> Soltero
        <input type="radio" name="Estado Civil" name="Otro"> Otro </td>
       </tr>
       <tr>
       	<td><label><font size="5" for="edad">Edad:</font></label><input type="text" name="edad">
       		<label><font size="5" for="curp">Curp:</font></label>
       	<input type="text" name="curp"></td>
       </tr>
       <tr>
       		<td><center><label><font size="5" for="Nivel de estudios">Nivel de estudios:</font></label></center>
       		<center><select name="Estudios">
       		<option name="primaria">Primaria</option>
       		<option name="secundaria">Secundaria</option>
       		<option name="preparatoria">Preparatoria</option>
       		<option name="universidad">Universidad</option></center></td>
        </select>
        </tr>
        <tr>
         <td><label><font size="5" for="telefono">Telefono:</font></label>
         	<input type="text" name="telefono"></td>
         </tr>
         <tr>
         <td><label><font size="5" for="Correo">Correo electronico:</font></label>
         	<input type="text" name="Correo"></td>
         </tr>
         <tr>
         	<td><label><font size="5" for="enfermedad">Padece de alguna enfermedad?:</font></label>
         	<input type="radio" name="si"> Si 
         	<input type="radio" name="no"> No
         	<label><font size="5" for="cual">Cual?:</font></label>
         	<input type="text" name="cual"></td>
         </tr>
         <tr>
         	<td><label><font size="5" for="salud">Como considera su estado de salud actual?</font></label>
         	<input type="radio" name="bueno"> Bueno
         	<input type="radio" name="regular"> Regular
         	<input type="radio" name="malo"> Malo </td>
         </tr>
          <tr>
         	<td><label><font size="5" for="deporte">Practica algun deporte?:</font></label>
         	<input type="radio" name="si"> Si 
         	<input type="radio" name="no"> No
         	<label><font size="5" for="cual">Cual?:</font></label>
         	<input type="text" name="cual"></td>
         </tr>
         <tr>
            <td><label><font size="5" for="Idiomas">Idiomas que domina:</font></label>
         	<input type="text" name="Idiomas"></td>
         </tr>
         <tr>
            <td><label><font size="5" for="empleo">Como supo de este empleo?:</font></label>
         	<input type="text" name="empleo"></td>
         </tr>
         <tr>
         	<td><label><font size="5" for="ingresos">Tiene usted otros ingresos?:</font></label>
         	<input type="radio" name="si"> Si 
         	<input type="radio" name="no"> No </td>
         </tr>
        </table> 
            <font action="cargar2.php" method="post">
        	<p><input type="submit" value="Enviar datos" /></p></font>
    </form>
  </body>
</html>