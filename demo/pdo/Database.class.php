<?php

    require_once 'PDOConn.class.php';

    class Database extends PDOConn{

        private $host, $user, $pass, $base;

        public $pdo;

        public function __construct(string $host, string $base, string $user, string $pass){

            $this->host = $host;
            $this->base = $base;
            $this->user = $user;
            $this->pass = $pass;

            $this->pdo = new PDOConn($this->host, $this->name, $this->user, $this->pass);

            echo 'connect';

        }

        public function select(string $table, array $fields, string $params = null){
            
        }

    }