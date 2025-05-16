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


function insertOne(PDO $connexion, array $data) {

    $sql = "INSERT INTO retro_monsters_2025_1.monsters (name, pv, attack, defense, description)
            VALUES (:name, :pv, :attack, :defense, :description)";
    $stmt = $connexion->prepare($sql);
    return $stmt->execute([

        ':name' => $data['name'],
        ':pv' => $data['pv'],
        ':attack' => $data['attack'],
        ':defense' => $data['defense'],
        ':description' => $data['description']
        
    ]);

}