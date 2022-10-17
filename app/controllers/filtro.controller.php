<?php

require_once 'app/models/campeones.model.php';
require_once 'app/views/campeones.view.php';
require_once 'app/helpers/login.helper.php';

class filtroController{
    private $model;
    private $view;
    private $helper;

    public function __construct(){
        $this->model = new campeonModel();
        $this->view = new campeonView();
        $this->helper = new loginHelper();
        $this->faccion = new faccionesModel();
    }

    public function showFiltro(){  
        $facciones = $this->faccionesModel->getFacciones();
        $campeones = $this->campeonModel->getCampeones();
        $this->filtroView->showFiltro($campeones, $facciones);
    }



}