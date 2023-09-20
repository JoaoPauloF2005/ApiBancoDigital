<?php

use App\Controller\TransacaoController;
use App\Controller\ContaController;
use App\Controller\ChavePixController;
use App\Controller\CorrentistaController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
// Correntista
case '/correntista/salvar':
  CorrentistaController::save();
break;

case '/correntista/entrar':
  CorrentistaController::login();
break;

// Transação
case '/transacao/pix/receber':
  TransacaoController::receberPix();
break;

case '/transacao/pix/enviar':
  TransacaoController::enviarPix();
break;

 // Chave Pix
 case '/pix/chave/salvar':
  ChavePixController::salvar();
break;

case '/pix/chave/remover':
  ChavePixController::remover();
break;


default:
  header('HTTP/1.0 403 Forbidden');
break;
}