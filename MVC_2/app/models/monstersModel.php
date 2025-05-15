<?php 


function findAll(PDO $connexion) {

    $sql = "SELECT * 
            FROM monsters 
            ORDER BY created_at DESC";
            
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);

}


function findOneById(PDO $connexion, int $id) {

    $sql = "SELECT *
            FROM monsters
            WHERE id = :id";

    $stmt = $connexion->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);

}   