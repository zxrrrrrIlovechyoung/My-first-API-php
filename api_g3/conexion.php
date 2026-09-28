<?php
$url = "http://rideoncompany.runasp.net/api/UsuariosApi";

// Inicializar cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar petición
$response = curl_exec($ch);

// Verificar errores
if(curl_errno($ch)){
    echo "Conexión fallida: " . curl_error($ch);
} else {
    echo "Conexión exitosa a la API";
}

curl_close($ch);
?>
