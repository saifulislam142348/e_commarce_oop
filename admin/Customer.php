<?php
session_start();
include('Class/adminBack.php');
$obj = new adminBack();
$ctg = $obj->p_display_category();
$ctgDatas = array();
while ($data = mysqli_fetch_assoc($ctg)) {
    $ctgDatas[] = $data;
}

if (isset($_POST['addtocart'])) {
    if (isset($_SESSION['cart'])) {
        $products_name = array_column($_SESSION['cart'], 'pdt_name');
        if (in_array($_POST['pdt_name'], $products_name)) {
            echo "
                <script>
                    alert('This product already added!');
                </script>
            ";
        } else {

            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array(
                'pdt_name' => $_POST['pdt_name'],
                'pdt_price' => $_POST['pdt_price'],
                'pdt_img' => $_POST['pdt_img'],
                'quantity' => 1,
            );
        }
    } else {
        $_SESSION['cart'][0] = array(
            'pdt_name' => $_POST['pdt_name'],
            'pdt_price' => $_POST['pdt_price'],
            'pdt_img' => $_POST['pdt_img'],
            'quantity' => 1,
        );
    }
}
if(isset($_POST['remove_product'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['pdt_name']== $_POST['remove_pdt_name']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
        }
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
        <div id="main-content" class="main-content">
            <div class="container">
                <br>
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Your cart items</h3>
                            <form class="shopping-cart-form" action="#" method="post">
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Remove</th>
                                            <th class="product-subtotal">Time</th>
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
                                                        <input class="btn btn-warning" type="submit" value="Remove Product" name="remove_product">
                                                    </form>
                                                </td>
                                                <td class="product-subtotal" data-title="Total">
                                                    <div class="price price-contain">
                                                       
                                                        <ins><span class="price-amount"><span class="currencySymbol"></span></span></ins>


                                                        <ins><span class="price-amount"><span class="currencySymbol"></span>
                                                            <br/><span>
                                                        waiting 30 minutese</span></ins>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php }}else{
                                            echo "Your Cart is now empty!";
                                        } ?>
                                        <tr class="cart_item wrap-buttons">
                                            <td class="wrap-btn-control" colspan="4">
                                                <a class="btn back-to-shop">Back to Shop</a>
                                                <button class="btn btn-update" type="submit" disabled>update</button>
                                                <button class="btn btn-clear" type="reset">clear all</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <div class="subtotal-line">
                                    <b class="stt-name">Subtotal <span class="sub">(<?php echo $total_product.'items'; ?>)</span></b>
                                    <span class="stt-price">tk<?php echo $subtotal; ?></span>
                                </div>
                                <div class="subtotal-line">
                                    <b class="stt-name">Shipping</b>
                                    <span class="stt-price">tk 99.00</span>
                                </div>
                                <div class="tax-fee">
                                    <p class="title">Est. Taxes & Fees</p>


                                     <div class="subtotal-line">
                                    <b class="stt-name">Subtotal & shipping <span class="sub">(<?php echo $total_product.'items+99'; ?>)</span></b>
                                    <span class="stt-price"><b>Total:</b>
                                        tk
                                        <?php echo $subtotal + 99; ?></span>
                                </div>

                                  
                                </div>
                                
                                <div class="btn-checkout">
                                    <a href="payment.php"  class="btn checkout">Check out</a> 

                                     
                                    
                                </div>
                               
                                <p class="pickup-info"><b>Free Pickup</b> is available as soon as today More about shipping and pickup</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
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