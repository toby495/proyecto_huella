<?php


include("matricula.php");



$destinatario = $matricula . "@estudiantes.uv.mx";
$asunto = "Confirmación UV";
$mensaje = "https://wonderful-volhard-c756f7.netlify.app";


$header = "From: noreply.uv.mx" . "\r\n";
$header .= "Reply-To: noreply.uv.mx" . "\r\n";

@mail($destinatario, $asunto, $mensaje, $header);
