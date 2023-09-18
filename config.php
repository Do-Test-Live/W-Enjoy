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
/*define('STRIPE_API_KEY', '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');
define('STRIPE_PUBLISHABLE_KEY', 'pk_live_51NfHNYJNLfAYo4EuNB8L9L94Uu6ZoXSDB9VSkC4YpcGAI45UdS265wZ9E24FH0RgDJKvUVT1w3PuBLKcY8JtLwvK00FHDP2enI');*/
define('STRIPE_API_KEY', 'sk_test_51NfHNYJNLfAYo4EuUD0ars7qIkvLDLmQtbv852XUBJRYu8XZyuW6VqT77bbJFarLu8V1k1CPOxcnJ0DUmdMcW5UB00xZXKVhK2');
define('STRIPE_PUBLISHABLE_KEY', 'pk_live_51NfHNYJNLfAYo4EuNB8L9L94Uu6ZoXSDB9VSkC4YpcGAI45UdS265wZ9E24FH0RgDJKvUVT1w3PuBLKcY8JtLwvK00FHDP2enI');
define('STRIPE_SUCCESS_URL', 'http://localhost/W-Enjoy/payment-success.php'); //Payment success URL
define('STRIPE_CANCEL_URL', 'http://localhost/W-Enjoy/payment-cancel.php'); //Payment cancel URL

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'enjoy');

