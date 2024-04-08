<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté, le rediriger vers la page d'accueil
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

include('includes/header.php');
?>

<section>
    <h2>Inscription</h2>
    <!-- Formulaire d'inscription (à implémenter) -->
</section>

<?php
include('includes/footer.php');
?>
