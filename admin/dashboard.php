<?php
session_start();
require_once("include/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
$month= date("m:Y");
if (!isset($_SESSION['userid'])) {
    header("Location: Login");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard | Enjoy</title>
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

				<div class="row">
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-2">
                                        <?php
                                        $total_products = $db_handle->runQuery("SELECT COUNT(id) as number FROM `product`");
                                        ?>
										<h2 class="text-white font-w600"><?php echo $total_products[0]['number'];?></h2>
										<span class="text-white">Total Products</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-2">
                                        <?php
/*                                        $total_revenue = $db_handle->runQuery("SELECT SUM(total_purchase) as total FROM `billing_details` where approve = '3'");
                                        */?>
										<h2 class="text-white font-w600"><?php /*echo $total_revenue[0]['total'];*/?></h2>
										<span class="text-white">Total Revenue</span>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-2">
                                        <?php
                                        $total_order = $db_handle->runQuery("SELECT COUNT(id) as number FROM `billing_details`");
                                        ?>
										<h2 class="text-white font-w600"><?php echo $total_order[0]['number'];?></h2>
										<span class="text-white">Total Oders</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card grd-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-2">
                                        <?php
                                        $total_customer = $db_handle->runQuery("SELECT COUNT(id) as number FROM `customer`");
                                        ?>
										<h2 class="text-white font-w600"><?php echo $total_customer[0]['number'];?></h2>
										<span class="text-white">Total Registered Customers</span>
									</div>
								</div>
							</div>
						</div>
					</div>
                  <!--  <div class="col-xl-3 col-xxl-6 col-sm-6">
                        <div class="card grd-card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body mr-2">
                                        <?php
/*                                        $sum_profit = 0;
                                        $invoice_details = $db_handle->runQuery("SELECT * FROM `invoice_details`");
                                        $row_count = $db_handle->numRows("SELECT * FROM `invoice_details`");
                                        for ($i = 0; $i < $row_count; $i++) {
                                            $product_id = $invoice_details[$i]['product_id'];
                                            $quantity = $invoice_details[$i]['product_quantity'];
                                            $selling_price = $invoice_details[$i]['product_unit_price'];
                                            $product_cost = $db_handle->runQuery("select cost,p_name from product where id = '$product_id'");
                                            $cost = $product_cost[0]['cost'];
                                            $profit = ($selling_price - $cost) * $quantity;
                                            $sum_profit = $sum_profit + $profit;
                                        }
                                        */?>
                                        <h2 class="text-white font-w600"><?php /*echo $sum_profit;*/?> HKD</h2>
                                        <span class="text-white">Total Profit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                 <!--   <div class="col-xl-3 col-xxl-6 col-sm-6">
                        <div class="card grd-card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body mr-2">
                                        <?php
/*                                        $sum_profit = 0;
                                        $invoice_details = $db_handle->runQuery("SELECT * FROM `invoice_details`");
                                        $row_count = $db_handle->numRows("SELECT * FROM `invoice_details`");
                                        for ($i = 0; $i < $row_count; $i++) {
                                            $date = date_create($invoice_details[$i]["updated_at"]);
                                            $date_formatted = date_format($date, "m:Y");
                                            if($date_formatted == $month){
                                                $product_id = $invoice_details[$i]['product_id'];
                                                $quantity = $invoice_details[$i]['product_quantity'];
                                                $selling_price = $invoice_details[$i]['product_unit_price'];
                                                $product_cost = $db_handle->runQuery("select cost,p_name from product where id = '$product_id'");
                                                $cost = $product_cost[0]['cost'];
                                                $profit = ($selling_price - $cost) * $quantity;
                                                $sum_profit = $sum_profit + $profit;
                                            }
                                        }
                                        */?>
                                        <h2 class="text-white font-w600"><?php /*echo $sum_profit;*/?> HKD</h2>
                                        <span class="text-white">Total Monthly Profit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
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
</body>
</html>
