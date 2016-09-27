<?php

const DB_TYPE_PDO = 'PDO';
const DB_TYPE_MYSQL = 'MySQL';

class Container {

    
    public static function newProduct($db_type = null) {
        return new Product(self::getConn());
    }
    
    /**
     * 
     * @param IConn $db_type
     * @throws Exception
     */
    public static function getConn($db_type = DB_TYPE_PDO){
        switch ($db_type) {
            case DB_TYPE_PDO:
                return self::getPDOConn();
            case DB_TYPE_MYSQL:
                return self::getMySQLConn();
            default:
                throw new Exception('Argumento inválido!');
        }
    }
    
    public static function getPDOConn() {
        return new PDOConn(DB_PDO_TYPE, DB_NAME, HOST, USER, PASS);
    }
    
    public static function getMySQLConn(){
        return new MySQLConn(HOST, USER, PASS, DB_NAME);
    }
}
