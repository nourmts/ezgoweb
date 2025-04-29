document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner tous les conteneurs de notation
    const ratings = document.querySelectorAll('.rating');
    
    ratings.forEach(function(rating) {
        const stars = rating.querySelectorAll('label');
        const partnerId = rating.dataset.partnerId;
        
        stars.forEach((star, index) => {
            star.addEventListener('click', function(e) {
                e.preventDefault();
                const value = 5 - index;
                
                // Envoyer la note au serveur
                fetch(`/rating/add/${partnerId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: `rating=${value}`
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erreur réseau');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Mettre à jour l'affichage
                        const displayContainer = rating.closest('.partner-info').querySelector('.rating-display');
                        updateStars(displayContainer, data.newRating);
                        // Afficher un message de succès
                        alert('Votre note a été enregistrée avec succès !');
                    } else {
                        alert(data.message || 'Une erreur est survenue');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Une erreur est survenue lors de la notation');
                });
            });
        });
    });
});

function updateStars(container, rating) {
    if (!container) return;
    
    const stars = container.querySelectorAll('i');
    const ratingText = container.querySelector('span');
    const ratingValue = parseFloat(rating);

    stars.forEach((star, index) => {
        if (index < Math.floor(ratingValue)) {
            star.className = 'fas fa-star';
        } else if (index === Math.floor(ratingValue) && ratingValue % 1 > 0) {
            star.className = 'fas fa-star-half-alt';
        } else {
            star.className = 'far fa-star';
        }
    });

    if (ratingText) {
        ratingText.textContent = `(${ratingValue.toFixed(1)}/5)`;
    }
} 