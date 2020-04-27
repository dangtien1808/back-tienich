<?php
class App {
    protected $controller = null;
    protected $action = null;
    function __construct() {
        if(isset($_POST["control"]) && file_exists(PROJECT_PATH . "/mvc/controllers/". $_POST["control"]. ".php")) {
            $this->controller = $_POST["control"];
        }
        if(!is_null($this->controller)) {
            $this->controller = new $this->controller;
            if(isset($_POST["action"]) && method_exists($this->controller, $_POST["action"])) {
                $this->action = $_POST["action"];
            }
            if(!is_null($this->action)) {
                call_user_func_array([$this->controller, $this->action], array());
            }
        }
    }
}
?>