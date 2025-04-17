// Script pour s'assurer que les styles des états de réclamation sont appliqués
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour vérifier si un élément contient un texte spécifique
    function containsText(element, text) {
        return element.textContent.trim() === text;
    }
    
    // Récupérer tous les spans qui pourraient être des états
    var allSpans = document.querySelectorAll("span");
    
    // Parcourir tous les spans et appliquer les styles en fonction du contenu
    allSpans.forEach(function(element) {
        if (containsText(element, 'Traité')) {
            element.className = 'etat-traite';
            // Forcer les styles en ligne aussi
            element.style.backgroundColor = '#28a745';
            element.style.color = 'white';
            element.style.padding = '5px 10px';
            element.style.borderRadius = '4px';
            element.style.display = 'inline-block';
            element.style.fontSize = '12px';
            element.style.fontWeight = 'bold';
        }
        else if (containsText(element, 'En cours')) {
            element.className = 'etat-en-cours';
            // Forcer les styles en ligne aussi
            element.style.backgroundColor = '#ffc107';
            element.style.color = '#212529';
            element.style.padding = '5px 10px';
            element.style.borderRadius = '4px';
            element.style.display = 'inline-block';
            element.style.fontSize = '12px';
            element.style.fontWeight = 'bold';
        }
        else if (containsText(element, 'Non traité')) {
            element.className = 'etat-non-traite';
            // Forcer les styles en ligne aussi
            element.style.backgroundColor = '#dc3545';
            element.style.color = 'white';
            element.style.padding = '5px 10px';
            element.style.borderRadius = '4px';
            element.style.display = 'inline-block';
            element.style.fontSize = '12px';
            element.style.fontWeight = 'bold';
        }
    });
}); 