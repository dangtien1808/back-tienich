<?php
    class UserModel {
        public $id;
        public $name;
        public $email;
        public $password;

        function __construct($id = null, $name = null, $email = null, $password = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        static public function getUser () {
            $query = "select * from users";
            $db = new DataBase;
            $list=[];
            foreach ($db::fetchAll($query) as $item) {
                $list[] = new UserModel(Common::getValue($item, 'id',0), Common::getValue($item, 'name'),
                Common::getValue($item, 'email'), Common::getValue($item, 'password'));
            }
            return $list;
           
        }
        static function find($id)
        {
            $db = new DataBase;
            $instance = $db::getInstance();
            $req = $instance->prepare('SELECT * FROM users WHERE id = :id');
            $req->execute(array('id' => $id));
        
            $item = $req->fetch();
            if (isset($item['id'])) {
                return new UserModel(Common::getValue($item, 'id',0), Common::getValue($item, 'name'),
                Common::getValue($item, 'email'), Common::getValue($item, 'password'));
            }
            return null;
        }
    }
?>