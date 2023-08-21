<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

if (isset($_POST['category_id'])) {

    $category_id = $_POST['category_id'];


    $query = "SELECT * FROM sub_cat where cat_id={$category_id}";


    $data = $db_handle->runQuery($query);
    $row = $db_handle->numRows($query);

    for ($i = 0; $i < $row; $i++) {
        ?>
        <option value="<?php echo $data[$i]['id']; ?>"><?php echo $data[$i]['sub_cat_name']; ?></option>
        <?php
    }
}

