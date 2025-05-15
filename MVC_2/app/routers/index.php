<?php 


// ROUTE: /?page=hello
if (isset($_GET['page']) && $_GET['page'] === 'hello') {
    include_once "../app/controllers/monstersController.php";
    helloWorldAction();
}

 // Route: /?page=list
elseif (isset($_GET['page']) && $_GET['page'] === 'list') {
    include_once "../app/controllers/monstersController.php";
    listAction($connexion);

} 
// ROUTE: /?page=show&&id=randomID
elseif (isset($_GET['page']) && $_GET['page'] === 'show' && isset($_GET['id'])) {
    include_once "../app/controllers/monstersController.php";
    showAction($connexion, (int)$_GET['id']);
}

else {
    // Default fallback
    $content = "<h1>404 Not Found</h1>";
}