<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://kit.fontawesome.com/beabe071bb.js" crossorigin="anonymous"></script>
    <script src="js/form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <title>Registro de Correo</title>
</head>

<body>
    <div class="contenedor">
        <main class="registro-correo">
            <div class="presentacion">
                <div class="contenido-presentacion">
                    <img src="img/logo.png" alt="Logo de la UV" >
                    <h1>Universidad Veracruzana</h1>
                </div>
            </div>

            <div class="formulario">
                <h1 class="titulo">Registrate</h1>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADgCAMAAAAt85rTAAAAYFBMVEVmZmb///9VVVVeXl5iYmJaWlpcXFzR0dFWVlZwcHD8/PysrKzf39/GxsZsbGzt7e2Ojo719fXn5+d+fn6VlZWlpaWEhITAwMDU1NS4uLjc3NyLi4udnZ1vb293d3fLy8uj0/C3AAAEW0lEQVR4nO2b2XriMAyFwUvIAgFCWAItff+3HJjIIWUoYwcXLHP+yzbhkyL7yLbk0QgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAv4aSidbihNaJVK+2xjdSy3q7q5bjE8tqt61Pf3i1Tf5Qumyq8RVVU+o44qhEPb32rmVaiwhcTBfz2+6dmS/SV9v3ILL8IXpdFEvWc1Gs77t3Zi1ebeVw9KTnSD4pFpkUQmaLYpL3/jHRr7ZzIEr1Zt9sI7rsd8qIYjPrzUTFUmuUWnbBK3Ry5YNKdNGFccnSw4t/W3lTSKTcXjx8tnWPo834XK5+nGN6ZYI4ZzcPhdGX6fXg7KO0ySITZloq15aGdx9izSsfltaB6Twsn2GXL1IaeVOLgSfMs4xWbWpB+pLYPJ2Q3C74SKkgBV1ZmaxWpKRsdEbVlP8stV9TPqy5hJC0P7fWRdmmwz2XZEgSWtg7WLASUtm05jrEQ7dvNDxyoW7PX2ZWEtqStHuLiscYlW04Ng6SoTbtOywiSBqaO4m+yPnoKG2CJg4j9DRGJ7Sx+i2rPJLsHDX0DOnozumrvAjSGLeFFy3uWKiMbpeWmdtbWbt45eCgGCSIJL0clqNikKnD3noJ7+JgvEM0epGJPk1En+ijX6pFv9iOfrv0Bhve2I8soj90GnxsOOUxQt/g4Df6o/uu+JJbhVBTmZdR8SX68ln8BdD4S9i9JoR7TZN8mxB6bSR5nG0k8TcCxd/KFX0z3ij6dspR/A2xFi3Ne94tzSOVJvt7/k0z1o33SizuundmvmZ7RUSJ+s6Nggt5kbKMol79c9vlRxc/+AmNSr6+O1HNisWxPF/OKo+HYnalPVXGbJzqQz/TLbcbreXlyplSUqer7/eZClZBFNue6bOVuHWd7uRk2fQ+w5TPnTuVXAZgXsg7Tdsy7elQnjHxUJXdKnvcpP+ZWyepvTy9YTERVdYZvFcWFqu06V6oGZTPev7VlsdIyWc3TuvgY6jMcdN4PrKeUirtcsohdA+lmVFfTrKfdtuOY9hKYw45x41jWktqo6VBh9BUGcaF8ymu3Jh8GHDGV4cuO7i/LE0M3doXnkqSD5l/3dtmHjq22DwPTVpYDRxk6YPv/zamk2A8WAdN2e0jTCU15j1QBvskJQ2y0GTqupMHrEuagHXGBPAh29J2nWBXOX0upqr72Mc3w2Ad3izUey/Th8ZBgPV65+aY25gQ2vUvPBFTCnt48qTtYmEWmsyQOrg0qN2GGsHcmhWfwNHfZqf9JZdmxSdA333p4btT2T6wxjwqsfiwir5VYI1rdJfg4GFcmc6uoBz0alQaYKJQHx6HFS0ZglrMUBb0k7zkLLxMSLcC/GwCVIB3KEja/TRE0slOUB3qdF/p6OfX2kVDUPeYaAHpqSOS1u0hbev93v4L8C5h9A6OxF/C/DUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg7fgDyhYmCCEbhAQAAAAASUVORK5CYII=" alt="" id="fileOutput">
                <form action="" method="POST">
                    <p class="texto-formulario">Ingresa tu nombre</p>
                    <input class="input-formulario" type="text" name="nombre" required>
                    <br>
                    <p class="texto-formulario">Ingresa tu carrera</p>
                    <input class="input-formulario" type="text" name="carrera" required>
                    <br>
                    <p class="texto-nip">Crea un NIP de 4 dígitos</p>
                    <div class="input-nip">
                        <input class="input-nip" type="password" maxlength="4" name="nip" id="nip" required>
                    </div>
                    <br>
                    <p class="texto-nip">Confirma tu NIP</p>
                    <div class="input-nip">
                        <input class="input-nip" type="password" maxlength="4" name="confnip" id="confnip" required>
                    </div>

                    <div class="btn-codigo">
                        <input type="submit" value="Registrarme" class="button" id="registro" name="registrarse">
                    </div>
              </form>
              <input type="checkbox" name="showPassword" id="showPassword"> 
              <input id="fileInput" type="file" size="50"accept="image/gif,image/jpeg,image/jpg,image/png" onchange="processFiles(this.files)">
            </div>
        </main>
    </div>
</body>
<?php
include("registrar.php");
?>

</html>