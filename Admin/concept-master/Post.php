<?php
    include_once "../../vendor/autoload.php";
    use App\Controller\Controller;
    $ctrl = new Controller();
    
    //include_once "../../../src/requests.inc.php";
    //include_once "../../../src/header.inc.php";
?>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <script src="https://kit.fontawesome.com/ca4fb61032.js" crossorigin="anonymous"></script>
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <style>
        .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.bttn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 10px;
  padding : 4px 2px 4px 2px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="../../../src/log_out.php?logout=true"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- test -->
                            <li class="nav-item ">
                                <a class="nav-link " href="pages/data-tables.php"><i class="fa fa-fw fa-user-circle"></i>Products <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="Post.php"><i class="fa fa-fw fa-user-circle"></i>Add Product <span class="badge badge-success">6</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E-commerce Product Checkout </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Product Checkout</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="content">
                <!--content-->
                <?php
                    if(isset($_GET['edit']))
                    {
                        $edit_id = $_GET['edit'];
                        //$edit_data = new Controller;
                        $data = $ctrl->select_this($edit_id);
                        $img = explode(',',$data['photo']);          
                    }
                    //include_once "../../requests.php";
                ?>
                <div class="alert alert-danger hidden" id="message" style="display:none">
                </div>
                <form id='form' enctype="multipart/form-data">
                    <div class="row my-4 mx-3">
                        <div class="form-group col-12 col-md-4 col-sm-12">
                            <label for="name">Title</label>
                            <input type="text" name="product_name" required id="product_name" class="form-control" value="<?=((isset($_GET['edit']))?$data['product_name']:'')?>">
                        </div>
                        <div class="form-group col-12 col-md-4 col-sm-12">
                            <label for="price">Price:</label>
                            <input type="number" required name="price" id="price" class="form-control" min=0 value="<?=((isset($_GET['edit']))?$data['price']:'')?>">
                        </div>
                        <div class="form-group col-12 col-md-4 col-sm-12">
                            <label for="listPrice">List Price:</label>
                            <input type="text" required name="list_price" id="list_price" class="form-control" value="<?=((isset($_GET['edit']))?$data['list_price']:'')?>">
                        </div>
                    </div>
                    <div class="row mx-3 my-4">
                        <div class="form-group col-md-12 col-lg-6 col-sm-12">
                            <?php
                                if(!empty($img[0])):
                                    $count = 0;
                            ?>
                                    <div class="row">
                                        <?php
                                            foreach($img as $photo): 
                                        ?>
                                                <div style="width:150px;height:150px;" class='col-4 col-md-4 col-sm-4' id="div<?=$count?>">
                                                    <img src="<?=$photo?>" alt="img" id="img-<?=$count?>" style="width:100%;height:80%;"/>
                                                    <div class="row">
                                                        <div class="upload-btn-wrapper text-center col-6 my-2" >
                                                            <button class="bttn mx-4"><i class="fas fa-pencil-alt"></i></button>
                                                            <input type="file" class='edit' id='edit-<?=$count?>' onclick ='get(this.id,<?=$edit_id?>);'/>
                                                        </div>
                                                        <div class="upload-btn-wrapper text-center col-6 my-2" >
                                                            <button class="btn" id='delete-<?=$count?>' onclick='del(this.id,<?=$edit_id?>);return false;'><i class="fas fa-trash-alt"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                                $count++;
                                            endforeach;
                                        ?> 
                                    </div> 
                            <?php
                                else:    
                            ?>
                                    <label for="photo">Product Image</label>
                                    <input type="file" required name="photo[]" id="product-image" class="form-control" multiple>
                            <?php
                                endif;
                            ?>
                        </div>
                        <div class="form-group col-sm-12 col-lg-5 col-md-12">
                            <div class="input-group flex-nowrap my-4">
                                <input required type="text" class="form-control" id="info" placeholder="Available Product" aria-label="Username" aria-describedby="addon-wrapping">
                                <div class="input-group-prepend">
                                    <button class="input-group-text btn" id="addon-wrapping">Add Sizes</button>
                                </div>
                                <!--div class="form-g col-md-5"-->
                                    <!--input type="hidden" name='img' value="" class='form-control mx-4'-->
                                    <input type="text" id='val' required name='sizes' value="<?=((isset($_GET['edit']))?$data['sizes']:'')?>" class='form-control mx-4'>
                                <!--/div-->
                            </div>
                        </div>
                    </div>
            <!--/div-->
                    <div class="row mx-3 my-4">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="Category">Category:</label>
                            <input type="text" required name="category" id="category" class="form-control" value="<?=((isset($_GET['edit']))?$data['category']:'')?>">
                        </div>
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="brand">Brand:</label>
                            <input type="text" required name="brand" id="brand" class="form-control" min=0 value="<?=((isset($_GET['edit']))?$data['brand']:'')?>">
                        </div>
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="portfolio">Portfolio:</label>
                            <input type="text" required name="portfolio" id="portfolio" class="form-control" value="<?=((isset($_GET['edit']))?$data['portfolio']:'')?>">
                        </div>
                    </div>
                    <div class="row mx-3 my-4">
                        <div class="form-group col-md-8 col-sm-8">
                            <label for="description">Description*:</label>
                            <textarea id="description" required name="details" class="form-control tinymce" rows="6"><?=((isset($_GET['edit']))?$data['description']:'')?></textarea>
                        </div>
                        <div class="form-group pull-right col-sm-4 col-md-4"><br>
                            <a href="pages/data-tables.php" class="btn btn-outline-dark">Cancel</a>&nbsp;&nbsp;
                            <?php
                                if(isset($_GET['edit'])):
                            ?>
                                    <button type="submit" id="edit" class=" btn btn-outline-success pull-right">Edit</button>
                            <?php
                                else:
                            ?>
                                    <button type="submit" id="submit" class=" btn btn-outline-success pull-right">Add</button>
                            <?php
                                endif;
                            ?>
                        </div><div class="çlearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>   
