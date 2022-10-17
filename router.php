<?php
require_once 'app/controllers/campeones.controller.php';
require_once 'app/controllers/facciones.controller.php';
require_once 'app/controllers/login.controller.php';
require_once 'app/controllers/home.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


//leemos la accion que viene por parametro
$action = 'home'; //accion por defecto

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

//parsea la accion ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

//determina que camino seguir segun la accion
switch($params[0]){
    case 'home':
        $homeController = new homeController();
        $homeController->showHome();
        break;
    case 'campeones':
        $campeonController = new campeonesController();
        $campeonController->showCampeones();
        break;
    case 'login':
        $loginController = new loginController();
        $loginController->showLogin();
        break;
    case 'logout':
        $loginController = new loginController();
        $loginController->userLogout();
        break;
    case 'validate':
        $loginController = new loginController();
        $loginController->userValidate();
        break;    
    case 'add':
        $campeonController = new campeonesController();
        $campeonController->addCampeones();
        break;
    case 'delete':
        $campeonController = new campeonesController();
        $id = $params[1];
        $campeonController->deleteCampeon($id);
        break;
    case 'formEdit':
        $campeonController = new campeonesController();
        $campeonController->showFormEdit();
        $id = $params[1];
        $campeonController->editarCampeon($id);
        break;
    case 'detalle':
        $campeonController = new campeonesController();
        $id = $params[1];
        $campeonController->showDetailsCampeones($id);
        break;  
    case 'facciones':
        $faccionController = new faccionesController();
        $faccionController->showFacciones();
        break;
    case 'addFacciones':
        $faccionController = new faccionesController();
        $faccionController->addFacciones();
        break;
    case 'deleteFacciones':
        $faccionController = new faccionesController();
        $id_faccion = $params[1];
        $faccionController->deleteFaccion($id_faccion);
        break;
    case 'editFacciones':
        $faccionController = new faccionesController();
        $faccionController->editarFaccion($id_faccion);
        break;
    case 'formEditFacc':
        $faccionController = new faccionesController();
        $faccionController->showFormEdit();
        $id_faccion = $params[1];
        $faccionController->editarFaccion($id_faccion);
        break;   
    case 'filter':
        $faccionController = new faccionesController();
        $faccionController->filter();
        break; 

    default:
        echo('404 page not found');
        break;
}