<?php
    include_once "vendor/autoload.php";
    use App\Controller\Controller;

    if($_POST && !empty($_FILES['photo'])){
       //print_r($_POST);
      // print_r($_FILES['photo']);
        $productName = $_POST['product_name'];
             $price = $_POST['price'];
             $listPrice = $_POST['list_price'];
             $cat = $_POST['category'];
             $port = $_POST['portfolio'];
             $brand = $_POST['brand'];
             $details = $_POST['details'];
             $sizes = $_POST['sizes'];

             $fields = [
                'product_name'=>$productName,
                'price'=>$price,
                'list_price'=>$listPrice,
                'category'=>$cat,
                'portfolio'=>$port,
                'brand'=>$brand,
                'description'=>$details,
                'sizes'=>$sizes
            ];
             $ctrl = new Controller;
            $ctrl->setFile($_FILES);
            $ctrl->upload_image();
        if(!empty($ctrl->error))
        {
            echo $ctrl->display_errors();
        }else{
            $ctrl->setData($fields);
            $ctrl->add();
        }
    }

        if(isset($_POST['edit']))
        { 
            $ctrl = new Controller;
            $productName = $_POST['product_name'];
            $price = $_POST['price'];
            $listPrice = $_POST['list_price'];
            $cat = $_POST['category'];
            $port = $_POST['portfolio'];
            $brand = $_POST['brand'];
            $details = $_POST['details'];
            $sizes = $_POST['sizes'];
            $photo = explode(',',$_POST['photo']);
            $fields = [
                'product_name'=>$productName,
                'price'=>$price,
                'list_price'=>$listPrice,
                'category'=>$cat,
                'portfolio'=>$port,
                'brand'=>$brand,
                'description'=>$details,
                'sizes'=>$sizes
            ];
            if(!empty($ctrl->error))
            {
                echo $ctrl->display_errors();
            }else
            {
                $ctrl->setData($fields);
                if(!empty($ctrl->data))
                {
                    $ctrl->update($edit_id);
                }
            }
        }
        if(isset($_POST['cartId'])){
            $ctrl = new Controller;
            $ctrl->addToCart($_POST['cartId']);
        }
        if(isset($_POST['pro_id']) && !empty($_POST['pro_id'])){
            if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name']))
            {
                $ctrl = new Controller();
                $edit_index = $_POST['file-index'];
                $pro_id = $_POST['pro_id'];
                $ctrl->setFile($_FILES['file']);
                $ctrl->update_image($pro_id,$edit_index);
            }
        }
        if(isset($_POST['del-index'])){
            $ctrl = new Controller();
            $edit_id = $_POST['edit_id'];
            $ctrl->delete_image($_POST['edit_id'],$_POST['del-index']);
        }
    if(isset($_GET['delete']))
    {
        $delete_id = $_GET['delete'];
        $obj = new Controller;
        $obj->delete_this($delete_id);
    }
    if(isset($_POST['data']))
    {
        $count = $_POST['data'];
        $i = 0;
        $response = "";
        while($i < $count)
        {
            $response .= "<tr>";
            $response .= "<td><input class='form-control' id='size$i' type='text'></td>";
            $response .= "<td><input class='form-control' id='qty$i' type='number' min=0></td>";
            $response .= "</tr>";
            $i++;
        }
        echo $response;
    }
    
    if(isset($_GET['logout'])){
        $dbh = new Database;
        $db = $dbh->connect();
        $ctrl = new Controller($db);
        $ctrl::logOut();
    }
    if(isset($_POST['cart'])){
        //echo $_POST['cart_id']
        if($_POST['cart_id'] == 'login_first'){
            $url = $_SERVER['REQUEST_URI'];
            Session::set('cart_login','Login to create your Shopping Cart');
            if(strpos($url,'View')){
                header('Location: ../../E-shop/View/Admin/concept-master/Login/login.php');
            }
        }else{
            $dbh = new Database;
            $db = $dbh->connect();
            $ctrl = new Controller($db);
            $ctrl->add_cart($_POST['cart_id']);
        }
    }
    if(isset($_POST['Address'])){
        $obj = new Controller;
        foreach($_POST as $key => $value){
            if(empty($_POST[$key])){
                $obj->error[] =  $key." is required!";
            }
        }
        if(empty($obj->error)){
            $payType = $_POST['PAY_TYPE'];
            $cardType = new $payType;
            $buy = new Payment(intval(trim($_POST['AMOUNT'],'$')));
            $buy->buyNow($cardType);
        }else{
            echo $obj->display_errors();
        }
    }
    if(isset($_POST['pay'])){
        $dbh = new Database;
        $db = $dbh->connect();
        $ctrl = new Controller($db);
        $ctrl->checkout();
    }
    if(isset($_POST['product'])){
        $productName = $_POST['product'];
             $quantity = $_POST['quantity'];
             $reference = $_POST['payment_ref'];
             $address = $_POST['street'].",".$_POST['city'].".".$_POST['state'];
             $email = $_POST['email'];
             $contact = $_POST['contact'];
             $name = $_POST['name'];

             $fields = [
                'product'=>$productName,
                'quantity'=>$quantity,
                'shipping_address'=>$address,
                'email'=>$email,
                'contact'=>$contact,
                'name'=>$name,
                "payment_ref"=>$reference
            ];
             $ctrl = new Controller;
             $ctrl->orderSingle($fields);
    }
?>