</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<div class="footer">
   <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
</div>
<!--Modal-->
<div class="modal" tabindex="-1" id='myModal' role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center">
          <table class='text-center'>
              <thead>
                  <tr>
                      <th>Size</th>
                      <th>Quantity</th>
                  </tr>
              </thead>
              <tbody id='receiver'>

              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" id='save' data-dismiss='modal' class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1  -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js-->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js-->
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js-->
<script src="assets/libs/js/main-js.js"></script>
<script>
    $("#addon-wrapping").click((e)=>
    {
        e.preventDefault();
        let data = $("#info").val();
       $.ajax({
            url : '../../requests.php',
            method : 'POST',
            data : {data : data},
            success : (res)=>{
                $('#myModal').modal('toggle');
                $('#receiver').html(res);
            }
        })
    })


    $('#save').click(()=>
    {
        let qty = '';
        let dat = $('#receiver').children('tr');
        for(let i = 0;i < dat.length;++i){
            qty += $('#size'+i).val()+':'+$('#qty'+i).val()+",";
        }
        $('#val').val(qty);
    })

    
    let get = (id,editId)=>
    {
        $('#'+id).change(()=>
        {
            let file = document.querySelector('#'+id).files[0];
            let formdata = new FormData();
            formdata.append('file',file);
            formdata.append('pro_id',editId)
            formdata.append('file-index',id.split('-').pop());
            $.ajax({
                url : '../../requests.php',
                method : 'POST',
                data : formdata,
                cache : false,
                contentType : false,
                processData : false,
                success : function(res)
                {
                    let index = id.split('-').pop();
                    $('#img-'+index).attr('src',res);
                }
            })
        });
    }

    let del = (id, editId) =>
    {
        let index = id.split('-').pop();
        let formData = new FormData();
        formData.append('del-index',index);
        formData.append('edit_id', editId);
        $.ajax({
            url : '../../requests.php',
            method : 'POST',
            data : formData,
            cache: false,
            processData: false,
            contentType: false,
            success : (res)=>
            {
                window.location.href = "Post.php?edit="+editId;
            }
        })
    }
    $("#submit").click(function(e){
       e.preventDefault();
        let files = document.querySelector('#product-image').files
        //console.log(files);
        let formData = new FormData();
        let data = $("#form").serializeArray();
        for(let key of data){
            formData.append(key.name,key.value);
        }
        for(let key in files){
            formData.append('photo[]',files[key]);
        }
        $.ajax({
            url: "../../requests.php",
            method: "POST",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: (res) => {
                    $('input').val("");
                    $('text-area').val("");
                    $("#message").html("Product added successfully");
                    $("#message").show();
                    //console.log(res);
                
            }
        })
    })
    $("#edit").click(function(e){
       e.preventDefault();
        //console.log(files);
        let formData = new FormData();
        let data = $("#form").serializeArray();
        for(let key of data){
            formData.append(key.name,key.value);
        }
        formData.append('edit',true);
        $.ajax({
            url: "../../requests.php",
            method: "POST",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: (res) => {
                window.location.href = "pages/data-tables.php";
                
            }
        })
    })
</script>
</body>

 
</html>