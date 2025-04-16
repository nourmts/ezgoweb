<?php

$fonts = [
    'Flaticon.eot' => 'https://cdn.jsdelivr.net/npm/flaticon-font@1.0.0/font/Flaticon.eot',
    'Flaticon.woff' => 'https://cdn.jsdelivr.net/npm/flaticon-font@1.0.0/font/Flaticon.woff',
    'Flaticon.ttf' => 'https://cdn.jsdelivr.net/npm/flaticon-font@1.0.0/font/Flaticon.ttf',
    'Flaticon.svg' => 'https://cdn.jsdelivr.net/npm/flaticon-font@1.0.0/font/Flaticon.svg'
];

$targetDir = 'public/assets/fonts/flaticon/font';

// Créer les répertoires s'ils n'existent pas
if (!file_exists($targetDir)) {
    if (!mkdir($targetDir, 0777, true)) {
        die("Erreur lors de la création du répertoire $targetDir\n");
    }
    echo "Répertoire $targetDir créé avec succès.\n";
}

// Télécharger chaque fichier de police
foreach ($fonts as $filename => $url) {
    $targetFile = $targetDir . '/' . $filename;
    echo "Téléchargement de $filename...\n";
    
    $content = @file_get_contents($url);
    if ($content === false) {
        echo "Erreur lors du téléchargement de $filename\n";
        continue;
    }

    if (file_put_contents($targetFile, $content) === false) {
        echo "Erreur lors de l'écriture de $filename\n";
        continue;
    }

    echo "$filename téléchargé avec succès\n";
}

echo "\nTéléchargement terminé.\n"; 