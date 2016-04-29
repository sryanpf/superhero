<?php
class Power {
    
    //private properties of a Power object
    private $id, $name, $ability, $description, $price, $image;
    
    public function __construct($id, $name, $ability, $description, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->ability = $ability;
        $this->description = $description;
        $this->price = $price;
        $this->image= $image;
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

    public function getImage() {
        return $this->image;
    }
    
    public function setId($id) {
        $this->id = $id;
    }




}
