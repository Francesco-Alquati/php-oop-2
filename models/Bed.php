<?php  
    require_once __DIR__.'/Product.php';
    
    class Bed extends Product{
        protected $size;

        function __construct($_name, $_quantity, $_price, $_image, Category $_category, $_is_available) {
            parent::__construct($_name, $_quantity, $_price, $_image, $_category, $_is_available);
        }

        public function setSize($_size){
            $this->size = $_size;
        }
        public function getSize(){
            return $this->size;
        }
        public function getClassName(){
            return get_class();
        }
    }
?>