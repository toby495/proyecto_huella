<?php



// Obtención de inputs en variables
$matricula = $_POST["matricula"];
$nombre = $_POST["nombre"];
$carrera = $_POST["carrera"];
$nip = $_POST["nip"];



// Datos para los parametros en el método de la conexión
$servername = "54.164.40.242";
$username = "clienteuv";
$password = "password";
$dbname = "Proyecto_Huella";

// Creación de la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Chequeo de la conexión, devuelve el error si algo sucede
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Consulta en su defecto
$sql = "INSERT INTO Registro (MATRICULA, NOMBRE, HUELLA, CARRERA, NIP) 
VALUES ('$matricula', '$nombre', '', '$carrera', '$nip')";


// Aviso de inserción de datos exitosa
if ($conn->query($sql) === TRUE) {
    echo "<h3>¡Registro correcto! Ahora acude a la entrada más cercana de tu campus para completar el registro.</h3>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



//Fin conexión
$conn->close();
?>