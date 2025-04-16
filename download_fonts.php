<?php

// Base URL for the font files
$baseUrl = 'https://cdn.jsdelivr.net/npm/open-iconic@1.1.1/font/fonts/';

// List of font files to download
$fontFiles = [
    'open-iconic.eot',
    'open-iconic.svg',
    'open-iconic.otf',
    'open-iconic.woff',
    'open-iconic.ttf'
];

// Create directory if it doesn't exist
$targetDir = 'assets/fonts/open-iconic';
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
    echo "Directory created: $targetDir\n";
}

// Download each font file
foreach ($fontFiles as $file) {
    $url = $baseUrl . $file;
    $targetFile = $targetDir . '/' . $file;
    
    echo "Downloading $file... ";
    
    if (file_put_contents($targetFile, file_get_contents($url))) {
        echo "Success!\n";
    } else {
        echo "Failed!\n";
    }
}

echo "Font download process completed.\n"; 