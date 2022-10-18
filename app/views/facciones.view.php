<?php
require_once 'libs/smarty/libs/Smarty.class.php';

class faccionesView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty(); //inicializo smarty
    }

    function showFacciones($facciones, $logged){
        $this->smarty->assign('facciones', $facciones);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('tableFacc.tpl');
        }

    function showFormEdit(){
        $this->smarty->display('templates/formEditFacc.tpl');
    }
    function showEdit($faccionesbyid){
        $this->smarty->assign('faccionesbyid', $faccionesbyid);
      
    }

    function showResultFilter($campeonandfaccion){
        $this->smarty->assign('campeonandfaccion', $campeonandfaccion);
        $this->smarty->display('campeonFilter.tpl');

    }


}