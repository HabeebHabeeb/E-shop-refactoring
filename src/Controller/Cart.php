<?php
    require_once "../../vendor/autoload.php";
    use App\Model\Database;
    class Cart {
        private $itemId;
        private $itemArray = [];
        private $cartItem;

        public function __construct($itemId){
            $this->itemId = $itemId;
        }

        public function add(){
            $sql = "SELECT product_name,sizes,"
        }
    }
?>