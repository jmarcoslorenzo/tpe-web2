<?php
require_once 'app/models/campeones.model.php';
require_once 'app/views/campeones.view.php';
require_once 'app/helpers/login.helper.php';


class campeonesController{
        private $model;
        private $view;
        private $helper;

        public function __construct(){
            $this->model = new campeonModel();
            $this->view = new campeonView();
            $this->helper = new loginHelper();
        }

        public function showCampeones(){
          $campeones = $this->model->getCampeones();
          $logged = $this->helper->logged();
          $this->view->showCampeones($campeones, $logged);
        }

        public function showDetailsCampeones($id){
          session_start();
          $detailsCampeones = $this->model->getDetailsCampeones($id);
          $this->view->showDetails($detailsCampeones);
        }


        function addCampeones() {
          // TODO: validar entrada de datos
         
    
          $campeon = $_POST['campeon'];
          $rareza = $_POST['rareza'];
          $afinidad = $_POST['afinidad'];
    
          $this->model->insertCampeones($campeon, $rareza, $afinidad);
    
          header("Location: " . BASE_URL. "campeones"); 
      }
     
      function deleteCampeon($id) {
          $this->model->deleteCampeonById($id);
          header("Location: " . BASE_URL."campeones");
      }

      function showFormEdit(){
        session_start();
        $this->view->showFormEdit();
      }

      public function editarCampeon($id) {
        $campeonbyid = $this->model->getCampeonById($id);
        $this->view->showEdit($campeonbyid);
        if (!empty($_POST['campeon'])&& (!empty($_POST['rareza']))&& (!empty($_POST['afinidad']))){
        $campeon = $_POST['campeon'];
        $rareza = $_POST['rareza'];
        $afinidad = $_POST['afinidad'];
        $id = $this->model->updateCampeon($campeon, $rareza, $afinidad, $id);
        header("Location: " . BASE_URL . "campeones");
      }
    }
}

