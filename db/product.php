<?php
    class Product{
        private $name, $image_url, $decription, $price;
        function __construct($name, $image_url, $description, $price){
            $this->name = $name;
            $this->image_url = $image_url;
            $this->description = $description;
            $this->price = $price;
        }
        public function getName(){
            return $this->name;
        }
        public function getImageUrl(){
            return $this->image_url;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getPrice(){
            return $this->price;
        }
    }

?>