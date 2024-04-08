<?php
session_start();
include('../classes/Database.php');

// Vérifier l'authentification de l'utilisateur (à implémenter)

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Vérifier si le produit existe dans la base de données (à implémenter)
    // Ajouter le produit au panier de l'utilisateur (à implémenter)

    echo 'Produit ajouté au panier avec succès.';
} else {
    echo 'Erreur : Impossible d\'ajouter le produit au panier.';
}
?>
