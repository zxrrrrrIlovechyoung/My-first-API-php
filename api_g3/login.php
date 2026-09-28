<?php
$correo = $_REQUEST['correo'];
$contrasena = $_REQUEST['contrasena'];

$url = "http://rideoncompany.runasp.net/api/UsuariosApi/login";

$data = array(
    "strCorreo" => $correo,
    "strContrasena" => $contrasena
);

$payload = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
