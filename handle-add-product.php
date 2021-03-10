<?php
    include("2.php");
    session_start();
    if(isset($_POST['submit'])) {
        //handle form submitted values
        $productName = $_POST['prodName'];
        $productDesc = $_POST['prodDesc'];
        $productPrice = $_POST['prodPrice'];
        $productInfo = [
            "product name " => $productName,
            "product desc " =>  $productDesc,
            "product price " => $productPrice];
        //valdating productName
        $error = [];
        if (empty($productName)) {
            $error[] = "product name is required";
        } elseif (! is_string($productName)) {
            $error[] = "product name must be string";
        } elseif ( !(strlen($productName) > 5 and strlen($productName) < 255) ) {
            $error[] = "product name must be >5 and <255";
        }

        //validating productDesc
        if (!(is_string($productDesc))) {
           $error[] = "product description must be string";
        }

        //validating price
        if (empty($productPrice)) {
            $error[] = "product price is required";
        } elseif (! is_numeric($productPrice)) {
            $error[] = "product price must be number";
        } elseif ($productPrice < 0) {
            $error[] = "product price must be > 0";
        }

        if (!empty($error)) { 
            $_SESSION['error'] = $error;
            header("location: add-product.php");
        } else {
            $_SESSION['msg'] = "successfully added product";
            
            $priceWithDiscount = getPriceWithDiscount($productPrice);
            $productInfo['product price after discount'] = $priceWithDiscount;
            $_SESSION['productInfo'] = $productInfo;
            header("location: index.php");
        }

        


    }
    

?>