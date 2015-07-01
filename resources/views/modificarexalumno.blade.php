<html>
<head>
<title>Actualizacion datos alumnos</title>
</head>
<BODY background="{!!('css/fondo.jpg')!!}"> 
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="{!!('css/bootstrap.min.css')!!}" rel="stylesheet">
<br></br>
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><font face="gabriola" color="#26CE53">~ Actualizacion de datos ~ EX-Alumnos ~</font></h1>
         <h2 class="blog-title"><font face="gabriola" color="#26CE53">Por favor Ingrese el Nit del EX-Alumno</font></h2><br></br>
        
  <table width="40%" height="100" border="0" align="left" cellpadding="11" cellspacing="11">
    <tr>
 <form id="form1" name="form1" method="get" action="{!!('buscarexal')!!}" >
    <td>
<center><button type="submit" style="background:#7EDB04; width:100px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Buscar</font></button></center>
    </td>
    <td width="400"><label>
      <input name="bus" type="text" id="bus" />
    </label>
    </div>
    </form>    
    </td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
    <center><tr>
    <td>
    <center><font size="5"color="black" face="gabriola">Nit</font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">Nombre</font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">apellido</font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">Edad    </font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">Año_salida</font></center>
    </td>
   </tr>
   </center>
   <tr>
   <td width="400"><label>
      <input name="nit" type="text" id="nit" />
    </label>     
    </td>
    <td width="400"><label>
      <input name="nom" type="text" id="nom" />
    </label>     
    </td>
    <td width="400"><label>
      <input name="ape" type="text" id="ape" />
    </label>     
    </td>
    <td width="400"><label>
      <input name="eda" type="text" id="eda" />
    </label>     
    </td>
    <td width="400"><label>
      <input name="anio" type="text" id="anio" />
    </label>     
    </td>
    <td>
   <button type="submit" style="background:#7EDB04; width:90px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Actualizar</font></button></a></td>
    </tr>
    <tr><td>
   </table>
  
    <a href ="{!!('registroexal')!!}"> <button type="submit" style="background:#7EDB04; width:90px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Atras</font></button></a></td></tr>
    </div>
       
</div>
</div>
</div>
</body>
</html>