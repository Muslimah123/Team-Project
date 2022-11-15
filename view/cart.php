<?php
include ("../Settings/core.php");

require('../controllers/cart_controller.php');
//this cart can only be accessed by a log in user so if the visitor is not logged in they are directed to the login page
if($c_id=$_SESSION['cid']){
  $total= cart_quantity_ctr($c_id);
  $total=$total[0];
  //number of items in the logged in user's cart
  $total1=$total['SUM(qty)'];
}else{
  header("Location: ../login/login.php");
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
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5 rounded">
          <h1 class="text-warning">My Cart</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <table class="table">
            <thread>
              <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
                <th>Update</th>
                <th>Remove</th>
              </tr>

            </thread>
            <tbody>
              <?php
                $ip_add=getenv("REMOTE_ADDR");
                $session=$_SESSION["cid"];
                $cart = get_Cartitem();
                if (empty($cart)) 
                {
                    echo '<div class="Cart-Items"><h5>No product added to cart<h5></div>';
                }else{
                    $cart=$cart[0];
                    foreach($cart as $value)
                    {
                      $total = $value['product_price']*$value['qty'];
                      $img=$value['product_image'];
                      echo "
                        <tr>
                          <td><img src='../uploads/$img' height=25 width=30></td>
                          <td>{$value['product_title']}</td>
                          <td>{$value['product_price']}</td>
                          <td>{$value['qty']}</td>
                          <td>$total</td>
                          <td><a href='cart_edit.php?updateProd_ID={$value['p_id']}' class='btn-warning'>Manage Qty</a></td>
                          <td><a href='../actions/remove_cart.php?removeProd_ID={$value['p_id']}' class='btn-danger'>Remove</a></td>
                        </tr>";
                    }
                  }
              ?>
            </tbody>
          </table>
          <br>
          <br>
          <a href="payment.php" class="btn btn-lg btn-primary cart_button_checkout ">Proceed to CheckOut </a>
          <a href="home.php" class="btn btn-lg btn-primary cart_button_checkout ">Continue Shopping </a>
        </div>
      </div>
    </div>
    

        
    
</body>
</html>

























