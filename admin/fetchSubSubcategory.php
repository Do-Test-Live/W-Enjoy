<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

if (isset($_POST['sub_category_id'])) {

    $sub_category_id = $_POST['sub_category_id'];


    $query = "SELECT * FROM sub_sub_cat where sub_cat_id={$sub_category_id}";


    $data = $db_handle->runQuery($query);
    $row = $db_handle->numRows($query);

    for ($i = 0; $i < $row; $i++) {
        ?>
        <option value="<?php echo $data[$i]['id']; ?>"><?php echo $data[$i]['sub_sub_name_cn']; ?></option>
        <?php
    }
}

