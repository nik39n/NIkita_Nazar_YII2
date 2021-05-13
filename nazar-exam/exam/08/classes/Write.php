<?php 
    namespace classes;

    class Write extends Tovar {


        public $author;

        public function __construct ($name,$price,$author){
            parent::__construct($name,$price);
            $this -> author = $author;


        }

        public function getTovar(){
            $str = parent::getTovar();
            $str .= "Автор :{$this->author}<br>";
            return $str;
        }

        public function getPriceWithDiscount(){
            return "Цена со скидкой ".$this->price * 0.8."<br> ";
        }


    }


?>