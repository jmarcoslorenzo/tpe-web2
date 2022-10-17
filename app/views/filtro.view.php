<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class filtroView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    
    function showFiltro($campeones,$facciones) {
        // asigno variables al tpl smarty
        $this->smarty->assign('campeones', $campeones);
        $this->smarty->assign('facciones', $facciones);
        // mostrar el tpl
        $this->smarty->display('campeonFilter.tpl');
    }
}