<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <!-- Inclure des liens vers les fichiers CSS communs à toutes les pages -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/style.css">
</head>
<body>
    <!-- Inclure la barre de navigation commune à toutes les pages -->
    <nav>
        <ul>
            <li><a href="<?php echo SITE_URL; ?>index.php">Accueil</a></li>
            <li><a href="<?php echo SITE_URL; ?>produits.php">Produits</a></li>
            <li><a href="<?php echo SITE_URL; ?>contact.php">Contact</a></li>
            <li><a href="<?php echo SITE_URL; ?>panier.php">Panier</a></li>
            <li><a href="<?php echo SITE_URL; ?>compte.php">Mon Compte</a></li>
        </ul>
    </nav>
