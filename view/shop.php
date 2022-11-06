<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="../css/index.css">
 <link rel="stylesheet" href="../css/shop.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
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
				<li><a href="classes.php">Classes</a></li>
				<li><a href="shop.php">Shop</a></li>
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
    <!-- <section class="section gray-bg" id="home">
     <div class ="container">
           <div class="row justify-content-center"> -->
        <section class="section gray-bg" id="shop">
            <div class="wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        
<div class="row">
<div class="col-md-3">
	<figure class="card card-product">
		<div class="img-wrap"> 
			<img src="https://static.wixstatic.com/media/a9ff3b_b2039d1e6a954631a41b85d674400f19.jpg/v1/fill/w_281,h_281,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/a9ff3b_b2039d1e6a954631a41b85d674400f19.jpg">
			
		</div>
		<figcaption class="info-wrap">
			<h6 class="title text-dots"><a href="#">Men's Shoes</a></h6>
			<div class="action-wrap">
				<a href="#" class="btn btn-primary btn-sm float-right"> View </a>
				<div class="price-wrap h5">
					<span class="price-new">$1280</span>
					<del class="price-old">$1980</del>
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3">
	<figure class="card card-product">
		<div class="img-wrap"> <img src="https://static.wixstatic.com/media/a9ff3b_4b1550da0a014dea9d8dca081ce5b424.jpg/v1/fill/w_281,h_281,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/a9ff3b_4b1550da0a014dea9d8dca081ce5b424.jpg">
		
		</div>
		<figcaption class="info-wrap">
			<h6 class="title text-dots"><a href="#">Glasses</a></h6>
			<div class="action-wrap">
				<a href="#" class="btn btn-primary btn-sm float-right"> view</a>
				<div class="price-wrap h5">
					<span class="price-new">$280</span>
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3">
	<figure class="card card-product">
		<div class="img-wrap"><img src="https://static.wixstatic.com/media/a9ff3b_2dc1e209d10945a7b4329d2328dfcd7b.jpg/v1/fill/w_281,h_281,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/a9ff3b_2dc1e209d10945a7b4329d2328dfcd7b.jpg"> 
		
		</div>
		<figcaption class="info-wrap">
			<h6 class="title text-dots"><a href="#">Name of product</a></h6>
			<div class="action-wrap">
            <a href="#" class="btn btn-primary btn-sm float-right"> view </a>
				<div class="price-wrap h5">
					<span class="price-new">$280</span>
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-md-3">
	<figure class="card card-product">
		<div class="img-wrap"> <img src="https://static.wixstatic.com/media/a9ff3b_4181ada6b8024111b57df31ca9a73863.jpg/v1/fill/w_281,h_281,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/a9ff3b_4181ada6b8024111b57df31ca9a73863.jpg">
			
		</div>
		<figcaption class="info-wrap">
			<h6 class="title text-dots"><a href="#">Men's shirt</a></h6>
			<div class="action-wrap">
				<a href="#" class="btn btn-primary btn-sm float-right"> view </a>
				<div class="price-wrap h5">
					<span class="price-new">$280</span>
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
</div> <!-- row.// -->



<!--container end-->
                    </div>
                </div>
            </div>

        </section>
    

                
            
    <!-- <section class="section gray-bg" id="home">
     <div class ="container">
           <div class="row justify-content-center">
                <div class=" text-center text-bg-light"> 
                    <div class="section-title ">
                            <h2> What we do</h2>
                            <p class="lead">I provide professional, certified fitness programs designed to help you reach and maintain your health and fitness goals. Check out my offerings and choose one suitable to your ambitions and lifestyle.</p>
                    </div>
              </div>
            </div>
    <div class="col-lg-6">
        <img class="https://static.wixstatic.com/media/70bc9811a4b44c18bbb4237ed2ffec6a.jpg/v1/fill/w_831,h_675,fp_0.61_0.25,q_85,usm_0.66_1.00_0.01,enc_auto/70bc9811a4b44c18bbb4237ed2ffec6a.jpg" alt="">
        <div class="centered">
            <h2 id="cap">Muscle Building</h2>
            <p>Health and Fitness is not only about what your body looks like on the outside, but also on the inside! I will make sure your body and mind find the right balance. What are you waiting for? Book a session today!</p>
             </div>

      
    </div>
    <div class="col-lg-6">
        <img class="img-fluid img-thumbnail" src="https://static.wixstatic.com/media/70bc9811a4b44c18bbb4237ed2ffec6a.jpg/v1/fill/w_831,h_675,fp_0.61_0.25,q_85,usm_0.66_1.00_0.01,enc_auto/70bc9811a4b44c18bbb4237ed2ffec6a.jpg" alt="">
        <div class="centered">
            <h2 id="cap">Flexibility Training</h2>
            <p>This is a popular trend in the fitness world today. Whether it’s losing weight or trimming and toning, my program will improve your health and have you feeling great. You’ll see an improvement in your performance in no time.</p>
             </div>
      
    </div>
  
        
        </div>
        
    </section> -->
    <footer id="footer" > 
        <div class="footer-newsletter"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-lg-6">
                         <h4>Our Newsletter</h4> 
                         <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                     </div> 
                     <div class="col-lg-6"> 
                        <form action="" method="post">
                             <input type="email" name="email">
                             <input type="submit" value="Subscribe"> 
                            </form> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="footer-top"> 
        <div class="container">
             <div class="row"> 
                <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                      <ul> 
                        <li><i class="bx bx-chevron-right"></i> 
                        <a href="#">Home</a>
                    </li> 
                    <li><i class="bx bx-chevron-right"></i> 
                    <a href="#">About us</a>
                </li> 
                <li>
                    <i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                     <li>
                        <i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> 
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a>
                    </li> 
                </ul>
             </div>
              <div class="col-lg-3 col-md-6 footer-links"> 
                <h4>Our Services</h4> 
                <ul>
                     <li><i class="bx bx-chevron-right"></i>
                      <a href="#">Muscle Building</a></li>
                       <li><i class="bx bx-chevron-right"></i> <a href="#">Flexibility Training</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Fitness Aero</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Senior Fitness</a></li> 
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Workouts</a></li>
                     </ul>
                     </div> 
                     <div class="col-lg-3 col-md-6 footer-contact"> 
                        <h4>Contact Us</h4>
                         <p> 1University Ave, <br> Berekuso<br> Ghana <br><br> <strong>Phone:</strong> +1233 207611117<br> <strong>Email:</strong> idaya.seidu@ashesi.edu.gh<br> </p> 
                        </div>
                         <div class="col-lg-3 col-md-6 footer-info"> 
                            <h3>About FitX</h3> 
                            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> 
                            <div class="social-links mt-3"> 
                            <a href="#" class="twitter"><i class="bx bxl-twitter">
                            </i></a> <a href="#" class="facebook"><i class="bx bxl-facebook">

                            </i>
                        </a> <a href="#" class="instagram">
                            <i class="bx bxl-instagram"></i></a> 
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
         <div class="container">
             <div class="copyright"> &copy; Copyright <strong><span>FitX</span></strong>. All Rights Reserved </div> <div class="credits"> Designed by <a href="#">FitX Team</a> 
            </div>
         </div>
</footer>
<script src="../js/shop.js"></script>
</body>
</html>
