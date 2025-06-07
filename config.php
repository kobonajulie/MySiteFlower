<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "flower_shop";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Définir l'encodage des caractères
$conn->set_charset("utf8mb4");

// Démarrer la session
session_start();
?>
