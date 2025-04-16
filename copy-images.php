<?php

$sourceDir = __DIR__ . '/assets/images';
$targetDir = __DIR__ . '/public/assets/images';

// Create target directory if it doesn't exist
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Copy all files from source to target
$files = scandir($sourceDir);
foreach ($files as $file) {
    if ($file != '.' && $file != '..' && $file != '.DS_Store') {
        $sourcePath = $sourceDir . '/' . $file;
        $targetPath = $targetDir . '/' . $file;
        if (is_file($sourcePath)) {
            copy($sourcePath, $targetPath);
            echo "Copied: $file\n";
        }
    }
}

echo "Done copying images!\n"; 