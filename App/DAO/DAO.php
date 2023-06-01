<?php

namespace App\DAO;

use Exception;
use \PDO;
USE PDOException;           

abstract class DAO extends PDO
{
   protected $conexao;

    public function __construct()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ];

        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];

         $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass'], $options);
    }
    
}