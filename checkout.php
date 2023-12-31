<?php
session_start();
if (isset($_SESSION['id'])) {
    $customer_id = $_SESSION['id'];
}
include('admin/include/dbController.php');
$db_handle = new DBController();

if (!isset($_SESSION["cart_item"])) {
    echo "<script>
            window.location.href='Cart';
        </script>";
}

include ('cart_backend.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enjoy Shop">
    <meta name="keywords" content="Enjoy Shop">
    <meta name="author" content="Enjoy Shop">
    <link rel="icon" href="assets/images/favicon/f7.png" type="image/x-icon">
    <title>Checkout</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- wow css -->
    <link rel="stylesheet" href="assets/css/animate.min.css"/>

    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulk-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        header .header-top .about-list .right-nav-list .theme-form-select .dropdown-toggle.hkd::before {
            content: " ";
            position: absolute;
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 0;
            color: #fff;
        }
    </style>
</head>

<body>
<!-- Loader Start -->
<div class="fullpage-loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<!-- Loader End -->

<!-- Header Start -->
<?php include ('include/header.php');?>
<!-- Header End -->


<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2><?php echo '查看';?></h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo '查看';?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout section Start -->
<section class="checkout-section-2 section-b-space">
    <div class="container-fluid-lg">
        <form action="payment.php" method="post">
            <div class="row g-sm-4 g-3">
                <div class="col-lg-8">
                    <div class="left-sidebar-checkout">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/ggihhudh.json"
                                                   trigger="loop-on-hover"
                                                   colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
                                                   class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box" style="height: 100%;">
                                        <div class="checkout-title">
                                            <h4><?php echo '郵寄地址';?></h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-xxl-12">
                                                    <div class="delivery-address-box">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-3">
                                                                <input type="text" class="form-control" name="f_name"
                                                                       value="" placeholder="<?php echo '名';?>" required="">
                                                            </div>
                                                            <div class="form-group col-md-6 mb-3">
                                                                <input type="text" class="form-control" name="l_name"
                                                                       value="" placeholder="<?php echo '姓';?>" required="">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-3">
                                                                <input type="text" class="form-control" name="email"
                                                                       value="" placeholder="<?php echo '電子郵件';?>" required="">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-3">
                                                                <input type="text" class="form-control" name="phone_number"
                                                                       value="" placeholder="<?php echo '電話號碼';?>" maxlength="8"
                                                                       minlength="8" required="">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-3">
                                                                <input type="text" class="form-control" name="address"
                                                                       value="" placeholder="<?php echo '街道地址';?>" required="">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-3">
                                                                <input type="text" class="form-control" name="city" value=""
                                                                       placeholder="<?php echo '城市';?>" required="">
                                                            </div>
                                                                <input type="hidden" class="form-control" name="zip_code"
                                                                       value="" placeholder="<?php echo '郵政編碼';?>"
                                                                       required="">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <input type="text" class="form-control" name="note"
                                                                       value="" placeholder="<?php echo '備註:';?>">
                                                            </div>
                                                                <input class="form-check-input card-class" name="addInfo" type="hidden"
                                                                       value="0" id="flexCheckChecked">

                                                                <?php
                                                                if(isset($_GET['discount'])){
                                                                    ?>
                                                                    <input name="discount" type="hidden" value="<?php echo $_GET['discount']; ?>">
                                                                    <?php
                                                                }
                                                                ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/qmcsqnle.json"
                                                   trigger="loop-on-hover" colors="primary:#0baf9a,secondary:#0baf9a"
                                                   class="lord-icon">
                                        </lord-icon>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right-side-summery-box">
                        <div class="summery-box-2">
                            <div class="summery-header">
                                <h3><?php echo '訂單摘要';?></h3>
                            </div>

                            <ul class="summery-contain">
                                <?php
                                $total_quantity_new = 0;
                                $total_price_new = 0;
                                $total_weight = 0;
                                if (isset($_SESSION["cart_item"])) {
                                    foreach ($_SESSION["cart_item"] as $item) {
                                        $item_price = $item["quantity"] * $item["price"];
                                        ?>
                                        <li>
                                            <img src="admin/<?php echo str_replace("650", "250", strtok($item['image'],',')); ?>"
                                                 class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                            <h4><?php echo $item["name"];?> <span>X <?php echo $item["quantity"]; ?></span></h4>
                                            <h4 class="price"><?php echo "HK$ " . number_format($item_price, 2); ?></h4>
                                        </li>
                                        <?php
                                        $total_quantity_new += $item["quantity"];
                                        $total_price_new += ($item["price"] * $item["quantity"]);
                                    }
                                }
                                ?>
                            </ul>

                            <ul class="summery-total">
                                <li>
                                    <h4><?php echo '小計';?></h4>
                                    <h4 class="price"><?php echo "HKD " . number_format($total_price_new, 2); ?></h4>
                                </li>
                                <li>
                                    <h4>折扣</h4>
                                    <h4 class="price">
                                        <?php
                                        $discount=0;
                                        if(isset($_GET['points'])){
                                            $discount=(int)$_GET['points'];

                                            if($total_price_new <= $discount){
                                                $discount=$total_price_new;
                                            }
                                        }
                                            echo "HKD " . $discount;
                                        ?>
                                    </h4>
                                </li>
                                <li class="list-total">
                                    <h4><?php echo '全部的 (HKD)';?></h4>
                                    <h4 class="price"><?php echo "HKD " . number_format($total_price_new - $discount, 2); ?></h4>
                                </li>
                            </ul>
                            <input type="hidden" name="total_value" value="<?php echo $total_price_new - $discount; ?>">
                            <input type="hidden" name="discount" value="<?php echo $discount; ?>">
                        </div>
                        <button class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold" name="placeOrder" type="submit">
                            <?php echo '下訂單';?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Checkout section End -->

<!-- Footer Section Start -->
<?php include ('include/footer.php');?>
<!-- Footer Section End -->

<!-- Tap to top start -->
<div class="theme-option">
    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->


<!-- latest jquery-->
<script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- jquery ui-->
<script src="assets/js/jquery-ui.min.js"></script>

<!-- Lordicon Js -->
<script src="assets/js/lusqsztk.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap/popper.min.js"></script>
<script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

<!-- feather icon js-->
<script src="assets/js/feather/feather.min.js"></script>
<script src="assets/js/feather/feather-icon.js"></script>

<!-- Lazyload Js -->
<script src="assets/js/lazysizes.min.js"></script>

<!-- Delivery Option js -->
<script src="assets/js/delivery-option.js"></script>

<!-- Slick js-->
<script src="assets/js/slick/slick.js"></script>
<script src="assets/js/slick/custom_slick.js"></script>

<!-- Quantity js -->
<script src="assets/js/quantity.js"></script>

<!-- script js -->
<script src="assets/js/script.js"></script>

<!-- thme setting js -->
<script src="assets/js/theme-setting.js"></script>
</body>
</html>
