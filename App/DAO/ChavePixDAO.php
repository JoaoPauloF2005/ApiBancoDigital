<?php

namespace App\DAO;

use App\Model\ChavePixModel;

class ChavePixDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();       
    }

    public function select()
    {
        $sql = "SELECT * FROM chave_pix ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS);
    }

    public function insert(ChavePixModel $m) : bool
    {
        $sql = "INSERT INTO chave_pix (chave, tipo, , senha) VALUES (?, ?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $m->nome);
        $stmt->bindValue(2, $m->cpf);
        $stmt->bindValue(3, $m->data_nasc);
        $stmt->bindValue(4, $m->senha);

        return $stmt->execute();
    }

    public function update(CorrentistaModel $m)
    {
        $sql = "UPDATE correntista SET nome=?, cpf=?, data_nasc=?, senha=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $m->nome);
        $stmt->bindValue(2, $m->cpf);
        $stmt->bindValue(3, $m->data_nasc);
        $stmt->bindValue(4, $m->senha);
        $stmt->bindValue(3, $m->id);

        return $stmt->execute();
    }

    public function delete(int $id) : bool
    {
        $sql = "DELETE FROM correntista WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        return $stmt->execute();
    }
}