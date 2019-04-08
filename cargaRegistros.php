<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
ob_end_flush();
include_once("config.php");
$cantidadRegistros = $_REQUEST["id"];

$sqldel="delete from users where 1=1";

if (mysqli_query($mysqli, $sqldel)) {
      echo "Delete records". "\n";	  
		} else {
      echo "Error: " . $sqldel . "<br>" . mysqli_error($mysqli);
		}

$tiempo_inicial = microtime(true);
for ($registro = 1; $registro < $cantidadRegistros; $registro++){
	
	$sql="INSERT INTO users(name, age, email) VALUES ('".$registro."123', 30, 'prueba@prueba.com')";
	//$sql="INSERT INTO propietarios(id_cedulapro,nombre,apellido) VALUES ('".$propietario."113069', 'Vial', 'Sans')";

	if (mysqli_query($mysqli, $sql)) {
		echo " - ";
      echo "New record created successfully" . "\n";
		} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
		}
}//end for
$tiempo_final = microtime(true);
	
$tiempo = $tiempo_final - $tiempo_inicial;

echo "El tiempo de ejecución del archivo ha sido de " . $tiempo . " segundos";




mysqli_close($mysqli);

 

?>

