<?php

    class Database {

        public $host='localhost';
        public $db = 'f2i';
        public $user = 'root';
        public $password = '';
        public $port= 3306;

        public function connectDb() {

        try{

            $pdo = new PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db . '', $this->user, $this-> password);
            $pdo->exec("SET CHARACTER SET utf8");
            return $pdo;

        } catch (Exception $e){
            return null;
            }
        }
    }