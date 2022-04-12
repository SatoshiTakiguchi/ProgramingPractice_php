<?php
class Fruits{
    protected $name;
    protected $price;
    
    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
}

// class Strawberries extends Fruits{
// }
// class Peaches extends Fruits{
// }

?>