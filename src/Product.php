<?php

class Product {
    
    private $db;

    function __construct(IConn $db) {
        $this->db = $db->connect();
    }

    public function all() {
        $query = "SELECT * FROM products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
