<?php
session_start();
//$check_session = $_SESSION['email'];

if ($_SESSION['email'] != "") {
    $check_session = $_SESSION['email'];
    //echo $check_session;
} else {
    header("Location: index.php");
}

if (($_SESSION['upload_failed'])) {
    unset($_SESSION['upload_failed']);
    echo "
            <script> alert('Upload Failed!'); </script>
           ";

}
if (($_SESSION['upload_ok'])) {
    unset($_SESSION['upload_ok']);
    echo "
            <script> alert('Upload Successful!'); </script>
           ";

}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}
/**
 * Created by PhpStorm.
 * User: BDDL-102
 * Date: 4/11/2019
 * Time: 4:55 PM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Product Upload Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <form method="post" action="dashboard.php">
                        <button type="submit" class="nav-link btn btn-success" name="logout">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>
<div class="container">
    <form method="post" action="productUpload.php" enctype="multipart/form-data">
        <div class="form-group row">

            <label for="category" class="col-sm-3 col-form-label">Select Category</label>
            <div class="col-sm-3">
                <select class="form-control" id="category" name="category" >
                    <option value="" selected="selected">Select</option>
                    <option value="men">Men</option>
                    <option value="ladies">Ladies</option>
                    <option value="child">Child</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="center" class="col-sm-3 col-form-label">Product Code</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="product_code" id="product_code" placeholder="Product Code" >
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-sm-3 col-form-label">Product Price</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="product_price" id="product_price" placeholder="Product Price" >
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-sm-3 col-form-label">Product Description</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="product_description" id="product_description" placeholder="Product Description" >
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-sm-3 col-form-label">Select Image</label>
            <div class="col-sm-3">
                <input type="file" class="form-control" name="product_image" id="product_image" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3">
                <input type="submit" class="btn btn-success" name="btn_upload" value="Upload" id="product_image" >
            </div>
        </div>
    </form>
</div>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
