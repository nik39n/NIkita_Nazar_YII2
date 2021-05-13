<?php 
    namespace classes;

class Tovar{
    public $name;
    public $price;
    public $supplier;
    
    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;

    }

    public function getTovar()
    {
        return "<br> <b>О товаре:</b>
                Имя:{$this->name}  <br>
                Цена : {$this->price} <br> ";

    }





}




?>