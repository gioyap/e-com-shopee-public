<?php

use database\Cart;
use database\DBController;

//require mysql connection
require ('database/DBController.php');

//require product connection
require ('database/Product.php');

//require Cart class
require ('database/Cart.php');

//DBController object
$db = new \database\DBController();

//Product object
$product = new \database\Product($db);
$product_shuffle = $product->getData();

//to print the data from mysql
//print_r($product->getData());

//cart object
$Cart = new Cart($db);