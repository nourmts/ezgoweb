<?php

$sourceDir = 'public/assets/fonts/ionicons';
$targetDir = 'public/assets/fonts/ionicons/fonts';

// Créer le répertoire cible s'il n'existe pas
if (!file_exists($targetDir)) {
    if (!mkdir($targetDir, 0777, true)) {
        die("Erreur lors de la création du répertoire cible\n");
    }
    echo "Répertoire cible créé avec succès\n";
}

// Liste des fichiers à copier
$files = [
    'ionicons.eot',
    'ionicons.svg',
    'ionicons.ttf',
    'ionicons.woff'
];

$success = true;

// Copier chaque fichier
foreach ($files as $file) {
    $sourceFile = $sourceDir . '/' . $file;
    $targetFile = $targetDir . '/' . $file;
    
    if (file_exists($sourceFile)) {
        if (copy($sourceFile, $targetFile)) {
            echo "Fichier $file copié avec succès\n";
        } else {
            echo "Erreur lors de la copie de $file\n";
            $success = false;
        }
    } else {
        echo "Fichier source $file non trouvé\n";
        $success = false;
    }
}

// Vérification finale
if ($success) {
    echo "\nTous les fichiers ont été copiés avec succès.\n";
    echo "Contenu du répertoire cible :\n";
    $files = scandir($targetDir);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo "- $file\n";
        }
    }
} else {
    echo "\nCertains fichiers n'ont pas pu être copiés.\n";
} 