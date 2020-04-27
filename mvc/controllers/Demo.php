<?php
    class Demo extends Controller {
        function index () {
            echo "1";
        }
        function edit () {
            echo json_encode(UserModel::getUser());
        }
        function find () {
            try {
                $result = array(
                    "status" => "201",
                    "message" =>"",
                    "data" => null
                );
                if(isset($_POST['id'])) {
                    $result["data"] = UserModel::find($_POST['id']);
                }
            } catch (\Throwable $th) {
                $result = array(
                    "status" => "999",
                    "message" => "",
                    "data" => null
                );
            }
            echo json_encode($result);
        }
    }
?>