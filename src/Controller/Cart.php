<?php
    namespace App\Controller;
    use App\Model\Database;
    use App\Controller\Controller;
    class Cart extends Database{
        private $itemId;
        private $itemArray = [];
        private $cartItem;

        public function __construct($itemId){
            $this->itemId = $itemId;
        }

        public function add(){
            $ctrl = new Controller;
            $item = $ctrl->select_this($this->itemId);
            print_r($item);
        }
    }
?>
