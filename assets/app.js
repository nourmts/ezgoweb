import './styles/app.css';
import './styles/tags.css'; // Importez le nouveau CSS

document.addEventListener('DOMContentLoaded', function() {
    // Initialisation du tags input
    const tagsInputs = document.querySelectorAll('.tags-input');
    
    tagsInputs.forEach(input => {
        const wrapper = document.createElement('div');
        wrapper.className = 'tags-input-wrapper';
        input.parentNode.insertBefore(wrapper, input);
        wrapper.appendChild(input);
        
        // Création des tags visuels
        function updateTagsDisplay() {
            const selectedOptions = Array.from(input.selectedOptions);
            const tagsContainer = document.createElement('div');
            tagsContainer.className = 'tags-container';
            
            selectedOptions.forEach(option => {
                const tag = document.createElement('span');
                tag.className = 'tag';
                tag.textContent = option.textContent;
                
                const close = document.createElement('span');
                close.className = 'close';
                close.innerHTML = '×';
                close.addEventListener('click', () => {
                    option.selected = false;
                    updateTagsDisplay();
                });
                
                tag.appendChild(close);
                tagsContainer.appendChild(tag);
            });
            
            // Ajout du champ de recherche
            const searchInput = document.createElement('input');
            searchInput.type = 'text';
            searchInput.placeholder = 'Tapez pour rechercher...';
            searchInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                Array.from(input.options).forEach(option => {
                    option.style.display = option.text.toLowerCase().includes(searchTerm) ? 'block' : 'none';
                });
                input.size = Math.min(10, input.options.length + 1);
            });
            
            // Remplacement du contenu
            wrapper.innerHTML = '';
            wrapper.appendChild(tagsContainer);
            wrapper.appendChild(searchInput);
            wrapper.appendChild(input);
            
            // Affichage des options
            input.style.display = 'none';
            searchInput.addEventListener('focus', () => {
                input.size = Math.min(10, input.options.length + 1);
                input.style.display = 'block';
                input.style.position = 'absolute';
                input.style.zIndex = '1000';
            });
            
            input.addEventListener('blur', () => {
                setTimeout(() => {
                    input.style.display = 'none';
                }, 200);
            });
        }
        
        input.addEventListener('change', updateTagsDisplay);
        updateTagsDisplay();
    });
});