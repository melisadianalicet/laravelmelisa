<?php
   // variable pasada por URL
   $cod = $_GET['bus'];
   
   
   function conectar(){
  $host     = 'localhost';
  $usuario = 'root';
  $password = 'root';
  $b_datos  = 'escuela';
  
  // Si no se realizó la conexión
  if ( ! $conex = mysql_connect($host,$usuario,$password)) {
      echo "Error al realizar la conexión - ".mysql_error();
    exit();
  }
  
  // Si no se seleccionó la Base de Datos
  if ( ! mysql_select_db($b_datos) ) {
      echo "Error al seleccionar la Base de Datos - ".mysql_error();
    exit();
  } 
  // retorno la conexion
  return $conex;
}
   // Llamamos a la función conectar() del archivo config.inc.php
   $conex = conectar();
   
   $sql = "SELECT * FROM exalumnos WHERE nit = '$cod'";
   
   $resultado = mysql_query($sql, $conex) or die("error - ".mysql_error());
   
   $fila = mysql_fetch_assoc($resultado);   
   
?>
<html>
<head>
<title>Actualizacion datos exalumnos</title>
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
         <h2 class="blog-title"><font face="gabriola" color="#26CE53">Por favor ve atras si deseas hacer otra consulta</font></h2><br></br>

         <form id="form1" name="form1" method="get" action="{!!('modificacionexal')!!}" >
  <table width="40%" height="100" border="0" align="left" cellpadding="11" cellspacing="11">
    <tr>    
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
      <input name="nit" type="text" id="nit"  value="<?=$fila['nit']?>" required />
    </label>     
    </td>
    <td width="400"><label>
      <input name="nom" type="text" id="nom" value="<?=$fila['nombre']?>"  required/>
    </label>     
    </td>
    <td width="400"><label>
      <input name="ape" type="text" id="ape" value="<?=$fila['apellido']?>" required/>
    </label>     
    </td>
    <td width="400"><label>
      <input name="eda" type="text" id="eda" value="<?=$fila['edad']?>" required/>
    </label>     
    </td>
    <td width="400"><label>
      <input name="anio" type="text" id="anio" value="<?=$fila['anio']?>" required/>
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