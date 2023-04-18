<?php


 use App\Controller\CorrentistaController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{
  case '/correntista/save':
    CorrentistaController::salvar();
  break;

  case '/correntista':
    CorrentistaController::listar();
  break;

  case '/correntista/deletar':
    CorrentistaController::deletar();
  break;
}