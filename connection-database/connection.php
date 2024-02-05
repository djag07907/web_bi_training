<?php
$host = "localhost";
$port = "5432";
$dbname = "workratio";
$user = "postgres";
$password = "JTercer@1997";

try {
    $connect = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Conexión exitosa";
} catch (PDOException $e) {
    // echo "Error de conexión: " . $e->getMessage();
    exit();
}
?>