<?php

use App\Controller\ChavePixController;
use App\Controller\CorrentistaController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {

  case '/correntista':
    CorrentistaController::listar();
    break;

  case '/correntista/entrar':
    CorrentistaController::login();
    break;

  case '/correntista/save':
    CorrentistaController::save();
    break;

  case '/correntista/deletar':
    CorrentistaController::delete();
    break;

  case '/ChavePix':
    ChavePixController::listar();
    break;

  case '/ChavePix/entrar':
    ChavePixController::login();
    break;
  
  case '/ChavePix/save':
    ChavePixController::save();
    break;

  case '/ChavePix/deletar':
    ChavePixController::delete();
    break;
}
