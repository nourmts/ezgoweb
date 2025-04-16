<?php

$fonts = [
    'ionicons.eot' => 'https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.eot',
    'ionicons.woff' => 'https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.woff',
    'ionicons.ttf' => 'https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.ttf',
    'ionicons.svg' => 'https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.svg'
];

$targetDir = 'public/assets/fonts/ionicons/fonts';

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

// Vérification des fichiers téléchargés
echo "\nFichiers présents dans le répertoire $targetDir:\n";
$downloadedFiles = scandir($targetDir);
foreach ($downloadedFiles as $file) {
    if ($file != '.' && $file != '..') {
        echo "- $file\n";
    }
} 