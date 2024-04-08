<?php
session_start();
include('../classes/Database.php');

// Vérifier l'authentification de l'utilisateur (à implémenter)

$db = new Database();
$conn = $db->connect();

// Code pour récupérer et afficher les commandes depuis la base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des commandes - Palmiste</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include('../includes/header.php'); ?>

    <section>
        <h2>Gestion des commandes</h2>
        <!-- Tableau pour afficher les commandes -->
    </section>

    <?php include('../includes/footer.php'); ?>
</body>
</html>
