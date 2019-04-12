<?php include('functions.php');
$ClavosAlmacen=$_GET('ClavosAlmacen');
$ClavosProduccion=$_GET('ClavosProduccion');


ejecutarSQLCommand("INSERT INTO `reporteclavos` (NumeroDeClavosAlmacen,NumeroDeClavosProduccion)
	VALUES ('$ClavosAlmacen','$ClavosProduccion')

	ON DUPLICATE KEY UPDATE `NumeroDeClavosAlmacen`='$ClavosAlmacen',
	`NumeroDeClavosProduccion`='$ClavosProduccion';");





?>