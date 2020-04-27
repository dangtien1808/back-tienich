<?php
    if( !isset($_SESSION) ) session_start();
    require_once "./config.php"; 
    require_once "./mvc/Request.php"; 
    try {
        $myApp = new App();
    } catch (Exception $e) {
        echo 'Caught Exception',  $e, "\n";
    }
?>