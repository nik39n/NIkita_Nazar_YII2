<?php 
namespace classes;

class Electro  extends Tovar{

    public $value ;

    public function __construct ($name,$price,$value){
        parent::__construct($name,$price);
        $this -> value = $value;


    }

    public function getTovar(){
        $str = parent::getTovar();
        $str .= " Емкость :{$this->value} МБ<br>";
        return $str;
    }

    public function getPriceWithDiscount(){
        return "Цена со скидкой ".$this->price * 0.8."<br> ";

    }
}


?>