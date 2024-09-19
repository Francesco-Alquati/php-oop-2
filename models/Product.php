<?php 
    class Product {
        public $name;
        public $quantity;
        public $price;
        public $image;
        public $category; 
        public $is_available;
    
        function __construct( $_name, $_quantity, $_price, $_image, Category $_category, $_is_available) {
            $this->name = $_name;
            $this->quantity = $_quantity;
            $this->price = $_price;
            $this->image = $_image;
            $this->category = $_category;
            $this->is_available = $_is_available;
        }
    
        public function getProductInfo() {
            $string = "Prezzo: "."<span class='text-green'>$this->price €</span>";

            if($this->is_available){
                $string.= "<br> Quantità in magazzino: "."<span class='text-red'>$this->quantity</span>";
            }
            else{
                $string.= " Prodotto non disponibile";
            }
            return $string;

        }

    }
    
?>