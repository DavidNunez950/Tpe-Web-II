<?php

    class IndumentariaView {

        private $title;

        function __construct() {
            $this->title  = "Subject";
        }

        function showHome($arr1, $arr2){
        }

        function ShowHomeLocation(){
            header("Location: ".BASE_URL."home");
        }
    }
?>