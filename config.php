<?php

// Product Details
// Minimum amount is $0.50 US
$productName = "1小時30分鐘租場服務";
$productID = "DP12345";
$productPrice = 190;
$currency = "hkd";

/*
 * Stripe API configuration
 * Remember to switch to your live publishable and secret key in production!
 * See your keys here: https://dashboard.stripe.com/account/apikeys
 */
define('STRIPE_API_KEY', 'sk_test_51NfHNYJNLfAYo4EuUD0ars7qIkvLDLmQtbv852XUBJRYu8XZyuW6VqT77bbJFarLu8V1k1CPOxcnJ0DUmdMcW5UB00xZXKVhK2');
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51NfHNYJNLfAYo4EuQ68jCsooFIyQdR8lnl1OiiW2tDkbb3RimgrDem2Xi8OoDpbeF3HF7FuahpKPi2qowBykfX89001ryatLws');
define('STRIPE_SUCCESS_URL', 'https://localhost/Enjoy/payment-success.php'); //Payment success URL
define('STRIPE_CANCEL_URL', 'https://localhost/Enjoy/payment-cancel.php'); //Payment cancel URL

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'enjoy');


/*define('DB_HOST', 'localhost');
define('DB_USERNAME', 'ucvdugdxvu2mk');
define('DB_PASSWORD', 's11j&4{1u#11');
define('DB_NAME', 'dboxsgvavgdgn2');*/

