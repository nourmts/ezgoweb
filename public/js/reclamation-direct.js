// Script pour appliquer directement les couleurs aux états des réclamations
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour créer un badge stylisé
    function createBadge(text, bgColor, textColor) {
        const badge = document.createElement('span');
        badge.textContent = text;
        badge.style.backgroundColor = bgColor;
        badge.style.color = textColor;
        badge.style.padding = '6px 10px';
        badge.style.borderRadius = '4px';
        badge.style.display = 'inline-block';
        badge.style.fontSize = '12px';
        badge.style.fontWeight = 'bold';
        badge.style.textAlign = 'center';
        badge.style.minWidth = '80px';
        return badge;
    }

    // Rechercher directement les textes exacts pour les états et les remplacer
    // Cette approche est plus agressive mais plus efficace
    function replaceTextWithBadge(textToFind, bgColor, textColor) {
        const walker = document.createTreeWalker(
            document.body,
            NodeFilter.SHOW_TEXT,
            { acceptNode: node => node.nodeValue.trim() === textToFind ? NodeFilter.FILTER_ACCEPT : NodeFilter.FILTER_REJECT },
            false
        );

        const nodesToReplace = [];
        let node;
        while (node = walker.nextNode()) {
            nodesToReplace.push(node);
        }

        nodesToReplace.forEach(node => {
            const badge = createBadge(textToFind, bgColor, textColor);
            node.parentNode.replaceChild(badge, node);
        });
    }

    // Remplacer chaque état par un badge coloré
    replaceTextWithBadge('TRAITE', '#28a745', 'white');       // Vert
    replaceTextWithBadge('EN_COURS', '#ffc107', '#212529');   // Jaune
    replaceTextWithBadge('Non traité', '#dc3545', 'white');   // Rouge

    // Version alternative utilisant innerHTML pour tout l'élément body
    setTimeout(function() {
        // Rechercher et remplacer dans le HTML
        const html = document.body.innerHTML;
        
        // Remplacer tous les états par des badges HTML
        const modifiedHtml = html
            .replace(/Non traité/g, '<span style="background-color: #dc3545; color: white; padding: 6px 10px; border-radius: 4px; display: inline-block; font-size: 12px; font-weight: bold; text-align: center; min-width: 80px;">Non traité</span>')
            .replace(/EN_COURS/g, '<span style="background-color: #ffc107; color: #212529; padding: 6px 10px; border-radius: 4px; display: inline-block; font-size: 12px; font-weight: bold; text-align: center; min-width: 80px;">EN_COURS</span>')
            .replace(/TRAITE/g, '<span style="background-color: #28a745; color: white; padding: 6px 10px; border-radius: 4px; display: inline-block; font-size: 12px; font-weight: bold; text-align: center; min-width: 80px;">TRAITE</span>');
        
        // Appliquer les changements seulement si des modifications ont été faites
        if (html !== modifiedHtml) {
            document.body.innerHTML = modifiedHtml;
        }
    }, 500); // Délai pour s'assurer que tout le DOM est chargé
}); 