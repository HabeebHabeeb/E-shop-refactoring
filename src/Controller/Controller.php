<?php

    namespace App\Controller;
    use App\Model\Session;
    use App\Model\Database;

    class Controller extends Database
    {
        private $productTable = 'products';
        private $categoryTable = 'categories';
        private $brandTable = 'brands';
        private $data;
        private $files;
        private $fileNames = "";
        public $error = [];
        public $success = [];

        public function setData($data)
        {
            $this->data = $data;
        }
        public function setFile($file)
        {
            $this->files = $file;
        }
        public function setFileName($name){
            $this->fileNames = $name;
        }
        public function add_brand()
        {
            $brand = $this->data['brand'];
            $select_brand = "SELECT 
                            * 
                        FROM 
                            ".$this->brandTable." 
                        WHERE 
                            brand='$brand'";
                            
            $prep_brand_query = $this->DBHandler->query($select_brand);
            $brand_prop = $prep_brand_query->fetch();
            if($prep_brand_query->rowCount() == 0)
            {
                $sql = "INSERT INTO brands (brand) VALUE (:brand)";
                $stmt = $this->DBHandler->prepare($sql);
                $stmt->bindValue(':brand',$this->data['brand']);
                $exec = $stmt->execute();
                $select_brand = "SELECT
                                * 
                            FROM 
                                brands 
                            WHERE 
                                brand='$brand'";
                $prep_brand_query = $this->DBHandler->query($select_brand);
                $brand_prop = $prep_brand_query->fetch();
            }
            $this->data['brand'] = $brand_prop['id'];
        }

        public function add_category()
        {
            $query_cat = "SELECT 
                        * 
                    FROM "
                        .$this->categoryTable." 
                    WHERE 
                        category = :category 
                    AND 
                        parent = 0";
            $prep_cat_query = $this->DBHandler->prepare($query_cat);
            $prep_cat_query->bindValue(':category',$this->data['category']);
            $prep_cat_query->execute();
            $parent = $prep_cat_query->fetch();
            if($prep_cat_query->rowCount() == 0)
            {
                $sql = "INSERT INTO "
                        .$this->categoryTable."
                        (category) 
                    VALUE
                        (:category)";
                $prep_cat_query = $this->DBHandler->prepare($sql);
                $prep_cat_query->bindValue(':category',$this->data['category']);
                $exec = $prep_cat_query->execute();
                $query_cat = "SELECT
                            * 
                        FROM "
                            .$this->categoryTable."
                        WHERE 
                            category = :category 
                        AND 
                            parent = 0";
                $prep_cat_query = $this->DBHandler->prepare($query_cat);
                $prep_cat_query->bindValue(':category',$this->data['category']);
                $prep_cat_query->execute();
                $parent = $prep_cat_query->fetch();
            }
            $this->data['category'] = $parent['id'];
            //////////Insert portfolio
            $query_child = "SELECT 
                            * 
                        FROM "
                            .$this->categoryTable."
                        WHERE 
                            category = ? 
                        AND 
                            parent = ? ";
            $prep_child_query = $this->DBHandler->prepare($query_child);
            $prep_child_query->execute([$this->data['portfolio'],$parent['id']]);
            $child = $prep_child_query->fetch();
            if($prep_child_query->rowCount() == 0)
            {
                $sql = "INSERT INTO "
                        .$this->categoryTable."
                        (category,parent) 
                    VALUES 
                        (?,?)";
                $stmt = $this->DBHandler->prepare($sql);
                $exec = $stmt->execute([$this->data['portfolio'],$parent['id']]);
                $query_cat = "SELECT 
                            * 
                        FROM "
                            .$this->categoryTable." 
                        WHERE 
                            category = ? 
                        AND 
                            parent = ?";
                $prep_child_query = $this->DBHandler->prepare($query_cat);
                $prep_child_query->execute([$this->data['portfolio'],$parent['id']]);
                $child = $prep_child_query->fetch();
            }
            $this->data['portfolio'] = $child['id'];
        }
        public function upload_image()
        {
            $name = $this->files['photo']['name'];
            $size = $this->files['photo']['size'];
            $tmp_name = $this->files['photo']['tmp_name'];
            $type = $this->files['photo']['type'];
            $formats = ['jpg','jpeg','png'];
            $db_path = [];
            for($i = 0;$i < count($name);$i++)
            {
                $ext = explode('/',$type[$i]);
                $actExt = end($ext);
                if(!in_array($actExt,$formats))
                {
                    $this->error[] = "Image format not allowed";
                break;
                }
                if($size[$i] > 101010101)
                {
                    $this->error[] = "File too large";
                break;
                }
                if(empty($this->error))
                {
                    $file_name = sha1(microtime()).'.'.$actExt;
                    $dir = $_SERVER['DOCUMENT_ROOT'].'/E-shop/View/Admin/Uploads/'.$file_name;
                    $db_path[] = '/E-shop/View/Admin/Uploads/'.$file_name;
                    move_uploaded_file($tmp_name[$i],$dir);
                }
            }
            $this->fileNames .= implode(',',$db_path);
        }
        public function update_image($id,$index)
        {
           $name = $this->files['name'];
           $type = $this->files['type'];
           $size = $this->files['size'];
           $format = ['jpg','jpeg','png'];
           $tmp = $this->files['tmp_name'];
           $ext = explode('.',$name);
           $actExt = strtolower(end($ext));
           $file_name = sha1(microtime()).".".$actExt;
           $upload_name = '/E-shop-refactoring/View/Admin/Uploads/'.$file_name;
           $dir = $_SERVER['DOCUMENT_ROOT']."/E-shop-refactoring/Admin/Uploads/".$file_name;
           if($size > 101010101)
           {
               $this->error[] = "File too large";
           }
           if(!in_array($actExt,$format))
           {
               $this->error[] = "Image Format not allowed";
           }
           if(empty($this->error))
           {
               move_uploaded_file($tmp,$dir);
               $entry = $this->select_this($id);
               $image = explode(',',$entry['photo']);
               $image[$index] = $upload_name;
               $sequel = "UPDATE "
                        .$this->productTable."
                    SET 
                        photo = ? 
                    WHERE 
                        id = ?";
               $stmt = $this->DBHandler->prepare($sequel);
               $stmt->execute([implode(',',$image),$id]);
               echo $upload_name;
            }
        }
        public function delete_image($id,$index)
        {
            $data = $this->select_this($id);
            $photo = explode(',',$data['photo']);
            unset($photo[$index]);
            $sequel = "UPDATE "
                    .$this->productTable." 
                SET 
                    photo =:photo 
                WHERE 
                    id =:id";
            $stmt = $this->DBHandler->prepare($sequel);
            $stmt->bindValue(':photo',implode(',',$photo));
            $stmt->bindValue(':id',$id);
            $exec = $stmt->execute();
            if($exec){
                echo "removed";
            }else{
                echo "something went wrong";
            }
        }
        public function validate()
        {
            $this->add_brand();
            $this->add_category();
        }
        public function add()
        {
            $this->validate();
            $this->data['photo'] = $this->fileNames;
                $query_keys = implode(',',array_keys($this->data));
                $query_values = implode(', :',array_keys($this->data));
                $query = "INSERT INTO 
                            products($query_keys) 
                        VALUES
                            (:".$query_values.")";
                $prep_stmt = $this->DBHandler->prepare($query);
                foreach($this->data as $key => $value)
                {
                    $prep_stmt->bindValue(":".$key,$value);
                }
                $exec = $prep_stmt->execute();
                if($exec)
                {
                   echo "success";
                }else{
                    echo "something went wrong";
                }
        }
        public function selectAll()
        {
            $select_query = "SELECT 
                            * 
                        FROM 
                            products 
                        WHERE 
                            deleted=0";
            $stmt = $this->DBHandler->query($select_query);
            $data = $stmt->fetchAll();
            for($i= 0;$i < count($data);$i++){
                $id = $data[$i]['brand'];
                $sequel = "SELECT 
                            * 
                        FROM 
                            brands 
                        WHERE 
                            id =?";
                $stmt = $this->DBHandler->prepare($sequel);
                $stmt->execute([$id]);
                $res = $stmt->fetch();
                $data[$i]['brand'] = $res['brand'];
            }
            return $data;
        }
        public function select_Brands(){
            $res = $this->selectAll();
            $brands = [];
            $brand = [];
            $sequel = "SELECT
                        brand
                    FROM
                        brands";
            $stmt = $this->DBHandler->query($sequel);
            $result = $stmt->fetchAll();
            for($i = 0;$i < count($res);$i++){
                $brands[] = $res[$i]['brand'];
            }
            for($i = 0;$i < count($result);$i++){
                    $brand[] = $result[$i]['brand'];
            }
            $output =   array_uintersect($brand,$brands,function($x,$y){
                            if ($x === $y)
                            {
                                return 0;
                            }
                            return ($x > $y)?1:-1;
                        });
            return $output;
        }
        public function select_this($id)
        {
            $query = "SELECT 
                    * 
                FROM 
                    products 
                WHERE 
                    id=:id";
            $prep_stmt = $this->DBHandler->prepare($query);
            $prep_stmt->bindValue(':id',$id);
            $prep_stmt->execute();
            $result = $prep_stmt->fetch();
            $get_cat = "SELECT 
                        * 
                    FROM 
                        categories 
                    WHERE 
                        id = ? 
                    AND 
                        parent = 0";
            $prep = $this->DBHandler->prepare($get_cat);
            $prep->execute([$result['category']]);
            $cat_res = $prep->fetch();
            $result['category'] = $cat_res['category'];
            ////////
            $get_port = "SELECT 
                        * 
                    FROM 
                        categories 
                    WHERE 
                        id =:id 
                    AND 
                        parent =:parent ";
            $prep_port = $this->DBHandler->prepare($get_port);
            $prep_port->bindValue(':id',$result['portfolio']);
            $prep_port->bindValue(':parent',$cat_res['id']);
            $prep_port->execute();
            $port_res = $prep_port->fetch();
            $result['portfolio'] = $port_res['category'];
            //////////
            $get_brand = "SELECT 
                        * 
                    FROM 
                        brands 
                    WHERE 
                        id =?";
            $prep_brand = $this->DBHandler->prepare($get_brand);
            $prep_brand->execute([$result['brand']]);
            $brand_res = $prep_brand->fetch();
            $result['brand'] = $brand_res['brand'];
            return $result;
        }  
        public function update($id)
        {
            $this->validate();
            if(!empty($this->fileNames)){
                $this->data['photo'] = $this->fileNames;
            }
            $st = "";
            foreach ($this->data  as $key => $value) 
            {
                $st .= "$key = :".$key.", ";
            }
            $sql = "UPDATE
                    products
                SET 
                    ".rtrim($st,', ')." 
                WHERE 
                    id = ".$id;
            $stmt = $this->DBHandler->prepare($sql);
            foreach ($this->data as $key => $value) 
            {
                # code...
                $stmt->bindValue(":".$key,$value);
            }
            $exec = $stmt->execute();
            if($exec)
            {
                header('Location: pages/data-tables.php');
            }
        }
        public function delete_this($id)
        {
            $sequel = "UPDATE 
                    products 
                SET 
                    deleted = 1 
                WHERE 
                    id=?";
            $stmt = $this->DBHandler->prepare($sequel);
            $exec = $stmt->execute([$id]);
            if($exec)
            {
                header('Location: data-tables.php');
            }
        }
        public function display_errors()
        {
            $display = "<ul class='bg-info text-center m-b-18'>";
            foreach ($this->error as $key) 
            {
                # code...
                $display .= "<li class='text-danger'>".$key."</li>";
            }
            $display .= "</ul>";
            return $display;
        }
        public function addUser()
        {
            $keys = implode(',',array_keys($this->data));
            $values = implode(', :',array_keys($this->data));
            $sequel = "SELECT 
                    * 
                FROM 
                    users 
                WHERE 
                    email = ?";
            $stmt = $this->DBHandler->prepare($sequel);
            $stmt->execute([$this->data['email']]);
            if($stmt->rowCount() > 0)
            {
                $this->error[] = "user_id with this email already exist!";
            }

            if(!empty($this->error))
            {
                echo $this->display_errors();
            }else
            {
                $sequel = "INSERT INTO 
                        users ($keys) 
                    VALUES 
                        (:".$values.")";
                $stmt = $this->DBHandler->prepare($sequel);
                foreach ($this->data as $key => $value)
                {
                    # code...
                    $stmt->bindValue(":".$key,$value);
                }
                $exec = $stmt->execute();
                if($exec)
                {
                    header('Location: ../../../index.php');
                }
            }
        }
        public function login()
        {
            $sequel = "SELECT 
                        * 
                    FROM 
                        users 
                    WHERE 
                        email = ?";
            $stmt = $this->DBHandler->prepare($sequel);
            $stmt->execute([$this->data['email']]);
            $result = $stmt->fetch();
            if($stmt->rowCount() == 0)
            {
                $this->error[] = "user_id not found";
            }
            if(!empty($this->error))
            {
                echo $this->display_errors();    
            }else
            {
                if(!password_verify($this->data['pword'],$result['pword']))
                {
                    $this->error[] = "Password does not match our record.Try again";
                }
                if(!empty($this->error))
                {
                    echo $this->display_errors();
                }
            }
        }
        static public function is_logged_in()
        {
            if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
            {
                return true;
            }
            return false;
        }
        public static function login_error_redirect($url)
        {
            Session::set('error_flash','You have no permission to this page');
            if(isset($_SESSION['user_id']))
            {
                unset($_SESSION['error_flash']);
            }
            header('Location: '.$url);
        }
        public static function logOut()
        {
            if(isset($_SESSION['user_id']))
            {
                Session::destroy();
            }
            header("Location: ../View/index.php");
        }
        public function addToCart($id){
            $sql = "SELECT product_name,sizes,photo,list_price FROM products WHERE id=?";
            $prep = $this->DBHandler->prepare($sql);
            $prep->execute([$id]);
            $res = $prep->fetch();
            $sess[] = $res;
            $_SESSION['cart'][] = $res;
        }
        public function cart(){
            $cart_table = "user_".Session::get('user_id')['id'];
            $sequel = "SELECT * FROM $cart_table WHERE active = 1";
            $result = $this->DBHandler->query($sequel);
            return $result;
        }
        public function orderSingle($orderDetails){
            $query_keys = implode(',',array_keys($orderDetails));
                $query_values = implode(', :',array_keys($orderDetails));
                $query = "INSERT INTO 
                            singleorders($query_keys) 
                        VALUES
                            (:".$query_values.")";
                $prep_stmt = $this->DBHandler->prepare($query);
                foreach($orderDetails as $key => $value)
                {
                    $prep_stmt->bindValue(":".$key,$value);
                }
                $exec = $prep_stmt->execute();
                if($exec)
                {
                   echo "success";
                }else{
                    echo "something went wrong";
                }
        }
    }

?>
