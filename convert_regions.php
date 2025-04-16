<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Charger les variables d'environnement
$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__.'/.env');

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=projetpi", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Récupérer tous les partenaires
    $stmt = $pdo->query("SELECT id_partenaire, region FROM partenaire");
    $partenaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Convertir chaque région en JSON
    foreach ($partenaires as $partenaire) {
        $id = $partenaire['id_partenaire'];
        $region = $partenaire['region'];
        
        // Si la région n'est pas vide, la convertir en tableau JSON
        if (!empty($region)) {
            $regionArray = [$region]; // Créer un tableau avec la région existante
            $regionJson = json_encode($regionArray);
            
            // Mettre à jour la base de données
            $updateStmt = $pdo->prepare("UPDATE partenaire SET region = ? WHERE id_partenaire = ?");
            $updateStmt->execute([$regionJson, $id]);
            
            echo "Partenaire ID $id: Région '$region' convertie en JSON: $regionJson\n";
        } else {
            // Si la région est vide, utiliser un tableau vide
            $updateStmt = $pdo->prepare("UPDATE partenaire SET region = ? WHERE id_partenaire = ?");
            $updateStmt->execute(['[]', $id]);
            
            echo "Partenaire ID $id: Région vide convertie en JSON: []\n";
        }
    }
    
    echo "Conversion terminée avec succès!\n";
    
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage() . "\n";
} 