<?php

    class IndumentariaModel {

        private $db;

        function __construct() {
            $this->db  = new PDO('mysql:host=localhost;'.'dbname=db_indumentaria;charset=utf8', 'root', 'root');
        }

        

    }
?>

