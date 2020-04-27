<?php
    class Demo extends Controller {
        function index () {
            echo "1";
        }
        function edit () {
            $user = $this->model("UserModel");
            echo json_encode($user->getUser());
        }
    }
?>