<?php
session_start();

// Vérifier l'authentification de l'utilisateur (à implémenter)

// Rediriger l'utilisateur vers la page de gestion des commandes par défaut
header('Location: gestion_commandes.php');
exit;
?>
