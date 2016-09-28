<?php

namespace Source;

class Product implements IProduct{

    private $id;
    private $name;
    private $desc;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDesc() {
        return $this->desc;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDesc($desc) {
        $this->desc = $desc;
    }


}
