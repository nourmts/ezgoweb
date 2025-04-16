<?php
$source = __DIR__ . '/assets/css/ionicons.min.css.new';
$destination = __DIR__ . '/assets/css/ionicons.min.css';

if (file_exists($source)) {
    if (copy($source, $destination)) {
        echo "Le fichier CSS a été copié avec succès.\n";
    } else {
        echo "Erreur lors de la copie du fichier CSS.\n";
    }
} else {
    echo "Le fichier source n'existe pas.\n";
}
?> 