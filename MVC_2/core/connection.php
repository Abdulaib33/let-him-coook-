<?php 


try {

    $connexion = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
        DB_USER,
        DB_PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );


} catch (PDOException $e){

    die("DB Connection failed: " . $e->getMessage());

}