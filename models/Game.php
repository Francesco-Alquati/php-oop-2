<?php  
    require_once __DIR__.'/Product.php';
    
    class Game extends Product{
        protected $material;

        function __construct($_name, $_quantity, $_price, $_image, Category $_category, $_is_available) {
            parent::__construct($_name, $_quantity, $_price, $_image, $_category, $_is_available);
        }

        public function setMaterial($_material){
            $this->material = $_material;
        }
        public function getMaterial(){
            return $this->material;
        }
    }
?>