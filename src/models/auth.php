<?php

// // Assurez-vous d'inclure l'autoloader de Composer



// require_once __DIR__ . '/../../vendor/autoload.php';



// use Dotenv\Dotenv;
// use Locabraz\models\DbConnector;

// // Charger les variables d'environnement du fichier .env
// $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
// $dotenv->load();

//     try {
//         $connection = DbConnector::dbConnect();
//         echo "Connexion réussie à la base de données.";
//     } catch (PDOException $e) {
//         echo "Erreur lors de la connexion à la base de données :";
//     }



// Assurez-vous d'inclure l'autoloader de Composer

require_once __DIR__ . '/../../vendor/autoload.php';

require_once './DbConnector.php';



// use Dotenv\Dotenv;
// use Mymedical\modele\bd;

// Charger les variables d'environnement du fichier .env
// $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
// $dotenv->load();

//     try {
//         $connection = DbConnector::dbConnect();
//         echo "Connexion réussie à la base de données.";
//     } catch (PDOException $e) {
//         echo "Erreur lors de la connexion à la base de données :";
//     }

    use Locabraz\models\DbConnector;

try {
    $bdd = DbConnector::dbConnect();
    $req = $bdd->prepare("SELECT DATABASE()");
    $req->execute();
    $resultat = $req->fetch(PDO::FETCH_ASSOC);
    echo "Base de données accessible: ".$resultat['DATABASE()'];
} catch (Exception $e) {
    echo "Erreur: " . $e->getMessage();
}
?>


?>