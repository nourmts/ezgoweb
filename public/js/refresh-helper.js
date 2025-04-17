/**
 * Script pour aider à rafraîchir la page de liste des réclamations
 */
document.addEventListener('DOMContentLoaded', function() {
    // S'assurer que la page est complètement chargée
    console.log('Page chargée avec succès');
    
    // Force le chargement complet de la page
    if (window.location.href.indexOf('reclamation/liste') > -1) {
        console.log('Liste des réclamations détectée');
        
        // Vérifier si le contenu principal est chargé
        var tableContent = document.querySelector('.table-responsive');
        if (!tableContent || tableContent.innerHTML.trim() === '') {
            console.log('Contenu non chargé, tentative de rafraîchissement');
            // Ajouter un paramètre aléatoire pour éviter la mise en cache
            window.location.href = window.location.pathname + '?refresh=' + Math.random();
        }
    }
}); 