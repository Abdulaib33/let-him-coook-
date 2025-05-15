<?php 

function helloWorldAction() {

    global $content;
    ob_start();
    include "../app/views/monsters/hello.php";
    $content = ob_get_clean();

}


function listAction(PDO $connexion) {
    include_once "../app/models/monstersModel.php";
    $monsters = findAll($connexion);


    global $content;
    ob_start();
    include "../app/views/monsters/list.php";
    $content = ob_get_clean();
}


function showAction(PDO $connexion, int $id) {

    include_once "../app/models/monstersModel.php";
    
    $monster = findOneById($connexion, $id);

    global $content;
    ob_start();
    include "../app/views/monsters/show.php";
    $content = ob_get_clean();
}