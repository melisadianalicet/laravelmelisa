<?php


// 
//  Creamos una funci�n para realizar la conexi�n
//
function conectar(){
	$host     = 'localhost';
	$usuario = 'root';
	$password = 'root';
	$b_datos  = 'escuela';
	
	// Si no se realiz� la conexi�n
	if ( ! $conex = mysql_connect($host,$usuario,$password)) {
	    echo "Error al realizar la conexi�n - ".mysql_error();
		exit();
	}
	
	// Si no se seleccion� la Base de Datos
	if ( ! mysql_select_db($b_datos) ) {
	    echo "Error al seleccionar la Base de Datos - ".mysql_error();
		exit();
	}	
	// retorno la conexion
	return $conex;
}

function conexion(){
	$hos     = 'localhost';
	$usuari = 'root';
	$passwor = 'root';
	$b_dato  = 'escuela';
	
	// Si no se realiz� la conexi�n
	if ( ! $con = mysql_connect($hos,$usuari,$passwor)) {
	    echo "Error al realizar la conexi�n - ".mysql_error();
		exit();
	}
	
	// Si no se seleccion� la Base de Datos
	if ( ! mysql_select_db($b_dato) ) {
	    echo "Error al seleccionar la Base de Datos - ".mysql_error();
		exit();
	}	
	// retorno la conexion
	return $con;
}

// -----------------------------------------------------------------------------------------
//   Funci�n para ejecutar una consulta
//   Si la consulta es de selecci�n, nos retornara el resultado,
//   Si la consulta es de modificaci�n retornara verdadero o falso
//   Parametros:   
//             $sql  : Consulta 
//             $conex: indicador de conexi�n
// -----------------------------------------------------------------------------------------
function ejecutar_sql($sql, $conex){
	if ( !$resultado = mysql_query($sql, $conex) ) {
		echo "Error al ejecutar la consulta SQL  <br>".mysql_error();
		exit();
	}
	return $resultado;
}
function ejecutar($sl, $con){
	if ( !$resul = mysql_query($sl, $con) ) {
		echo "Error al ejecutar la consulta SQL  <br>".mysql_error();
		exit();
	}
	return $resul;
}

?>