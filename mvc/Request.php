<?php
    spl_autoload_register(function ($name) {
        if(is_file(PROJECT_PATH . "/mvc/models/". $name. ".php")) 
            require_once PROJECT_PATH . "/mvc/models/". $name. ".php";
        if(is_file(PROJECT_PATH . "/mvc/libs/". $name. ".php")) 
            require_once PROJECT_PATH . "/mvc/libs/". $name. ".php";
        if(is_file(PROJECT_PATH . "/mvc/controllers/". $name. ".php")) 
            require_once PROJECT_PATH . "/mvc/controllers/". $name. ".php";
    });
?>