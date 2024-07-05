<?php
// Emplacement du fichier : /public_html/admin/includes/config.php

// Informations de connexion à la base de données
define('DB_HOST', 'localhost'); // L'adresse de l'hôte de la base de données
define('DB_NAME', 'nom_de_votre_base_de_donnees'); // Le nom de votre base de données
define('DB_USER', 'votre_nom_utilisateur'); // Votre nom d'utilisateur de base de données
define('DB_PASS', 'votre_mot_de_passe'); // Votre mot de passe de base de données

// Établir une connexion à la base de données
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    // Définir le mode d'erreur PDO à exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Définir le mode d'attribut PDO à UTF-8
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
    echo "Connexion à la base de données établie avec succès.";
} catch (PDOException $e) {
    // En cas d'erreur lors de la connexion, afficher le message d'erreur
    exit("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
