<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();

date_default_timezone_set("Asia/Hong_Kong");

if (!isset($_SESSION["userid"])) {
    echo "<script>
                window.location.href='Login';
                </script>";
}

if (isset($_POST['updateCategory'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['c_name']);
    $status = $db_handle->checkValue($_POST['status']);

    $data = $db_handle->insertQuery("update category set c_name='$name', status='$status' where id={$id}");
    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Category';
                </script>";
}


if (isset($_POST['updateProduct'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $p_name = $db_handle->checkValue($_POST['p_name']);
    $product_code = $db_handle->checkValue($_POST['p_code']);
    $product_description = $db_handle->checkValue($_POST['product_description']);
    $product_category = $db_handle->checkValue($_POST['product_category']);
    $product_subcategory = $db_handle->checkValue($_POST['product_subcategory']);
    $product_sub_sub_category = $db_handle->checkValue($_POST['product_sub_sub_category']);
    $status = $db_handle->checkValue($_POST['status']);
    $product_price = $db_handle->checkValue($_POST['product_price']);
    $query = '';

    $updated_at = date("Y-m-d H:i:s");

    if (!empty($_FILES['images']['tmp_name'][0])) {
        // At least one image is selected

        $dataFileName = []; // Array to store the file names

        // Loop through each uploaded image file
        foreach ($_FILES['images']['tmp_name'] as $index => $uploadedFile) {
            $originalFileName = $_FILES['images']['name'][$index];
            // Get the original image size and type
            list($originalWidth, $originalHeight, $imageType) = getimagesize($uploadedFile);

            // Create image resource from uploaded file based on image type
            switch ($imageType) {
                case IMAGETYPE_JPEG:
                    $image = imagecreatefromjpeg($uploadedFile);
                    break;
                case IMAGETYPE_PNG:
                    $image = imagecreatefrompng($uploadedFile);
                    break;
                case IMAGETYPE_GIF:
                    $image = imagecreatefromgif($uploadedFile);
                    break;
                default:
                    throw new Exception('Unsupported image type.');
            }

            // Resize the image to 250x250 and save it
            $newImage = imagecreatetruecolor(250, 250);
            imagecopyresampled($newImage, $image, 0, 0, 0, 0, 250, 250, $originalWidth, $originalHeight);
            $RandomAccountNumber = mt_rand(1, 99999);
            imagejpeg($newImage, 'assets/products_image/250/' . $RandomAccountNumber . '_' . $originalFileName);

            // Resize the image to 650x650 and save it
            $newImage = imagecreatetruecolor(650, 650);
            imagecopyresampled($newImage, $image, 0, 0, 0, 0, 650, 650, $originalWidth, $originalHeight);
            imagejpeg($newImage, 'assets/products_image/650/' . $RandomAccountNumber . '_' . $originalFileName);
            $dataFileName[] = 'assets/products_image/650/' . $RandomAccountNumber . '_' . $originalFileName;

            // Free up memory
            imagedestroy($image);
            imagedestroy($newImage);
        }

        $databaseValue = implode(',', $dataFileName);
        $query .= ",`p_image`='" . $databaseValue . "'";
        $fetch_image = $db_handle->runQuery("select p_image from product WHERE id={$id}");
        $img = explode(',', $fetch_image[0]['p_image']);
        foreach ($img as $i) {
            unlink($i);
        }
    }

    $data = $db_handle->insertQuery("UPDATE `product` SET `category_id`='$product_category',`subcat_id`='$product_subcategory',`sub_sub_cat_id`='$product_sub_sub_category',`product_code`='$product_code',`p_name`='$p_name',`description`='$product_description',
                     `status`='$status',`updated_at`='$updated_at',`product_price`='$product_price'" . $query . " WHERE id={$id}");
    if($data){
        echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href = 'Product'
                </script>";
    }
}

if (isset($_POST['updateCourse'])) {
    $course_id = $db_handle->checkValue($_POST['id']);
    $course_name = $db_handle->checkValue($_POST['course_name']);
    $course_name_en = $db_handle->checkValue($_POST['course_name_en']);
    $course_type = $db_handle->checkValue($_POST['course_type']);
    $course_duration = $db_handle->checkValue($_POST['course_duration']);
    $course_price = $db_handle->checkValue($_POST['course_price']);
    $course_price_poor = $db_handle->checkValue($_POST['course_price_poor']);
    $course_description = $db_handle->checkValue($_POST['course_description']);
    $course_description_en = $db_handle->checkValue($_POST['course_description_en']);
    $status = $db_handle->checkValue($_POST['status']);
    $updated_at = date("Y-m-d H:i:s");
    $image = '';
    $query = '';
    if (!empty($_FILES['course_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['course_image']['name'];
        $file_size = $_FILES['course_image']['size'];
        $file_tmp = $_FILES['course_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `course` WHERE course_id='{$course_id}'");
            unlink($data[0]['course_image']);
            move_uploaded_file($file_tmp, "assets/course/" . $file_name);
            $image = "assets/course/" . $file_name;
            $query .= ",`course_image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("UPDATE `course` SET `course_name`='$course_name',`course_name_en`='$course_name_en',`course_duration`='$course_duration',`course_price`='$course_price',`course_price_poor`='$course_price_poor',`course_description`='$course_description',`course_description_en`='$course_description_en',`status`='$status',`updated_at`='$updated_at',`course_type`='$course_type'" . $query . " WHERE course_id='{$course_id}'");
    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Course';
                </script>";
}


if (isset($_POST['update_promo_code'])) {
    $promo_id = $db_handle->checkValue($_POST['id']);
    $updated_at = date("Y-m-d H:i:s");
    $coupon_name = $db_handle->checkValue($_POST['coupon_name']);
    $coupon_code = $db_handle->checkValue($_POST['coupon_code']);
    $coupon_type = $db_handle->checkValue($_POST['coupon_type']);
    $coupon_amount = $db_handle->checkValue($_POST['coupon_amount']);
    $start_date = $db_handle->checkValue($_POST['start_date']);
    $expirey_date = $db_handle->checkValue($_POST['expirey_date']);
    $description = $db_handle->checkValue($_POST['description']);
    $status = $db_handle->checkValue($_POST['status']);

    $data = $db_handle->insertQuery("UPDATE `promo_code` SET `coupon_name`='$coupon_name',`description`='$description',`code`='$coupon_code',`coupon_type`='$coupon_type',`amount`='$coupon_amount',
                        `start_date`='$start_date',`expirey_date`='$expirey_date',`status`='$status',`updated_at`='$updated_at' WHERE id={$promo_id}");
    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Promo-Code';
                </script>";
}

if (isset($_POST['updateAdmin'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $email = $db_handle->checkValue($_POST['email']);
    $role = $db_handle->checkValue($_POST['role']);
    $password = $db_handle->checkValue($_POST['password']);
    $status = $db_handle->checkValue($_POST['status']);
    $image = '';
    $query = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `admin_login` WHERE id='{$id}'");
            unlink($data[0]['image']);
            move_uploaded_file($file_tmp, "assets/admin/" . $file_name);
            $image = "assets/admin/" . $file_name;
            $query .= ",`image`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("UPDATE `admin_login` SET `name`='$name',`email`='$email',`password`='$password',`role`='$role',`status`='$status'" . $query . " WHERE id={$id}");
    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Admin';
                </script>";
}

if (isset($_POST['updateHomeBanner'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $banner_name = $db_handle->checkValue($_POST['banner_name']);
    $heading_one = $db_handle->checkValue($_POST['heading_one']);
    $heading_one_cn = $db_handle->checkValue($_POST['heading_one_cn']);
    $heading_two = $db_handle->checkValue($_POST['heading_two']);
    $heading_two_cn = $db_handle->checkValue($_POST['heading_two_cn']);
    $heading_three = $db_handle->checkValue($_POST['heading_three']);
    $heading_three_cn = $db_handle->checkValue($_POST['heading_three_cn']);
    $details = $db_handle->checkValue($_POST['details']);
    $details_cn = $db_handle->checkValue($_POST['details_cn']);
    $link_one = $db_handle->checkValue($_POST['link_one']);
    $updated_at = date("Y-m-d H:i:s");
    $image = '';
    $query = '';
    if (!empty($_FILES['banner_img']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['banner_img']['name'];
        $file_size = $_FILES['banner_img']['size'];
        $file_tmp = $_FILES['banner_img']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("SELECT * FROM banner WHERE id='{$id}'");
            unlink("../" . $data[0]['banner_img']);
            move_uploaded_file($file_tmp, "../assets/images/banner/" . $file_name);
            $image = "assets/images/banner/" . $file_name;
            $query .= ",`banner_img`='" . $image . "'";
        }
    }

    $data = $db_handle->insertQuery("update banner set `banner_name`='$banner_name',`heading_one`='$heading_one',`heading_two`='$heading_two',`heading_three`='$heading_three',`details`='$details',`link_one`='$link_one',`heading_one_cn` = '$heading_one_cn',`heading_two_cn` = '$heading_two_cn',`heading_three_cn` = '$heading_three_cn',`details_cn` = '$details_cn',`updated_at`='$updated_at'" . $query . " where id={$id}");
    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Banner';
                </script>";


}


if (isset($_POST['updateDeliveryCharges'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $min_charge = $db_handle->checkValue($_POST['min_charge']);
    $weight_upto = $db_handle->checkValue($_POST['weight_upto']);
    $additional_charges = $db_handle->checkValue($_POST['additional_charges']);
    $min_order_amount = $db_handle->checkValue($_POST['min_order_amount']);

    $data = $db_handle->insertQuery("UPDATE `delivery_charges` SET `min_delivery_charge`='$min_charge',`weight_upto`='$weight_upto',`next_per_kg_weight`='$additional_charges',`min_order_free_delivery`='$min_order_amount' WHERE delivery_id = '$id'");
    echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Delivery-Charges';
                </script>";
}


if (isset($_POST['delivery'])) {
    $id = $db_handle->checkValue($_POST['billing_id']);
    $email = $db_handle->checkValue($_POST['email']);
    $date = $db_handle->checkValue($_POST['date']);
    $status = $db_handle->checkValue($_POST['status']);

    $data = $db_handle->insertQuery("UPDATE `billing_details` SET `delivery_date`='$date',`approve` = '$status' WHERE id='$id'");
    if ($data) {
        $fetch_product = $db_handle->runQuery("select * from invoice_details where billing_id = '$id'");
        $no_fetch_product = $db_handle->numRows("select * from invoice_details where billing_id = '$id'");
        for ($i = 0; $i < $no_fetch_product; $i++) {
            $quantity = $fetch_product[$i]['product_quantity'];
            $product_id = $fetch_product[$i]['product_id'];
            $fetch_stock = $db_handle->runQuery("select quantity from stock where product_id = '$product_id'");
            $no_fetch_stock = $db_handle->numRows("select quantity from stock where product_id = '$product_id'");
            if ($no_fetch_stock > 0) {
                $s_quantity = $fetch_stock[0]['quantity'];
                $s_quantity = $s_quantity - $quantity;
                $update_stock = $db_handle->insertQuery("UPDATE `stock` SET `quantity`='$s_quantity' WHERE product_id = '$product_id'");
            }
        }
        $email_to = $email;
        $subject = 'Enjoy Shop';


        $headers = "From: Enjoy Shop <" . $db_handle->from_email() . ">\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";

        $messege = "
            <html>
                <body style='background-color: #eee; font-size: 16px;'>
                <div style='min-width: 200px; background-color: #ffffff; padding: 20px; margin: auto;'>
                    <h3 style='color:black'>Order Update</h3>
                    <p style='color:black;'>
                    Your order is successfully received. Your approximate delivery date is: $date. Please contact us for more details.
                    </p>
                </div>
                </body>
            </html>";
        if (mail($email_to, $subject, $messege, $headers)) {
            echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Pending-Order';
                </script>";
        }
    }
}

if (isset($_POST['approved'])) {
    $id = $db_handle->checkValue($_POST['billing_id']);

    $data = $db_handle->insertQuery("UPDATE `billing_details` SET `approve` = '1' WHERE id='$id'");
    if ($data) {
        echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Confirm-Order';
                </script>";
    }

}

if (isset($_POST['updatePassword'])) {
    $o_pass = $db_handle->checkValue($_POST['o_pass']);
    $n_pass = $db_handle->checkValue($_POST['n_pass']);

    $previous_pass = $db_handle->runQuery("select password from admin_login limit 1");
    if ($previous_pass[0]['password'] == $o_pass) {
        $update = $db_handle->insertQuery("update admin_login set password = '$n_pass' where id = 2");
        echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Profile';
                </script>";
    } else {
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Profile';
                </script>";
    }
}

if (isset($_POST['updateSubCategory'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $sub_cat_name = $db_handle->checkValue($_POST['sub_cat_name']);
    $category = $db_handle->checkValue($_POST['category']);
    $updated_at = date("Y-m-d H:i:s");

    $update_subcat = $db_handle->insertQuery("UPDATE `sub_cat` SET `sub_cat_name`='$sub_cat_name',`cat_id`='$category',`updated_at`= '$updated_at' WHERE id = '$id'");
    if ($update_subcat) {
        echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Subcategory';
                </script>";
    }
}

if (isset($_POST['updateSubSubCategory'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $sub_sub_cat_name = $db_handle->checkValue($_POST['sub_sub_cat_name']);
    $sub_category = $db_handle->checkValue($_POST['sub_category']);
    $updated_at = date("Y-m-d H:i:s");

    $update_subcat = $db_handle->insertQuery("UPDATE `sub_sub_cat` SET `sub_cat_id`='$sub_category',`sub_sub_name_cn`='$sub_sub_cat_name',`updated_at`='$updated_at' WHERE id='$id'");
    if ($update_subcat) {
        echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Sub-Subcategory';
                </script>";
    }
}

if(isset($_POST['updatePoint'])){
    $id = $db_handle->checkValue($_POST['id']);
    $point = $db_handle->checkValue($_POST['point']);

    $update = $db_handle->insertQuery("UPDATE `point` SET `points`='$point' WHERE `point_id` = '$id'");
    if($update){
        echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Points';
                </script>";
    }
}

