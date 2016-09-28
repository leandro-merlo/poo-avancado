<?php

namespace Source;

class ProductRepository implements IRepository{

    private $db;
    private $reference;
    
    function __construct(\Source\IConn $db, \Source\IProduct $reference) {
        $this->db = $db->connect();
        $this->setReferente($reference);
    }
    
    public function all() {
        $query = "SELECT * FROM products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);        
    }
    
    public function getReference() {
        return $this->reference;
    }
    
    public function setReferente(IProduct $reference){
        $this->reference = $reference;
    }


    public function create() {
        
    }

    public function delte() {
        
    }

    public function read() {
        
    }

    public function update() {
        
    }

}
