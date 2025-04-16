<?php

$fonts = [
    'icomoon.eot',
    'icomoon.svg',
    'icomoon.ttf',
    'icomoon.woff',
    'icomoon.woff2'
];

$targetDir = 'public/assets/fonts/icomoon';

// Créer le répertoire s'il n'existe pas
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// URL de base pour les polices
$baseUrl = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/';

foreach ($fonts as $font) {
    $url = $baseUrl . $font;
    $targetPath = $targetDir . '/' . $font;
    
    echo "Téléchargement de $font...\n";
    
    $content = @file_get_contents($url);
    if ($content === false) {
        echo "Erreur lors du téléchargement de $font\n";
        continue;
    }
    
    if (file_put_contents($targetPath, $content) === false) {
        echo "Erreur lors de l'écriture de $font\n";
        continue;
    }
    
    echo "$font téléchargé avec succès\n";
}

echo "Téléchargement terminé\n"; 