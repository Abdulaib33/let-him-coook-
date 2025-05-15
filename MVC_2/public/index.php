<?php 


require_once "../core/init.php";
var_dump($connexion);

require_once "../app/routers/index.php";       // Routes decide what to show
require_once "../app/views/templates/default.php"; // Templates wraps output