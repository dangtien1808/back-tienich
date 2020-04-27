<?php
    class Controller {
        public function model($model) {
            return new $model;
        }
    }
?>