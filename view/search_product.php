<?php


include("../actions/product_function.php");

if (isset($_POST['submit'])) {
    $find= $_POST['find'];
    $searchlist=search_product_ctr($find);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/index.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
	</script>
    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<nav class="navbar navbar-inverse navbar fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					FitX</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="../index.php">Home</a></li>
				<li><a href="./classes_category.php">Classes</a></li>
				<li><a href="./view/shop.php">Shop</a></li>
				<li><a href="#">Book online</a></li>
                <li><a href="#">Plans & Pricing</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login/register.php">
					<span class="glyphicon glyphicon-user"></span>
					Register</a></li>
				<li><a href="login/login.php">
					<span class="glyphicon glyphicon-log-in"></span>
					Login</a></li>
			</ul>
		</div>
	</nav>

        
        <form class="d-flex" role="search" name="form3" action="search_results.php" method="POST" onsubmit="need()" ;>
          <input class="form-control me-2" type="search" name="find" placeholder="Search by name" aria-label="Search"> &nbsp
          <button class="btn bg-dark text-light" name="submit" type="submit" >Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- area for products -->
  <div style=" min-height:400px; padding-top:15px; padding-left:15px; ">
  <h4 class='text-dark' style='color:white;'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Search results for ' <?php echo  $find ; ?> '</h4>
    <div class="container">
      <div class='row row-cols-1 row-cols-md-3 g-4' >
          <?php
             if ($searchlist) {
               # code...
             
                foreach ($searchlist as $aproduct) {
                  $product_id = $aproduct['product_id'];
                  $product_title = $aproduct['product_title'];
                  $product_price = $aproduct['product_price'];
                  $product_image = $aproduct['product_image'];
                  if (check_login_index()==true) {
                    echo "
                    
                    <div class='card-columns'>
                    
                      <a href='single_product.php?vid=$product_id'  >
                        <div class='card ' style=' width: 300px; margin-top: 40px;margin-left: 30px; text-align:center;  '>
                        <img src=' ../uploads/$product_image' class='card-img-top' style='height: 200px; ' >
                        <div class='card-body style='font-size:20px; ' >
                        <span style='color:black; '>$product_title </span><br>
                        <span style='color:black; '>GHS $product_price </span><br> <br> 
                        <a href='../actions/add_to_cart.php?pid=$product_id' class='btn btn-dark text-light' style='width: 220px;'>Add to Cart</a>
                        
                        </div>
                        
                        </div>
                      
                        </a>
                    </div>
                    
                    ";
                  } else {
                    echo "
                    
                    <div class='card-columns'>
                    
                      <a href='single_product.php?vid=$product_id'  >
                        <div class='card ' style=' width: 300px; margin-top: 40px;margin-left: 30px; text-align:center;  '>
                        <img src=' ../uploads/$product_image' class='card-img-top' style='height: 200px; ' >
                        <div class='card-body style='font-size:20px; ' >
                        <span style='color:black; '>$product_title </span><br>
                        <span style='color:black; '>GHS $product_price </span><br> <br> 
                        <a href='../login/login.php' class='btn btn-dark text-light' style='width: 220px;'>Add to Cart</a>
                        
                        </div>
                        
                        </div>
                      
                        </a>
                    </div>
                    
                    ";
                  }
                }
              }
              else {
                echo "<h4>&nbsp &nbsp &nbsp product not found</h4>";
              }
          ?>
      </div>
      
    </div>
  

  </div>

  
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                </a>
                <p>We offer quality and uniquely fashionable apparel to suit and enhance your classy taste. </p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Victoria Falls Zimbabwe</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>: dubebernice02@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+263785008888  </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-light mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="home.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-white mb-2" href="payment.php"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-white mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="home.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-white mb-2" href="payment.php"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-white">
                    &copy; <a class="text-white font-weight-semi-bold" href="#">B3rnice Apparel & clothing </a>. All Rights Reserved. Designed
                    by
                    <a class="text-white font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>

