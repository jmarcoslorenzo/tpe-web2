<?php
require_once 'app/controllers/campeones.controller.php';
require_once 'libs/smarty/libs/Smarty.class.php';

class campeonView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty(); //inicializo smarty
    }


    function showCampeones($campeones, $logged){
        $this->smarty->assign('campeones', $campeones);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('table.tpl');
    }

    function showFormEdit(){
        $this->smarty->display('templates/formEdit.tpl');
    }

    function showEdit($campeonbyid){
        $this->smarty->assign('cameponbyid', $campeonbyid);
      
      }

    function showDetails($campeonbyid){
        $this->smarty->assign('campeonbyid', $campeonbyid);
        $this->smarty->display('detail.tpl');
    }
}
