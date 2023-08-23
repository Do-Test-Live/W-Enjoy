<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();
if (!isset($_SESSION['userid'])) {
    header("Location: Login");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Subcategory | Enjoy</title>
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <?php include 'include/css.php'; ?>
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <?php include 'include/header.php'; ?>

    <?php include 'include/nav.php'; ?>

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <!-- Category List -->
            <div class="row">
                <?php if (isset($_GET['subsubcatId'])) { ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Sub Subcategory</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="Update" enctype="multipart/form-data">

                                        <?php $data = $db_handle->runQuery("SELECT * FROM sub_sub_cat where id={$_GET['subsubcatId']}"); ?>

                                        <input type="hidden" value="<?php echo $data[0]["id"]; ?>" name="id" required>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Sub Subcategory Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="sub_sub_cat_name"
                                                       placeholder="Sub subcategory Name"
                                                       value="<?php echo $data[0]["sub_sub_name_cn"]; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Select Product Category *</label>
                                            <select class="form-control" id="sel1" onchange="fetchSubCategory(this.value)" name="category" required>
                                                <?php
                                                $fetch_selected_cat = $db_handle->runQuery("select * from sub_cat as s,category as c where c.id=s.cat_id and s.id = {$data[0]["sub_cat_id"]}");
                                                if($fetch_selected_cat){
                                                    ?>
                                                    <option value="<?php echo $fetch_selected_cat[0]["id"]; ?>" selected><?php echo $fetch_selected_cat[0]["c_name"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                $cat = $db_handle->runQuery("SELECT * FROM `category`");
                                                $row_count = $db_handle->numRows("SELECT * FROM `category`");
                                                for ($i = 0; $i < $row_count; $i++) {
                                                    ?>
                                                    <option value="<?php echo $cat[$i]["id"]; ?>"><?php echo $cat[$i]["c_name"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Select Product Sub Category *</label>
                                            <select class="form-control" id="sub_category" name="sub_category" required>
                                                <?php
                                                $fetch_selected_cat = $db_handle->runQuery("select * from sub_cat where id = {$data[0]["sub_cat_id"]}");
                                                if($fetch_selected_cat){
                                                    ?>
                                                    <option value="<?php echo $fetch_selected_cat[0]["id"]; ?>" selected><?php echo $fetch_selected_cat[0]["sub_cat_name"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-6 mx-auto">
                                                <button type="submit" class="btn btn-primary w-25"
                                                        name="updateSubSubCategory">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sub Subcategory List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Sub Subcategory Name</th>
                                            <th>Subcategory Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sub_category_data = $db_handle->runQuery("SELECT * FROM sub_sub_cat order by id desc");
                                        $row_count = $db_handle->numRows("SELECT * FROM sub_sub_cat order by id desc");

                                        for ($i = 0; $i < $row_count; $i++) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i + 1; ?></td>
                                                <td><?php echo $sub_category_data[$i]["sub_sub_name_cn"]; ?></td>
                                                <td><?php $sub_cat_id = $sub_category_data[$i]["sub_cat_id"];
                                                    $fetch_name = $db_handle->runQuery("select * from sub_cat where id = '$sub_cat_id'");
                                                    echo $fetch_name[0]['sub_cat_name'];
                                                    ?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="Sub-Subcategory?subsubcatId=<?php echo $sub_category_data[$i]["id"]; ?>"
                                                           class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                class="fa fa-pencil"></i></a>
                                                        <a onclick="subSubcategoryDelete(<?php echo $sub_category_data[$i]["id"]; ?>);"
                                                           class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    <?php include 'include/footer.php'; ?>

</div>
<!--**********************************
    Main wrapper end
***********************************-->

<?php include 'include/js.php'; ?>
<script>
    function subSubcategoryDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'get',
                    url: 'Delete',
                    data: {
                        subsubcatId: id
                    },
                    success: function (data) {
                        if (data.toString() === 'P') {
                            Swal.fire(
                                'Not Deleted!',
                                'Your have store in this category.',
                                'error'
                            ).then((result) => {
                                window.location = 'Sub-Subcategory';
                            });
                        } else {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then((result) => {
                                window.location = 'Sub-Subcategory';
                            });
                        }
                    }
                });
            } else {
                Swal.fire(
                    'Cancelled!',
                    'Your Subcategory is safe :)',
                    'error'
                ).then((result) => {
                    window.location = 'Sub-Subcategory';
                });
            }
        })
    }
</script>
<!-- Datatable -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>
<script>
    function fetchSubCategory(val) {
        let sub_category = document.getElementById('sub_category');
        removeOptions(sub_category);

        $.ajax({
            url: "fetchSubcategory.php",
            type: "POST",
            data: {
                category_id: val
            },
            cache: false,
            success: function(result){
                $("#sub_category").html(result);
            }
        });
    }

    function removeOptions(selectElement) {
        let i, L = selectElement.options.length - 1;
        for (i = L; i >= 0; i--) {
            selectElement.remove(i);
        }
    }
</script>
</body>
</html>
