<?php
// Recibir parámetros
$nombre = $_REQUEST['strNombre'];
$apaterno = $_REQUEST['strApellidoPaterno'];
$amaterno = $_REQUEST['strApellidoMaterno'];
$correo = $_REQUEST['strCorreo'];
$contrasena = $_REQUEST['strContrasena'];
$idSexo = $_REQUEST['idSexo'];

$url = "http://rideoncompany.runasp.net/api/UsuariosApi/register";

// Datos obligatorios
$data = array(
    "strNombre" => $nombre,
    "strApellidoPaterno" => $apaterno,
    "strApellidoMaterno" => $amaterno,
    "strCorreo" => $correo,
    "strContrasena" => $contrasena,
    "idSexo" => intval($idSexo)
);

// Convertir a JSON
$payload = json_encode($data);

// Preparar cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar
$response = curl_exec($ch);
curl_close($ch);

// Mostrar respuesta de la API
echo $response;
?>
