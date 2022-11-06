<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>

 <!-- <link rel="stylesheet" href="..//css/login.css">  -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
    body{
    padding-top:4.2rem;
    padding-bottom:4.2rem;
    background:rgba(0, 0, 0, 0.76);
    }
    a{
     text-decoration:none !important;
     }
     h1,h2,h3{
     font-family: 'Kaushan Script', cursive;
     }
      .myform{
    position: relative;
    display: -ms-flexbox;
    display: flex;
    padding: 1rem;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 1.1rem;
    outline: 0;
    max-width: 500px;
     }
     .tx-tfm{
     text-transform:uppercase;
     }
     .mybtn{
     border-radius:50px;
     }
    
     .login-or {
     position: relative;
     color: #aaa;
     margin-top: 10px;
     margin-bottom: 10px;
     padding-top: 10px;
     padding-bottom: 10px;
     }
     .span-or {
     display: block;
     position: absolute;
     left: 50%;
     top: -2px;
     margin-left: -25px;
     background-color: #fff;
     width: 50px;
     text-align: center;
     }
     .hr-or {
     height: 1px;
     margin-top: 0px !important;
     margin-bottom: 0px !important;
     }
     .google {
     color:#666;
     width:100%;
     height:40px;
     text-align:center;
     outline:none;
     border: 1px solid lightgrey;
     }
      form .error {
     color: #ff0000;
     }
     #second{display:none;}
</style> 
</head>
<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
                         
						 </div>
					</div>
                   <form action="./login_process.php" method="post" name="login" id="login_form">
                           <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" name="customer_email"  class="form-control" required id="email" aria-describedby="emailHelp" placeholder="Enter email">
                              <div id="error_msg"></div>
                           </div>
                           <div class="form-group">
                              <label for="psw">Password</label>
                              <input type="password" name="customer_pass" required id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                              <div id="error_msg"></div>
                           </div>
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="submit1" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                 </a>
                              </p>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="register.php" id="signup">Sign up here</a></p>
                           </div>
                        </form>
                 
				</div>
			</div>
			
			</div>
		</div>
      </div>   
         <script src="../js/app.js"></script>

</body>
</html>