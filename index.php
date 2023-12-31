<?php
session_start();
include('admin/include/dbController.php');
$db_handle = new DBController();
if (isset($_SESSION['id'])) {
    $customer_id = $_SESSION['id'];
}
include('cart_backend.php');
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
<div class="popup-overlay">
    <div class="popup-container">
        <div class="popup-card">
            <h2>限時領取</h2>
            <p>$30 現金卷無條件使用
                Whatsapp <a href="https://wa.me/61908226" target="_blank" style="color: #ed1e79; font-weight: bold">61908226</a> 領取</p>
            <button id="close-popup">Close</button>
        </div>
    </div>
</div>
<!-- Header Start -->
<?php include('include/header.php'); ?>
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
                                        <button class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto"
                                                onclick="location.href = 'shop.php';">立即購買 <i
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
        <div class="row text-center">
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
        <div class="row text-center">
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
        <div class="row text-center">
            <div class="col-12">
                <img src="assets/images/furniture/banner/3.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Banner Section Start -->
<section class="banner-section">
    <div class="container-fluid-lg">
        <div class="row text-center">
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
        <div class="row text-center">
            <div class="col-12">
                <img src="assets/images/furniture/banner/5.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->



<!-- Footer Section Start -->
<?php include('include/footer.php'); ?>
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

<!-- Quick View Modal Box Start -->
<div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-12">
                        <div class="right-sidebar-modal text-center">
                            <h4 class="title-name">
                                呢個網站內容係為成年人而設。<br/>
                                要睇呢啲內容，你要年滿18歲或以上。
                            </h4>

                            <div class="modal-button">
                                <button onclick="clickOk();"
                                        class="btn btn-md add-cart-button icon ms-auto">我已滿18歲
                                </button>
                                <button onclick="notOk();"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md me-auto">
                                    我未滿18歲
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick View Modal Box End -->
<script>
    // Check if the modal has been shown before
    var modalShown = localStorage.getItem('modalShown');

    // Function to open the modal if the user has not seen it before
    function openModal() {
        $('#view').modal({
            backdrop: 'static',
            keyboard: false
        });

        $('#view').modal('show');
    }

    // Function to handle the "OK" button click
    function clickOk() {
        $('#view').modal('hide');
        // Set a flag in local storage to indicate that the modal has been shown
        localStorage.setItem('modalShown', true);
    }

    // Function to handle the "NOT" button click
    function notOk() {
        location.href = 'https://www.google.com/';
    }

    // Execute this function when the page loads
    $(document).ready(function () {
        // Only open the modal if it hasn't been shown before
        if (!modalShown) {
            openModal();
        }
    });


    const popupOverlay = document.querySelector(".popup-overlay");
    const popupContainer = document.querySelector(".popup-container");
    const closePopupButton = document.getElementById("close-popup");

    function openPopup() {
        popupOverlay.style.display = "flex";
        setTimeout(() => {
            popupContainer.style.opacity = "1";
            popupContainer.style.transform = "scale(1)";
        }, 100);
    }

    function closePopup() {
        popupContainer.style.opacity = "0";
        popupContainer.style.transform = "scale(0.8)";
        setTimeout(() => {
            popupOverlay.style.display = "none";
        }, 300);
    }

    // Automatically open the popup when the page loads
    window.addEventListener("load", openPopup);

    closePopupButton.addEventListener("click", closePopup);
</script>

</body>

</html>
