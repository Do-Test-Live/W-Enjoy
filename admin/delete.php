<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();

if (!isset($_SESSION["userid"])) {
    echo "<script>
                window.location.href='Login';
                </script>";
}

if (isset($_GET['catId'])) {
    $row = $db_handle->numRows("select * FROM `product` WHERE category_id='{$_GET['catId']}'");

    if ($row == 0) {
        $data = $db_handle->runQuery("select * FROM `category` WHERE id='{$_GET['catId']}'");
        unlink($data[0]['image']);
        $db_handle->insertQuery("delete from category where id=" . $_GET['catId'] . "");
        echo 'success';
    } else {
        echo 'P';
    }
}

if(isset($_GET['productId'])){
    $db_handle->insertQuery("delete from product where id=" . $_GET['productId'] . "");
    echo 'success';
}


if(isset($_GET['courseId'])){
    $data = $db_handle->runQuery("select * FROM `course` WHERE course_id='{$_GET['courseId']}'");
    unlink($data[0]['course_image']);
    $db_handle->insertQuery("delete from course where course_id=" . $_GET['courseId'] . "");
    echo 'success';
}

if(isset($_GET['promoCodeId'])){
    $db_handle->insertQuery("delete from promo_code where id=" . $_GET['promoCodeId'] . "");
    echo 'success';
}

if(isset($_GET['adminId'])){
    $data = $db_handle->runQuery("select * FROM `admin_login` WHERE id ='{$_GET['adminId']}'");
    unlink($data[0]['image']);
    $db_handle->insertQuery("delete from admin_login where id=" . $_GET['adminId'] . "");
    echo 'success';
}

if(isset($_GET['subcatId'])){
    $db_handle->insertQuery("delete from sub_cat where id = " . $_GET['subcatId'] . "");
    echo 'success';
}

if(isset($_GET['subsubcatId'])){
    $db_handle->insertQuery("delete from sub_sub_cat where id = " . $_GET['subsubcatId'] . "");
    echo 'success';
}

