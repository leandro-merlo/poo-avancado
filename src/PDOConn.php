<?php

namespace Source;

class PDOConn implements IConn{
    
    const TIPO_BANCO_MYSQL = 'mysql';
    
    private $user;
    private $pass;
    private $tipoBanco;
    private $nomeBanco;
    private $host;
    
    function __construct($tipoBanco, $nomeBanco, $host, $user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
        $this->tipoBanco = $tipoBanco;
        $this->nomeBanco = $nomeBanco;
        $this->host = $host;
    }

    /** @return \PDO */
    public function connect() {
        return new \PDO("{$this->tipoBanco}:host={$this->host};"
        . "dbname={$this->nomeBanco};charset=utf8;", $this->user, $this->pass);
    }

}
