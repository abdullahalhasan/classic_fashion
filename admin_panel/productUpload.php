<?php
session_start();
require ("db_connect.php");
/**
 * Created by PhpStorm.
 * User: BDDL-102
 * Date: 4/15/2019
 * Time: 11:54 AM
 */
//echo "hello";

if (isset($_POST['btn_upload'])) {


    //Image File Upload Code
    $target_dir = "products/";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    //if everything is fine then it will work
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        die();
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
            $file_path_url = "products/".basename( $_FILES["product_image"]["name"]);
        } else {
            echo "Sorry, your file was not uploaded.";
            die();
        }
    }
    //Image Upload Code Ends
    $category = $_POST['category'];
    $code = $_POST['product_code'];
    $price = $_POST['product_price'];
    $description = $_POST['product_description'];
    //$image = $_POST['product_image'];

    $query = "INSERT INTO `products`(`id`, `category`, `code`, `price`, `description`, `image`) 
                VALUES (null,'$category','$code','$price','$description','$file_path_url')";

    $ifInsert = mysqli_query($db,$query);
    if ($ifInsert) {
        $_SESSION[''] = "Failed";
        header("Location: index.php");
    } else {
        $_SESSION['upload_failed'] = "Ok";
        header("Location: dashboard.php");
    }

}