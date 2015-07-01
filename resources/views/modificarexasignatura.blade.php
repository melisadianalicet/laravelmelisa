<html>
<head>
<title>Actualizacion datos Ex-asignatura</title>
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
        <center><h1 class="blog-title"><font face="gabriola" color="#26CE53">~ Modificacion de datos ~ EX-Asignatura ~</font></h1>
         <h2 class="blog-title"><font face="gabriola" color="#26CE53">Por favor Ingrese el codigo de la EX-Asignatura</font></h2></center><br></br>
        
  <table width="40%" height="100" border="0" align="center" >
  <tr>
    <form id="form1" name="form1" method="get" action="{!!('buscarexas')!!}" >
    <td>
<center> <button type="submit" style="background:#7EDB04; width:100px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Buscar</font></button></a></center>
    </td>
    <td width="400"><label>
      <input name="busque" type="text" id="busque" />
    </label>      
    </form> 
    </tr>
    <center><tr>
    <td>
    <center><font size="5"color="black" face="gabriola">Nit</font></center>
    </td>
    <td>
    <center><font size="5"color="black" face="gabriola">Nombre</font></center>
    </td>

   </tr>
   </center>
   <tr>
   <td width="200"><label>
      <input name="nit" type="text" id="nit" required />
    </label>     
    </td>
    <td width="200"><label>
      <input name="nom" type="text" id="nom" required/>
    </label>     
    </td>
    <td>
   <button type="submit" style="background:#7EDB04; width:90px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Actualizar</font></button></a></td>
    </tr>
   </table>
  <br><br>
    <a href ="{!!('exasignatura')!!}"> <button type="submit" style="background:#7EDB04; width:90px; height:35px" name="submit" ><font size="5"color="black" face="gabriola">Atras</font></button></a></td></tr>
    </div>       
</div>
</div>
</div>
</body>
</html>