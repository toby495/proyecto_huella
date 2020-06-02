<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/beabe071bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Validar codigo</title>
</head>
<body>
    <div class="contenedor">
        <main class="registro-correo">
            <div class="presentacion">
                <div class="contenido-presentacion">
                    <img src="img/logo.png" alt="Logo de la UV">
                    <h1>Universidad Veracruzana</h1>
                </div>
            </div>

            <div class="formulario" >
                <P class="mensaje">Enviamos un código de confirmación a tu correo electrónico institucional</P>
                <p class="mensaje"><?php 
                @$matricula= $_POST['matricula'];
                echo $matricula;?>@estudiantes.uv.mx</p>
                <form action="" method="post" >
                        <label class="label-codigo" for="codigo">
                             <p class="codigo">Por favor ingresa el código de cinco dígitos para verificar tu identidad como estudiante</p>
                        </label>
                        <div class="input-codigo">
                            <input class="code" type="text" name="codigo" id="cod">
                        </div>
                        <div class="btn-codigo">
                            <input type="submit" value="Confirmar" class="button" id="enviar">
                        </div>  
                        <p class="texto">¿No recibiste el código? <a href="index.php" class="reenviar"> Haz click aquí para reenviar </a></p>
                </form>
            </div>
        </main>
    </div>
    <?php

    include ("prueba.php");

    ?>

</body>
</html>
