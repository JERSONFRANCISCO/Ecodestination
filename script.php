<?php
// Cogemos la IP del usuario del array que nos pasa el servidor
$user_ip = $_SERVER['REMOTE_ADDR'];
echo "ip".$user_ip;
// Iniciamos el handler de CURL y le pasamos la URL de la API externa
///-------$ch = curl_init("http://api.hostip.info/country.php?ip=$user_ip");

// Con este comando le pedimos a CURL que, en vez de mostrar
// el resultado en pantalla, nos lo devuelva como una variable
//-----curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Y simplemente hacemos la petición HTTP.
//---$country_code = curl_exec($ch);

// Y para muestra, un botón, vamos a probar que funciona bien:
echo "Este adorable servidor ha detectado que tu código de país es... $country_code";
?>