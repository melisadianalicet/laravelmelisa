<?php
   // variable pasada por URL
   $cod = $_GET['busque'];
   
   
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
   
   $sql = "SELECT * FROM asignaturaalumno WHERE codigo = '$cod'";
   
   $resultado = mysql_query($sql, $conex) or die("error - ".mysql_error());
   
   $fila = mysql_fetch_assoc($resultado);   
   
?>


<html>
<head>

<title>Registro Notas Alumnos</title>

</head>

<body  background="{!!('css/fondo.jpg')!!}">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
     <meta name="author" content="">
  <link href="{!!('css/bootstrap.min.css')!!}" rel="stylesheet">
 
<h1 class="blog-title"><font face="gabriola" color="#26CE53" size="7"><center>~ Registro de Notas ~ Alumnos~</center></b>
<h5 class="blog-title"><font face="gabriola" color="#26CE53" size="5"><center>Esta a punto de registrarla nota final de este alumno</center></b></br>

 <form id="form1" name="form1" method="post" action="{!!('modificacionnota')!!}" >
  <table width="40%" height="100" border="0" align="center" cellpadding="11" cellspacing="11">
    <tr>
    </label>   
    </td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Nombre</strong></center></td>
      <td width="234"><label>
        <input name="nom" type="text" id="nom" required value="<?=$fila['nombre']?>"/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Apellido</strong></center></td>
      <td ><label>
        <input name="ape" type="text" id="ape" required value="<?=$fila['apellido']?>"/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Edad</strong></center></td>
      <td ><label>
        <input name="edad" type="text" id="edad" required value="<?=$fila['edad']?>"/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Nit</strong></center></td>
      <td ><label>
        <input name="nit" type="text" id="nit" required value="<?=$fila['nit']?>"/>
      </label></td>
    </tr>
    <tr>
      <td ><center><strong><font color="#26CE53" size="5" face="gabriola">Asignatura</strong></center></td>
      <td ><label>
        <input name="asig" type="text" id="asig"  required  value="<?=$fila['asignatura']?>"/>
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
        <input name="num" type="text" id="num" required/>
      </label></td>
    </tr>
    <tr><td>
    <center><button type="submit" style="background:#7EDB04; width:200px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Guardar</font></button></a>

  </table>
  </div>
          
          </form>

                    
    <DIV ALIGN="LEFT" class="container"><!------>
<a href ="{!!('registronotasal')!!}"><button type="submit" style="background:#7EDB04; width:80px; height:40px" name="submit" ><font size="5"color="black" face="gabriola">Atras</font></button></a>
</body>


</html>
