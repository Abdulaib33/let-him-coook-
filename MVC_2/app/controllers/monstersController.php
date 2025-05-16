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


function createAction(PDO $connexion) {
    include_once "../app/models/monstersModel.php";


    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $data = [
            'name' => $_POST['name'] ?? '',
            'pv' => (int)($_POST['pv'] ?? 0),
            'attack' => (int) ($_POST['attack'] ?? 0),
            'defense' => (int) ($_POST['defense'] ?? 0),
            'description' => $_POST['description'] ?? ''
        ];

        // Insert into DB
        insertOne($connexion, $data);

        // Redirect to list
        header('Location: ?page=list');
        exit;
    }


    // Show form
    global $content;
    ob_start();
    include "../app/views/monsters/create.php";
    $content = ob_get_clean();
}


function editAction(PDO $connexion, int $id) {
    include_once "../app/models/monstersModel.php";


    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $data = [
            'id' => $id,
            'name' => $_POST['name'] ?? '',
            'pv' => (int)($_POST['pv'] ?? 0),
            'attack' => (int)($_POST['attack'] ?? 0),
            'defense' => (int)($_POST['defense'] ?? 0),
            'description' => $_POST['description'] ?? ''
        ];

        updateOne($connexion, $data);


        // Redirect to show
        header('Location: ?page=show&id=' . $id);
        exit;
    }

    $monster = findOneById($connexion, $id);

    global $content;
    ob_start();
    include "../app/views/monsters/edit.php";
    $content = ob_get_clean();

}