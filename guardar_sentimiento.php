<?php include('cabezera.php'); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sentimientos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el sentimiento del formulario
$sentimiento = $_POST['sentimiento'];

// Insertar el sentimiento en la base de datos
$sql = "INSERT INTO sentimientos (sentimiento) VALUES ('$sentimiento')";

if ($conn->query($sql) === TRUE) {
    echo "Sentimiento guardado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
