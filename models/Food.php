<?php 
    require_once __DIR__.'/Product.php';

    class Food extends Product{
        protected $calories;

        function __construct($_name, $_quantity, $_price, $_image, Category $_category, $_is_available){
            parent::__construct($_name, $_quantity, $_price, $_image, $_category, $_is_available);
        }
        public function setCalories($_calories){
            $this->calories = $_calories;
        }
        public function getCalories(){
            return $this->calories;
        }
    }
?>