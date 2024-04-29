<?php
//require mysql connection
require ('../database/DBController.php');

//require product connection
require ('../database/Product.php');

//DBController object
$db = new \database\DBController();

//Product object
$product = new \database\Product($db);

    if(isset($_POST['itemid'])){
        $result = $product->getProduct($_POST['itemid']);
        echo json_encode($result);
    }
?>
