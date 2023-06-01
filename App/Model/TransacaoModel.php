<?php

namespace App\Model;

use App\DAO\TransacaoDAO;

class TransacaoModel extends Model
{

    public $id, $data_transacao, $valor, $id_conta_enviou, $id_conta_recebeu;

    public function save()
    {
        $dao = new TransacaoDAO(); 

        if(empty($this->id))
        {

            $dao->insert($this);

        } else {

        }        
    }

    public function getAllRows(int $id_cidadao)
    {      
        $dao = new TransacaoDAO();

        $this->rows = $dao->select($id_cidadao);
    }

}