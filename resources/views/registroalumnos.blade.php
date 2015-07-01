<html>
<head>

<title>Registro Alumnos</title>

</head>

<BODY background="{!!('css/fondo.jpg')!!}"> 
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link href="{!!('css/bootstrap.min.css')!!}" rel="stylesheet">
 

 <br></br>
<h1 class="blog-title"><font face="gabriola" color="#26CE53" size="7"><center>~ REGISTRO DE ALUMNO ~</center></b></br>

<form id="form1" name="form1" method="post" action="{!!('guardaralumno')!!}">
  <table width="40%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Nombre</strong></center></td>
      <td width="234"><label>
        <input name="nom" type="text" id="nom" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Apellido</strong></center></td>
      <td ><label>
        <input name="ape" type="text" id="ape" required />
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
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Año a cursar</strong></center></td>
      <td ><label>
        <input name="anio"  id="anio"  required type="text"/>
      </label></td>
    </tr>
    <tr><td>
    <center> <button type="submit" style="background:#7EDB04; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Agregar</font></button></a>
  </table>
  </div>   
</form>


          <center><a href ="{!!('actualizacional')!!}"> <button type="submit" style="background:#7EDB04; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Actualizar</font></button></a>
           <a href ="{!!('registroexal')!!}"> <button type="submit" style="background:#7EDB04; width:280px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Cambiar a modo Ex-Alumno</font></button></a><BR></BR></center>
           
    <DIV ALIGN="LEFT" class="container">
<a href ="{!!('menu')!!}"><button type="submit" style="background:#7EDB04; width:80px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Atras</font></button></a></DIV>
</body>


</html>
