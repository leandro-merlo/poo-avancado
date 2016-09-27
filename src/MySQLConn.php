<?php

class MySQLConn implements IConn{

    private $host;
    private $user;
    private $password;
    private $database;

    function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    /** @return \mysqli */
    public function connect() {
        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->$database);
        mysqli_set_charset($mysqli, 'utf8');
        return $mysqli;
    }

}
