<?php
include("con_db.php");
if (isset($_POST['registrarse'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['carrera']) >= 1 && strlen($_POST['nip']) >= 1) {
        trim($name = $_POST['nombre']);
        trim($carrera = $_POST['carrera']);
        trim($nip = $_POST['nip']);
        $consulta = "INSERT INTO registro(NOMBRE, CARRERA, NIP) VALUES ('$name','$carrera','$nip')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            <h3>Registro correcto</h3>
<?php
        }
    }
}
?>