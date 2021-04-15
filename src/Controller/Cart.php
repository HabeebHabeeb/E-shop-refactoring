<?php
    require_once "../../vendor/autoload.php";
    use App\Model\Database;
    class Cart extends Database{
        private $itemId;
        private $itemArray = [];
        private $cartItem;

        public function __construct($itemId){
            $this->itemId = $itemId;
        }

        public function add(){
            $sql = "SELECT product_name,sizes,list_price,photo FROM products WHERE id=:id";
            $preparedStatement = $this->DBHandler->prepare($sql);
            $executeQuery = $preparedStatement->execute([$this->itemId]);
            $result = $preparedStatement->fetch();
            print_r($result);
        }
    }
?>
