<html>


<head>

<title>Registro EXAlumnos</title>

</head>

<BODY background="{!!('css/fondo.jpg')!!}"> 
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link href="{!!('css/bootstrap.min.css')!!}" rel="stylesheet">

 <br></br>
<h1 class="blog-title"><font face="gabriola" color="#26CE53" size="7"><center>~ REGISTRO DE EX-ALUMNO ~</center></b></br>

<form id="form1" name="form1" method="post" action="{!!('guardarexalumno')!!}">
  <table width="40%" height="200" border="0" align="center" cellpadding="11" cellspacing="11">
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Nombre</strong></center></td>
      <td width="234"><label>
        <input name="nom" type="text" id="nom" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Apellido</strong></center></td>
      <td ><label>
        <input name="ape" type="text" id="ape" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Edad</strong></center></td>
      <td ><label>
        <input name="edad" type="text" id="edad" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Nit</strong></center></td>
      <td ><label>
        <input name="nit" type="text" id="nit" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Año de salida</strong></center></td>
      <td ><label>
        <input name="anio" type="text" id="anio" required/>
      </label></td>
    </tr>
    <tr><td>
    <center> <button type="submit" style="background:#7EDB04; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Agregar</font></button></a>
</center></td></tr>
  </table>
  </div>
          
</form>


<center><a href ="{!!('modificarexal')!!}"> <button type="submit" style="background:#7EDB04; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Modificar</font></button></a>
<a href ="{!!('registroal')!!}"> <button type="submit" style="background:#7EDB04; width:80px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Atras</font></button></a><BR>
           
    <DIV ALIGN="LEFT" class="container">
<a href ="{!!('menu')!!}"><button type="submit" style="background:#7EDB04; width:80px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Menu</font></button></a></DIV>
</body>


</html>
