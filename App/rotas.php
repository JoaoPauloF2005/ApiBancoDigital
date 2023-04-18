<?php


// use App\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{
  case '/correntista/save':
    CorrentistaController::
  break;
}