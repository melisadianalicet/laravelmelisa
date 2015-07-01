<html>


<head>

<title>Registro Notas Alumnos</title>

</head>

<BODY background="{!!('css/fondo.jpg')!!}"> 
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link href="{!!('css/bootstrap.min.css')!!}" rel="stylesheet">
<h1 class="blog-title"><font face="gabriola" color="#26CE53" size="7"><center>~ Registro de Notas ~ Alumnos~</center></b>
<h5 class="blog-title"><font face="gabriola" color="#26CE53" size="5"><center>Por favor Ingrese el codigo de registro de asignatura a alumno</center></b></br>


  <table width="40%" height="100" border="0" align="center" cellpadding="11" cellspacing="11">
    <tr>
<center> <form id="form1" name="form1" method="get" action="{!!('buscarregasi')!!}" >
    <td>
 <button type="submit" style="background:#7EDB04; width:100px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Buscar</font></button></a></center>
    </td>
    <td width="300"><label>
      <input name="busque" type="text" id="busque" />
    </label>   
    </form> 
    </td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Nombre</strong></center></td>
      <td width="234"><label>
        <input name="nom" type="text" id="nom" required />
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
        <input name="edad" type="text" id="edad" required />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Nit</strong></center></td>
      <td ><label>
        <input name="nit" type="text" id="nit" required/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Asignatura</strong></center></td>
      <td ><label>
        <input name="asig" type="text" id="asig"  required/>
      </label></td>
    </tr>
<tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Nota final</strong></center></td>
      <td ><label>
        <input name="notf" type="text" id="notf" required />
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">numero del registro</strong></center></td>
      <td ><label>
        <input name="num" type="text" id="num" />
      </label></td>
    </tr>
  </table>
  </div>
          
<center><button type="submit" style="background:#7EDB04; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Guardar</font></button></a>

          <a href ="{!!('modificarnotas')!!}"> <button type="submit" style="background:#7EDB04; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Modificar</font></button></a></center><br>           
    <DIV ALIGN="LEFT" class="container"><!------>
<a href ="{!!('menu')!!}"><button type="submit" style="background:#7EDB04; width:80px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Atras</font></button></a></DIV>
</body>


</html>
