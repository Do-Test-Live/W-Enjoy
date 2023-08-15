<?php
session_start();
include('admin/include/dbController.php');
$db_handle = new DBController();
if(isset($_SESSION['id'])){
    $customer_id = $_SESSION['id'];
}
include ('cart_backend.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enjoy">
    <meta name="keywords" content="Enjoy">
    <meta name="author" content="Enjoy">
    <link rel="icon" href="assets/images/favicon/f7.png" type="image/x-icon">
    <title>Enjoy</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">

    <!-- bootstrap css -->
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
</head>

<body class="theme-color-5">

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


<!-- Home Section Start -->
<section class="home-section-2 home-section-bg pt-0 overflow-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="slider-animate">
                    <div>
                        <div class="home-contain rounded-0 p-0">
                            <img src="assets/images/grocery/banner/1.jpg"
                                 class="img-fluid bg-img blur-up lazyload" alt="">
                            <div class="home-detail home-big-space p-center-left home-overlay position-relative">
                                <div class="container-fluid-lg">
                                    <div>
                                        <h5 class="ls-expanded banerfontcolor text-uppercase">特別優惠</h5>
                                        <h1 class="heding-2 banerfontcolor">選購你的心水玩具!</h1>
                                        <h2 class="content-2 banerfontcolor">輕鬆下單</h2>
                                        <button
                                                class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto"
                                                onclick="location.href = 'shop-left-sidebar.html';">立即購買 <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Section End -->


<!-- Banner Section Start -->
<section class="banner-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                    <img src="assets/images/furniture/banner/1.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Banner Section Start -->
<section class="banner-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                    <img src="assets/images/furniture/banner/2.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Banner Section Start -->
<section class="banner-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                    <img src="assets/images/furniture/banner/3.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Banner Section Start -->
<section class="banner-section pb-5">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                    <img src="assets/images/furniture/banner/4.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Banner Section Start -->
<section class="banner-section pb-5">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                    <img src="assets/images/furniture/banner/5.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->


<!-- Product Section Start
<section>
    <div class="container-fluid-lg pb-5">
        <div class="row g-3">
                <div class="title section-t-space">
                    <h2>Feature Product</h2>
                    <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#cake"></use>
                            </svg>
                        </span>
                </div>
               <div class="product-box-slider-2 no-arrow">
                    <div>
                        <div class="product-box product-box-bg wow fadeIn">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/images/cake/product/1.png"
                                         class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <ul class="product-option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="#" class="notifi-wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-detail">
                                <a href="#">
                                    <h6 class="name">
                                        Product-1
                                    </h6>
                                </a>

                                <div class="product-rating mt-2">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <h6 class="price theme-color">$ 80.00</h6>

                                <div class="add-to-cart-box bg-white">
                                    <button class="btn btn-add-cart addcart-button">Add
                                        <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                    </button>
                                    <div class="cart_qty qty-box">
                                        <div class="input-group">
                                            <button type="button" class="qty-left-minus" data-type="minus"
                                                    data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text"
                                                   name="quantity" value="0">
                                            <button type="button" class="qty-right-plus" data-type="plus"
                                                    data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                            <div class="product-image">
                                <a href="#">
                                    <img src="assets/images/cake/product/2.png"
                                         class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <ul class="product-option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="#" class="notifi-wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-detail">
                                <a href="#">
                                    <h6 class="name">
                                        Product-2
                                    </h6>
                                </a>

                                <div class="product-rating mt-2">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <h6 class="price theme-color">$ 80.00</h6>

                                <div class="add-to-cart-box bg-white">
                                    <button class="btn btn-add-cart addcart-button">Add
                                        <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                    </button>
                                    <div class="cart_qty qty-box">
                                        <div class="input-group">
                                            <button type="button" class="qty-left-minus" data-type="minus"
                                                    data-field="">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text"
                                                   name="quantity" value="0">
                                            <button type="button" class="qty-right-plus" data-type="plus"
                                                    data-field="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/3.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-3
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/4.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-4
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/5.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-5
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/6.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-6
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/7.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-7
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/8.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-8
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/9.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-9
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/10.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-10
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/11.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-11
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/12.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-12
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/13.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-13
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/14.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-14
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/15.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-15
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/16.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-16
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/17.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-17
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/18.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-18
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/19.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-19
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/20.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-20
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/21.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-21
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/22.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-22
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/23.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-23
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/24.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-24
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <div class="product-box product-box-bg wow fadeIn">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/25.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-25
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="product-box product-box-bg wow fadeIn" data-wow-delay="0.1s">
                           <div class="product-image">
                               <a href="#">
                                   <img src="assets/images/cake/product/26.png"
                                        class="img-fluid blur-up lazyload" alt="">
                               </a>
                               <ul class="product-option">
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                       <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                           <i data-feather="eye"></i>
                                       </a>
                                   </li>
                                   <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                       <a href="#" class="notifi-wishlist">
                                           <i data-feather="heart"></i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="product-detail">
                               <a href="#">
                                   <h6 class="name">
                                       Product-26
                                   </h6>
                               </a>

                               <div class="product-rating mt-2">
                                   <ul class="rating">
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star" class="fill"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                       <li>
                                           <i data-feather="star"></i>
                                       </li>
                                   </ul>
                               </div>
                               <h6 class="price theme-color">$ 80.00</h6>

                               <div class="add-to-cart-box bg-white">
                                   <button class="btn btn-add-cart addcart-button">Add
                                       <span class="add-icon bg-light-orange">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                   </button>
                                   <div class="cart_qty qty-box">
                                       <div class="input-group">
                                           <button type="button" class="qty-left-minus" data-type="minus"
                                                   data-field="">
                                               <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                           <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="0">
                                           <button type="button" class="qty-right-plus" data-type="plus"
                                                   data-field="">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>
 Product Section End -->


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

<!-- Bootstrap js-->
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>
<script src="assets/js/bootstrap/popper.min.js"></script>

<!-- feather icon js-->
<script src="assets/js/feather/feather.min.js"></script>
<script src="assets/js/feather/feather-icon.js"></script>

<!-- Lazyload Js -->
<script src="assets/js/lazysizes.min.js"></script>

<!-- Slick js-->
<script src="assets/js/slick/slick.js"></script>
<script src="assets/js/slick/slick-animation.min.js"></script>
<script src="assets/js/slick/custom_slick.js"></script>

<!-- Auto Height Js -->
<script src="assets/js/auto-height.js"></script>

<!-- Timer Js -->
<script src="assets/js/timer1.js"></script>

<!-- Quantity js -->
<script src="assets/js/quantity-2.js"></script>

<!-- WOW js -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom-wow.js"></script>

<!-- script js -->
<script src="assets/js/script.js"></script>

<!-- thme setting js -->
<script src="assets/js/theme-setting.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Feb 2023 07:41:10 GMT -->
</html>