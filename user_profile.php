<?php
session_start();
include('admin/Class/adminBack.php');
$obj = new adminBack();
$ctg = $obj->p_display_category();
$ctgDatas = array();
while ($data = mysqli_fetch_assoc($ctg)) {
    $ctgDatas[] = $data;
}
if(isset($_POST['user_login_btn'])){
    $msg=$obj->user_login($_POST);
}
$userid = $_SESSION['user_id'];
$username = $_SESSION['user_name'];
if($userid == null){
    header("location: user_login.php");
}
if(isset($_GET['logoutuser'])){
    if($_GET['logoutuser']='logout'){
        $obj->user_logout();
    }
}
?>

<?php include_once('includes/head.php'); ?>

<body class="biolife-body">
    <?php include_once('includes/preloader.php'); ?>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        <?php include_once('includes/header_top.php'); ?>
        <?php include_once('includes/header_middle.php'); ?>
        <?php include_once('includes/header_bottom.php'); ?>
    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div class="container">
            <h2>User Profile Page</h2>
            <div class="user_info">
                <div class="user_details">
                    <h3>Hello <?php if(isset($username)){echo strtoupper($username);} ?></h3>
                    <a href="?logoutuser=logout">Logout</a>
              



<div class="dropdown">


        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <h4><b>Contact us</b>
       

        </h4>
         </button>

        <div class="dropdown-menu">

          
                 
<div class="jumbotron">
                        <form action=" " method="POST" >
                            <div class="input-group  ">
                                
                                <label class="name ">Your Name:</label>
                                <input type="text" class="form-control   form-control-lg" name="c_name" placeholder="User Name"  required />
                                
                            </div>
                            <br/>
                            <div class="input-group ">
                                
                                <label class="Email">Your Email or Phone:</label>
                                
                                <input type="email" class="form-control  form-control-lg"  placeholder="Email or Phone " name="c_email" required />
                            
                            </div>
                            
                            <br/>
                            <div class="input-group ">
                                
                                <label class="comment">Comment:</label>
                                
                                  <textarea type="text" class="form-control  form-control-lg" rows="5" name="comment" ></textarea>
                                
                            </div>
                            <br/>
                            <div class="input-group ">
                                
                                
                                <input type="submit" class=" btn btn-success form-control  form-control-lg "  name="submit" value="submit" />
                                
                            </div>
                            
                        </form>
                        
                    </div>


             </a>
            


        </div>
    
                        
 </div>





                </div>

                <div class="history">
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Order History</h3>
                          
                          
                          <form class="shopping-cart-form" action="#" method="post">
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">time</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($_SESSION['cart'])){
                                            $subtotal = 0;
                                            $total_product = 0;
                                            foreach ($_SESSION['cart'] as $key => $value) {
                                                $subtotal = $subtotal + $value['pdt_price'];
                                                $total_product++;
                                             ?>
                                            <tr class="cart_item">
                                                <td class="product-thumbnail" data-title="Product Name">
                                                    <a class="prd-thumb" href="#">
                                                        <figure><img width="113" height="113" src="admin/upload/<?php echo $value['pdt_img']; ?>" alt="shipping cart"></figure>
                                                    </a>
                                                    <a class="prd-name" href="#"><?php echo $value['pdt_name']; ?></a>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <div class="price price-contain">
                                                        <ins><span class="price-amount"><span class="currencySymbol">tk </span><?php echo $value['pdt_price']; ?></span></ins>
                                                    </div>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="remove_pdt_name" value="<?php echo $value['pdt_name']; ?>">
                                                        
                                                    </form>
                                                </td>
                                                <td class="product-subtotal" data-title="Total">
                                                    <div class="price price-contain">
                                                       
                                                        <ins><span class="price-amount"><span class="currencySymbol"></span></span></ins>


                                                        <ins><span class="price-amount"><span class="currencySymbol">waiting 30 minutese</span>
                                                            <br/>

                                                
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php }}else{
                                            echo "Your Cart is now empty!";
                                        } ?>
                                        <tr class="cart_item wrap-buttons">
                                            <td class="wrap-btn-control" colspan="4">
                                                <a class="btn back-to-shop">Back to Shop</a>
                                             
                                               <a href="addtocart.php"  class="btn checkout">all details</a> 

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>


                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include_once('includes/footer.php'); ?>

    <!--Footer For Mobile-->
    <?php include_once('includes/mobile_footer.php'); ?>

    <?php include_once('includes/mobile_global_block.php'); ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>
    <?php include_once('includes/scripts.php'); ?>

</body>

</html>