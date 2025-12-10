<?php
// constance de connexion
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('BD_NAME', 'contactapp');

function connecterBD(){
    // Etape 1 : Créer la connexion
    $connexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, BD_NAME);

    // Etape 1 & 2 : Vérifier si la connexion a échoué
    if(mysqli_connect_error()){
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    // Etape 4 : Définir l'encodage UTF-8 pour les caractères spéciaux
    mysqli_set_charset($connexion, "utf8");

    // Retourner le connexion pour l'utiliser dans les requêtes
    return $connexion;
};