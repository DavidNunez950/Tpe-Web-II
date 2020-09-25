<?php

    require_once("View/indumentariaView.php");
    require_once("Model/indumentariaModel.php");

    class IndumentariaController{

        private $view;
        private $model;

        function __construct() {
            $this->view = new StreamingView();
            $this->model = new StreamingModel();
        }


    }
?>