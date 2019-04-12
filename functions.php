<?php
header('Content-Type: text/html;charset=utf-8');
  	
	 function ejecutarSQLCommand($comando){

	 	$mysqli=new mysqli("localhost","root","ignacio","reporteszr");

	 	/*checar conexion*/

	 	if($mysqli->connect->errno){

	 		printf("Conexion fallida: %s/n",mysqli->connect_error);
	 		exit();
	 		
	 	}

	 	if(mysqli->multi_query($comando)){
	 		if($resultset=$mysqli->store_result()){
	 			while($row=$resultset->fetch_array(MYSQLI_BOTH)){
	 				
	 			}
	 			$resultset->free();
	 		}
	 	}

	 	mysqli->close();
	 	

	 }


	 function getSQLResultSet($comando){

	 	$mysqli=new mysqli("localhost","root","ignacio","reporteszr");

	 	if($mysqli->connect->errno){

	 		printf("Conexion fallida: %s/n",mysqli->connect_error);
	 		exit();


	 		
	 	}

	 	if ($mysqli->multi_query($comando)) {
	 		return $mysqli->store_result();
	 	}

	 	$mysqli->close();

	 }

?>