<?php

require_once 'app/models/facciones.model.php';
require_once 'app/views/facciones.view.php';
require_once 'app/helpers/login.helper.php';

class faccionesController{
        private $model;
        private $view;
        private $helper;

        public function __construct(){
            $this->model = new faccionesModel();
            $this->view = new faccionesView();
            $this->helper = new loginHelper();
        }

        public function showFacciones(){
            $logged = $this->helper->logged();
            $facciones = $this->model->getFacciones();
            $this->view->showFacciones($facciones, $logged);
        }

        function addFacciones() {
            // TODO: validar entrada de datos
           
      
            $id_faccion = $_POST['id_faccion'];
            $faccion = $_POST['faccion'];
            $dominio = $_POST['dominio'];
      
            $this->model->insertFaccion($id_faccion, $faccion, $dominio);
      
            header("Location: " . BASE_URL. "facciones"); 
        }
        function deleteFaccion($id_faccion) {
            $this->model->deleteFaccionById($id_faccion);
            header("Location: " . BASE_URL. "facciones");
        }
  
        function showFormEdit(){
            session_start();
          $this->view->showFormEdit();
        }
        public function editarFaccion($id_faccion) {
            $faccionesbyid = $this->model->getFaccionById($id_faccion);
            $this->view->showEdit($faccionesbyid);
            if ((!empty($_POST['faccion']))&& (!empty($_POST['dominio']))){
            
            $faccion = $_POST['faccion'];
            $dominio = $_POST['dominio'];

            $id_faccion = $this->model->updateFaccion($faccion, $dominio, $id_faccion);
            header("Location: " . BASE_URL . "facciones");
          }
        }

        function filter(){
            if(isset ($_POST['selected'])&&(!empty($_POST['selected']))){
                $selected = $_POST['selected'];
                $campeonandfaccion = $this->model->getCampeonAndFaccion($selected);
                $this->view->showResultFilter($campeonandfaccion);
            }
        }

     

     
  
}