// Script pour améliorer l'expérience des modales de confirmation
document.addEventListener('DOMContentLoaded', function() {
    // Focaliser automatiquement le bouton Annuler à l'ouverture de la modale
    $('.modal').on('shown.bs.modal', function() {
        $(this).find('.btn-secondary').focus();
    });

    // Ajouter une animation pour mettre en évidence le bouton de confirmation
    $('.modal').on('shown.bs.modal', function() {
        const confirmButton = $(this).find('.btn-danger');
        setTimeout(function() {
            confirmButton.addClass('animated-pulse');
        }, 500);
    });

    // Ajouter un effet de pulsation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .animated-pulse {
            animation: pulse 1s infinite;
        }
        .modal-content {
            box-shadow: 0 5px 15px rgba(0,0,0,.5);
        }
        .modal-header.bg-danger {
            color: white;
            border-bottom: 0;
        }
        .modal-body p:last-child {
            margin-bottom: 0;
            font-weight: bold;
        }
    `;
    document.head.appendChild(style);
}); 