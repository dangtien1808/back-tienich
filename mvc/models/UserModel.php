<?php
    class UserModel extends DataBase {
        public function getUser () {
            $query = "select * from users";
            return $this->fetchAll($query);
        }
    }
?>