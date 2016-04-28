<?php
class Power {
    
    //private properties of a Power object
    private $id, $name, $ability, $description, $price;
    
    public function __construct($id, $name, $ability, $description, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->ability = $ability;
        $this->description = $description;
        $this->price = $price;
    }
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAbility() {
        return $this->ability;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }


    public function setId($id) {
        $this->id = $id;
    }




}