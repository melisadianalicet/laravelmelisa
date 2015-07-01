<html>
<head>
<title>Modificar asignatura alumnos</title>
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
       <center> <h1 class="blog-title"><font face="gabriola" color="#26CE53">~ Modificar Asignatura ~ Alumnos ~</font></h1>
         <h2 class="blog-title"><font face="gabriola" color="#26CE53">Por favor Ingrese el Nit del Alumno y el codigo de la asignatura</font></h2></br>
<center><table width="20" height="70" border="0" align="center" ></center>
  <center><tr>
  <td><td><td><center>
  <form id="form1" name="form1" method="get" action="{!!('buscarcodreg')!!}" >

  <font size="5"color="black" face="gabriola">Codigo de registro</font></center></td>

  <td width="100"><label><input name="cod" type="text" id="cod" style="width:180px; height:30px" /></label></td>
    <tr>
      <tr>
       <tr>
    <td></td><td></td><td></td>
    <td>
<center><button type="submit" style="background:#7EDB04; width:100px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Buscar</font></button></a></center><br>
   </form>
    </td>
    <td></td>
    <td></td>
    <td></td>
    </tr>

    <center><tr>
     <td>
    <center><font size="5"color="black" face="gabriola">Codigo</font></center>
    </td>
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
    <center><font size="5"color="black" face="gabriola">Asignatura</font></center>
    </td>
   </tr>
   </center>
   <tr>
    <td width="100"><label>
      <input name="cod" type="text" id="cod" style="width:100px; height:30px" disabled="true"/>
    </label>     
    </td>
   <td width="100"><label>
      <input name="nit" type="text" id="nit" style="width:100px; height:30px"  disabled="true" />
    </label>     
    </td>
    <td width="100"><label>
      <input name="nom" type="text" id="nom" style="width:180px; height:30px" disabled="true"/>
    </label>     
    </td>
    <td width="100"><label>
      <input name="ape" type="text" id="ape" style="width:180px; height:30px"disabled="true"/>
    </label>     
    </td>
    <td width="100"><label>
      <input name="asig" type="text" id="asig" style="width:180px; height:30px"/>
    </label>     
    </td>
    <td>
  <button type="submit" style="background:#7EDB04; width:90px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Modificar</font></button></a></td>
    </tr>
    <tr><td>
    <tr><td>
    </table>
    <br>
    <DIV ALIGN="LEFT" class="container">
  <a href ="{!!('registroasigal')!!}"> <button type="submit" style="background:#7EDB04; width:90px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Atras</font></button></a>
   
       
</div>
</div>
</div>
 
    </div>
</body>
</html>