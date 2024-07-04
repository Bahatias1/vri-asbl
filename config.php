<?php
$servername = "localhost";
$username = "root@localhost";
$password = "";
$dbname = "virunga_db";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
?>

