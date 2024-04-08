// Exemple de code JavaScript pour le fichier script.js

// Attendez que le document soit chargé avant d'exécuter le code JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Exemple de code pour ajouter une fonctionnalité au clic d'un bouton
    const myButton = document.querySelector('#myButton');
    if (myButton) {
        myButton.addEventListener('click', function() {
            alert('Le bouton a été cliqué !');
        });
    }

    // Exemple de code pour valider un formulaire
    const myForm = document.querySelector('#myForm');
    if (myForm) {
        myForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Empêcher le comportement par défaut du formulaire

            // Code de validation du formulaire (à implémenter selon vos besoins)
            const inputValue = document.querySelector('#inputField').value;
            if (inputValue.trim() === '') {
                alert('Veuillez saisir une valeur dans le champ.');
                return false; // Annuler l'envoi du formulaire si la validation échoue
            }

            // Envoyer le formulaire si la validation réussit (à implémenter selon vos besoins)
            alert('Formulaire soumis avec succès !');
            myForm.reset(); // Réinitialiser le formulaire après soumission
        });
    }
});
