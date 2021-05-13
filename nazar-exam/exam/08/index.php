<?php 
use classes\{Tovar,Electro,Write};
require_once "classes/Tovar.php";
require_once "classes/Write.php";
require_once "classes/Electro.php";
   

$book = new Write("Lehf",200," Толстой ");
echo $book->getTovar();
echo $book->getPriceWithDiscount();
$book2 = new Write("Стул",195," Достоевский ");
echo $book->getTovar();
echo $book->getPriceWithDiscount();

$music = new Electro("Сон",200, 24 );
echo $music->getTovar();
echo $music->getPriceWithDiscount();

$music2 = new Electro("Теля",200, 52 );
echo $music2->getTovar();
echo $music2->getPriceWithDiscount();

?>