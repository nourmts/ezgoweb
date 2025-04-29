import './bootstrap.js';
import './styles/app.css';

// Configuration globale pour les requêtes AJAX
$.ajaxSetup({
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
});

console.log('Application JavaScript initialisée');