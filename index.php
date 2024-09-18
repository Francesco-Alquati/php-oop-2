<?php 
    class Product {
        public $id;
        public $name;
        public $description;
        public $price;
        public $category; 
    
        function __construct($_id, $_name, $_description, $_price, $_category) {
            $this->id = $_id;
            $this->name = $_name;
            $this->description = $_description;
            $this->price = $_price;
            $this->category = $_category;
        }
    
        public function getInfo() {
            return "Nome: {$this->name}, Prezzo: {$this->price}";
        }
        
    }
?>
