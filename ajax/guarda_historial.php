<?php
$json = file_get_contents('php://input');
$data = json_decode($json);
require_once 'config.php';
if (isset($_POST['humeda'])) {
    $humeda = $_POST['humeda'];
    $longitud = $_POST['longitud'];
    $latitud = $_POST['latitud'];
    $fecha = NULL; 
    $usuario = "No definido";
    $temperatura = 0;
    $stmt = $mysqli->prepare("INSERT INTO `historial` (`long`, `lat`, `humeda`, `temperatura`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param(
            "iiii",
            $longitud,
            $latitud,
            $humeda,
            $temperatura);
        if ($stmt->execute()) {
            $respuesta = "Informacion almacenada";
        }
}
//echo '<script language="javascript">console.log("'.$nombre.'");</script>';
header('Content-Type: application/json');
echo json_encode($respuesta);

?>