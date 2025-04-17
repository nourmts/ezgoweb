/**
 * Script pour renforcer la désactivation de la validation HTML5
 * et s'assurer que seules les assertions Symfony sont utilisées
 */
document.addEventListener('DOMContentLoaded', function() {
    // Rechercher tous les formulaires de la page
    var forms = document.querySelectorAll('form');
    
    forms.forEach(function(form) {
        // Ajouter l'attribut novalidate à tous les formulaires
        form.setAttribute('novalidate', 'novalidate');
        
        // Écouter l'événement de soumission
        form.addEventListener('submit', function(event) {
            // Ne pas valider avec HTML5
            // Laisser Symfony gérer la validation avec les assertions
            console.log('Formulaire soumis, validation HTML5 désactivée');
        });
        
        // Désactiver la validation HTML5 pour tous les champs
        var inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(function(input) {
            // Désactiver les attributs de validation HTML5
            input.removeAttribute('required');
            input.removeAttribute('pattern');
            input.removeAttribute('min');
            input.removeAttribute('max');
            input.removeAttribute('minlength');
            input.removeAttribute('maxlength');
            
            // Utiliser les assertions Symfony à la place
        });
    });
    
    // Mettre en évidence les champs avec erreurs
    var errorFields = document.querySelectorAll('.form-error-message');
    errorFields.forEach(function(errorField) {
        var parentDiv = errorField.closest('.form-group');
        if (parentDiv) {
            parentDiv.classList.add('has-error');
        }
    });
}); 