<?php
    require ("admin_panel/db_connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classic Fashion Sourcing</title>
<link rel="shortcut icon" href="favicon.ico" />
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/styles.css" type="text/css" rel="stylesheet" />
<link href="css/nav-css.css" type="text/css" rel="stylesheet" />
<link href="effect/image-hover.css" type="text/css" rel="stylesheet" />



<link rel="stylesheet" href="demo/demo.css">
<link rel="stylesheet" href="dist/css/lumos.css">
</head>
<body>

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/demo.css">
<!-- Pushy CSS -->
<link rel="stylesheet" href="css/pushy.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<div class="site-overlay"></div>
<div class="container">
	<div class="row">
        <div id="body_wrapper_top"><!-- Begin : body_wrapper -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4" style="padding-top:25px;">
						<nav class="pushy pushy-left" data-focus="#first-link">
							<div class="pushy-content">
								<ul>
									<li class="pushy-link"><a href="index.php">&#9776; Home</a></li>
									<li class="pushy-link"><a href="about-us.php">&#9776; About Us</a></li>
									<li class="pushy-submenu">
										<button>&#9776; PRODUCT GALLERY</button>
										<ul>
											<li class="pushy-link"><a href="ladies.php">Ladies</a></li>
											<li class="pushy-link"><a href="men.php">Men's</a></li>
											<li class="pushy-link"><a href="children.php">Children's</a></li>
											<li class="pushy-link"><a href="product.php?cate=4">Accessories</a></li>
											<li class="pushy-link"><a href="product.php?cate=5">Home Textile</a></li>
											<li class="pushy-link"><a href="product.php?cate=6">Under Garments</a></li>
											<li class="pushy-link"><a href="product.php?cate=7">New Collection</a></li>
										</ul>
									</li>
									<li class="pushy-link"><a href="contact-us.php">&#9776; Contact Us</a></li>
								</ul>
							</div>
						</nav>
						<button class="menu-btn" style="font-size:16px; letter-spacing:">&#9776; MENU</button>
					</div>

					<div class="col-sm-12 col-md-4 col-lg-4 logo" align="center"><a href="index.php"><img src="images/logo.png" class="img-responsive" alt="Classic Fashion Sourcing" /></a></div>

					<div class="col-sm-12 col-md-4 col-lg-4" align="right" style="padding-top:35px; padding-bottom:15px;"><img src="images/moto.png" class="img-responsive" alt="Classic Fashion Sourcing" /></div>
				</div>
            </div>
		</div>
	</div>
</div>
<script src="js/pushy.min.js"></script><div class="container">
	<div class="row">
        <div class="banner"><img src="cate-banner/1_l.jpg" class="img-responsive" alt="Classic Fashion Sourcing" /></div>
	</div>
</div>
<div class="clearfix"></div>


			<div class="container">
            	<div class="row">
                    <div class="mainpage">
						<div class="row">
							<div class="col-md-12 col-lg-12">
                                <div class="about">
                                    <div class="col-sm-12 col-md-6 col-lg-6"><h3>Product - Men's</h3></div>

									<div class="col-sm-12 col-md-6 col-lg-6" align="right">
										<h3 style="padding-bottom:18px;padding-top:11px;"><span class="short">
											Sorting by:&nbsp;&nbsp;&nbsp;
											<a href="men.php"><span style="color:#1ca6e4;">ALL PRODUCTS</span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
											<a href="men-2.php?cate=1&subcate=1">KNIT</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
											<a href="men-2.php?cate=1&subcate=2">WOVEN</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
											<a href="men-2.php?cate=1&subcate=3">SWEATER</a>
										</span></h3>
									</div>
									<!--div class="col-sm-12 col-md-6 col-lg-6" align="right">
									<form action="men-2.php" method="post"><h3><select name="subcate" id="subcate" class="search" required="required" onchange='this.form.submit()'>
										<option selected="selected">Search by:</option>
																				<option value="1">Knit</option>
																				<option value="2">Woven</option>
																				<option value="3">Sweater</option>
																			</select></h3></form>
									</div-->


									<div class="gallery">
                                        <?php
                                            $query = "SELECT * FROM products WHERE category='men'";
                                            $result = mysqli_query($db,$query);
                                            if ($result){
                                                while ($row = mysqli_fetch_assoc($result)) {

                                                    $image = $row['image'];
                                                    $image = "admin_panel/".$image;
                                                    $description = $row['description'];
                                                    $price = $row['price'];
                                                    $code = $row['code'];
                                                    $category = $row['category'];

                                        ?>

                                            <?php echo "<div class='col-sm-12 col-md-4 col-lg-4 gallery-item' style='padding:10px;' align='center'>
											<a href=".$image." class='lumos-link' data-lumos='demo3'>
                                                <img src=".$image." alt='MF128' class='img-responsive'></a>"; ?>
											<div style="background:#666666; padding:8px; text-align:left; height:110px;">
												<strong>Code:</strong> <?php echo $code ?><br /><strong>Price:</strong> <?php echo $price ?> $<br /><strong>Description:</strong> <?php echo $description ?></div>

										</div>

                                        <?php
                                                }
                                            }
                                        ?>

                                    </div>
								</div><!-- End : welcome -->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- End : mainpage -->
                </div>
            </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="dist/js/lumos.js"></script>

		</div>



		<div class="container">
            	<div class="row">
                    <div class="mainpage" style="background:#FFFFFF;"><!-- Begin : mainpage -->
                    	<div class="row">
							<div class="col-md-12 col-lg-12" style="padding:10px;"></div>
                        	<div class="col-md-12 col-lg-12">
                                <div class="page_bottom"><!-- Begin : page_bottom -->
                                    <div class="col-sm-12 col-md-3 col-lg-3" style="border-right:thin solid #bbbbbb;">
                                        <div class="page_box_strenth" style="padding-left:15px;"><!-- Begin : page_box_strenth -->
                                        	<h3>Welcome to our official website.......</h3>
                                            <div class="strenth_text">
												<p>The range of our product line, higher quality, and competitive prices have made us one of the fastest growing companies of its kind in Bangladesh. since 2009</p><br /><br /><br /><br />

                                            </div>
                                        </div><!-- End : page_box_strenth -->
                                    </div>
									<div class="col-sm-12 col-md-3 col-lg-3" style="border-right:thin solid #bbbbbb;">
                                        <div class="page_box_strenth" style="padding-left:15px;"><!-- Begin : page_box_strenth -->
                                        	<h3>ABOUT US</h3>
                                            <div class="strenth_text">
												<p><a href="about-us.php#who-we-are">WHO WE ARE</a></p>
												<p><a href="about-us.php#why-us">WHY US</a></p>
												<p><a href="about-us.php#services">SERVICES</a></p>
												<p><a href="about-us.php#commitment">COMMITMENT</a></p>
												<p><a href="about-us.php#what-we-do">WHAT WE DO</a></p>
												<p><a href="about-us.php#compliance">COMPLIANCE</a></p>
												<p><a href="about-us.php#export">EXPORT PARTNERS</a></p>
                                            </div>
                                        </div><!-- End : page_box_strenth -->
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3" style="border-right:thin solid #bbbbbb;">
                                        <div class="page_box_strenth" style="padding-left:15px;"><!-- Begin : page_box_strenth -->
                                        	<h3>PRODUCTS</h3>
                                            <div class="strenth_text">
												<p><a href="ladies.php">LADIES</a></p>
												<p><a href="men.php">MEN'S</a></p>
												<p><a href="children.php">CHILDREN'S</a></p>
												<p><a href="product.php?cate=4">ACCESSORIES</a></p>
												<p><a href="product.php?cate=5">HOME TEXTILES</a></p>
												<p><a href="product.php?cate=6">UNDER GARMENTS</a></p>
												<p><a href="product.php?cate=7">NEW COLLECTION</a></p>
                                            </div>
                                        </div><!-- End : page_box_strenth -->
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3" style="border-right:thin solid #bbbbbb;">
                                        <div class="page_box_strenth" style="padding-left:15px;"><!-- Begin : page_box_strenth -->
                                        	<h3>FIND US</h3>
                                            <div class="strenth_text">
												<p><a href="contact-us.php"><strong style="font-size:16px;">Contact Us</strong></a><br /><br /><div class="strenth_text2">
                                                    <ul class="social">
                                                        <li><a href="#"><i class="sk"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="fa"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="tw"></i></a></li>
                                                        <li><a href="#"><i class="ga"></i></a></li>
                                                    </ul>
												</p><br />
                                            	<p>Developed by 2019 &copy; <a href="http://www.droidsoftbd.com" target="_blank">Droidsoft Bangladesh</a>.</p>
                                            </div>
                                        </div><!-- End : page_box_strenth -->
                                    </div>
                                    </div>
                                </div><!-- End : page_bottom -->
                            </div>
							<div class="col-md-12 col-lg-12" style="padding:10px;"></div>
                        </div>
                    </div><!-- End : mainpage -->
                </div>
        </div>


    </div><!-- End : page_wrapper -->
</div>

<!-- START LODING
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="loder/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="loder/js/main.js"></script>
<!-- END LOADING -->


</body>
</html>