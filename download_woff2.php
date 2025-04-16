<?php

$url = 'https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.woff2';
$targetDir = 'public/assets/fonts/ionicons/fonts';
$targetFile = $targetDir . '/ionicons.woff2';

// Créer le répertoire cible s'il n'existe pas
if (!file_exists($targetDir)) {
    if (!mkdir($targetDir, 0777, true)) {
        die("Erreur lors de la création du répertoire $targetDir\n");
    }
    echo "Répertoire $targetDir créé avec succès.\n";
}

// Télécharger le fichier
echo "Téléchargement de ionicons.woff2...\n";
$content = @file_get_contents($url);

if ($content === false) {
    die("Erreur lors du téléchargement du fichier.\n");
}

// Sauvegarder le fichier
if (file_put_contents($targetFile, $content) === false) {
    die("Erreur lors de l'écriture du fichier.\n");
}

echo "Fichier ionicons.woff2 téléchargé avec succès dans $targetFile\n";

// Vérifier que le fichier a bien été créé
if (file_exists($targetFile)) {
    echo "Vérification : Le fichier existe bien dans le répertoire cible.\n";
    echo "Taille du fichier : " . filesize($targetFile) . " octets\n";
} else {
    echo "Attention : Le fichier n'a pas été créé correctement.\n";
} 