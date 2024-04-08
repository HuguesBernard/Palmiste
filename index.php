<?php
// Rediriger l'utilisateur vers la page d'accueil de l'interface d'administration si connecté
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: admin/gestion_commandes.php');
    exit;
}

include('includes/header.php');
?>

<section>
    <h2>Bienvenue sur <?php echo SITE_NAME; ?></h2>
    <p>Contenu de la page d'accueil...</p>
</section>

<?php
include('includes/footer.php');
?>
