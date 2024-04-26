<?php

use database\DBController;

//require mysql connection
require ('database/DBController.php');

//require product connection
require ('database/Product.php');

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);