<?php
   include_once "../vendor/autoload.php";
   use App\Controller\Controller;
   use App\Model\Session;

   $ctrl = new Controller;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="../index.phphtml"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="../index.php">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   $indexer = 0;
                                   $total = 0;
                                   //if(isset($_SESSION['user_id'])):
                                    //if(!empty($cart_data)):
                                    if(!empty(Session::get('cart'))):
                                        foreach(Session::get('cart') as $data):
                                            $total = $total + $data['list_price'];
                                            $image = explode(',',$data['photo']);
                                ?>
                                        <tr>
                                            <td class="shoping__cart__item">
                                                <div class="fotorama" style='width:270px;height:150px;'>
                                                    <?php
                                                        foreach($image as $img):
                                                    ?>
                                                            <img src="<?=$img?>" alt="img">
                                                    <?php
                                                        endforeach;
                                                    ?>
                                                </div>
                                                <h5 style='font-size:bold;font:italic;' class="product"><?=$data['product_name']?></h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                <?=$data['list_price']?>
                                            </td>
                                            <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty" id="qty-<?=$indexer?>" onclick="getId(this.id)">
                                                    <input type="text" value="1" class="quantity">
                                                </div>
                                            </div>
                                        </td>
                                            <td class="shoping__cart__total" id="price-<?=$indexer?>">
                                                <?=$data['list_price']?>
                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <span class="icon_close"></span>
                                            </td>
                                        </tr>
                                <?php
                                            $indexer++;
                                        endforeach;
                                    endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span id='sub-total'></span></li>
                            <li>Total <span id='total'></span></li>
                        </ul>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="../index.phphtml"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shipping Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="error"></div>
        <div class="" id="step1">
        <form style="display:block" id="form1">
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-12">
                        <label for="Address">Street</label>
                        <input type="text" id="street" name="street" required class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <label for="Address">City</label>
                        <input type="text" id="city" name="city" required class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <label for="Address">State</label>
                        <input type="text" id="state" required name="state" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="next">next</button>

            </form>
        </div>
        <div class="" style="display:none" id="step2">
        <form action="" id="form2">
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-12">
                        <label for="Address">Email</label>
                        <input type="text" id="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <label for="Address">Name</label>
                        <input type="text" id="name" name="name" required class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <label for="Address">Contact</label>
                        <input type="text" id="contact" name="contact" required class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="check">Checkout</button>
                <button class="btn btn-primary ml-2" id="back">Back</button>
            </form>
        </div>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script> 

    <script>
    let res = 0;
        $(document).ready(function(){
            //let res = 0; 
            let total = $(".shoping__cart__total").map(function(){
                return $(this).text();
            }).get();
            total.forEach((data)=>{
                res = res + Number(data);
            })
            $('#total').html("$ "+res);
            $('#sub-total').html("$ "+res);
            console.log(parseInt($("#total").html()) * 100);
        })
        let totalPrice ;
        let ele;
        let getId = function(id){
            ele = id;
        }
        var proQty = $('.pro-qty');
        proQty.prepend('<span class="dec qtybtn">-</span>');
        proQty.append('<span class="inc qtybtn">+</span>');
        proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue == 1) {
                    var newVal = parseFloat(oldValue);
                } else {
                    newVal = parseFloat(oldValue) - 1;
                }
            }
            $button.parent().find('input').val(newVal);
            let parent = $("#"+ele).parent().parent().parent();
            let data = parent.children('td').map(function(){
                return $(this).text();
            }).get();

            data[2] = newVal;
            data[3] = newVal * data[1];
            let idNum = ele.split('-')[1];
            $("#price-"+idNum).text(data[3]);
            let paren = proQty.parent().parent().parent();
            let res = 0; 
            let total = paren.children("td").map(function(){
                if($(this).hasClass("shoping__cart__total")){
                    return $(this).text();
                } 
            }).get();
            total.forEach((data)=>{
                res = res + Number(data);
            })
            $('#total').text("$ "+res);
            $('#sub-total').text("$ "+res);
        });
        $('#next').click(function(){
            if($("#state").val() != "" && $("#city").val() != "" && $("#street").val() != ""){
                $('#step1').hide();
                $('#step2').show();
            }
        })
        $('#back').click(function(){
            $('#step2').hide();
            $('#step1').show();
        })
        $("#form1").submit(() => {
            return false;
        })
        $("#form2").submit(() => {
            return false;
        })
        $("#check").click(function(e){
            if($("#email").val() != "" && $("#name").val() != "" && $("#contact").val() != ""){
                $("#exampleModal").hide();
               payWithPaystack(e)
              /* let formData = new FormData()
                    let data1 = $("#form1").serializeArray();
                    let data2 = $("#form2").serializeArray();
                    //console.log(data1);
                    for(let data of data1){
                        formData.append(data.name,data.value);
                    }
                    for(let data of data2){
                        formData.append(data.name,data.value);
                    }
                    //formData.append("ref",response.reference)
                    let products = $(".product").map(function(){
                            return $(this).text();
                        }).get();
                        let quantity = $(".quantity").map(function(){
                            return $(this).val();
                        }).get().filter((data)=>{
                            if(data !== " "){
                                return data;
                            }
                        });
                        let zipped = buildMap(products, quantity)
                        console.log(zipped);*/
            }
        })
        const buildMap = (keys, values) => {
   const map = new Map();
   for(let i = 0; i < keys.length; i++){
      map.set(keys[i], values[i]);
   };
   return map;
};
        function payWithPaystack(e) {
            e.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_test_a589929ab265e4255006501abc3ec8e42c16f000', // Replace with your public key
                email: document.getElementById("email").value,
                amount: res * 100,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function(){
                alert('Window closed.');
                },
                callback: function(response){
                    //let message = 'Payment complete! Reference: ' + response.reference;
                    let formData = new FormData()
                    let data1 = $("#form1").serializeArray();
                    let data2 = $("#form2").serializeArray();
                    //console.log(data1);
                    for(let data of data1){
                        formData.append(data.name,data.value);
                    }
                    for(let data of data2){
                        formData.append(data.name,data.value);
                    }
                    formData.append("ref",response.reference)
                    let products = $(".product").map(function(){
                            return $(this).text();
                        }).get();
                        let quantity = $(".quantity").map(function(){
                            return $(this).val();
                        }).get().filter((data)=>{
                        return data !== "";
                        });
                        //let zipped = products.map((x, i) => [x, quantity[i]]);
                        //let zipped = buildMap(products, quantity)
                        //formData.append("cart_item",zipped);
                        for(let key in products){
                            formData.append("cart_item[]",[products[key],quantity[key]])
                        }
                    $.ajax({
                        url: "../requests.php",
                        method: "POST",
                        data: formData,
                        processData: false,
                        cache: false,
                        contentType: false,
                        success: (res) => {
                            console.log(res);
                           // $(".modal").hide()
                        },
                        error: () => {
                            console.log("something went wrong");
                        }
                    })
                }
            });
            handler.openIframe();
        }
    </script>
</body>

</html>