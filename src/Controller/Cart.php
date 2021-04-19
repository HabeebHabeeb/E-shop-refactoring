<?php
    namespace App\Controller;
    use App\Model\Database;
    use App\Controller\Controller;
    class Cart extends Database{
        private $itemId;
        private $itemArray;
        private $cartItem = array();

        public function setItemId($id){
            $this->itemId = $id;
        }

        public function add(){
            if($this->isPresent($this->itemId)){
                $response = [
                    'message' => "item already in cart"
                ];
                echo json_encode($response);
            }else{
                $ctrl = new Controller;
                $this->itemArray = $ctrl->select_this($this->itemId);
                $this->itemArray['quantity'] = 1;
                $_SESSION['cart'][] = $this->itemArray;
                $response = [
                    'message' => "item added to cart"
                ];
                echo json_encode($response); 
            }  
        }
        public function isPresent($id){
            if(isset($_SESSION['cart']) ){
                for ($i=0; $i < count($_SESSION['cart']); $i++) { 
                     if(in_array($id,$_SESSION['cart'][$i])){
                         return true;
                     }
                }
             }
        }
        public function removeItem($id){
            $index;
            for ($i=0; $i < count($_SESSION['cart']); $i++) { 
                if(in_array($id,$_SESSION['cart'][$i])){
                    $index = $i;
                }
                
           }
            $remove = array_splice($_SESSION['cart'],$index,1);
            if($remove){
                echo "item removed";
            }
        }

        public function update($quantity){
            $index = 0;
            $cartArray = $_SESSION['cart'];
            foreach($_SESSION['cart'] as $key => &$value){
               $value['quantity'] = $quantity[$index];
               $index++;
            }
        }
    }
?>
