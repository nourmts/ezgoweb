<?php
// Base URL for the Owl Carousel images
$baseUrl = 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/';

// List of image files to download
$imageFiles = [
    'owl.video.play.png',
    'owl.carousel.png'
];

// Create directory if it doesn't exist
$targetDir = 'assets/css';
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
    echo "Directory created: $targetDir\n";
}

// Download each image file
foreach ($imageFiles as $file) {
    $url = $baseUrl . $file;
    $targetFile = $targetDir . '/' . $file;
    
    echo "Downloading $file... ";
    
    if (file_put_contents($targetFile, file_get_contents($url))) {
        echo "Success!\n";
    } else {
        echo "Failed!\n";
    }
}

echo "Owl Carousel image download process completed.\n"; 