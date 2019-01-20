<?php
include "product.php";
class DB{
    private $doors;
    function __construct(){
        $this->doors = array(new Product("Дверь Stripes1", "images/door1.png", "1", "7 500 РУБ."),
                             new Product("Дверь Minimalist1", "images/door2.png", "1", "9 500 РУБ."),
                             new Product("Дверь Luxury1", "images/door3.png", "1", "35 000 РУБ."),
                             new Product("Дверь Guard1", "images/door4.png", "1", "27 500 РУБ."),
                             new Product("Дверь Stripes2", "images/door1.png", "1", "7 500 РУБ."),
                             new Product("Дверь Minimalist2", "images/door2.png", "1", "9 500 РУБ."),
                             new Product("Дверь Luxury2", "images/door3.png", "1", "35 000 РУБ."),
                             new Product("Дверь Guard2", "images/door4.png", "1", "27 500 РУБ."),
                             new Product("Дверь Guard2", "images/door4.png", "1", "27 500 РУБ."));
    }
    public function getDoors(){
        return $this->doors;
    }
}
$db = new DB();
?>