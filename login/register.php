<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../css/register.css">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>
    <title>Customer registration form</title>
</head>
<body>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://www.learndash.com/wp-content/uploads/200429-Tips-to-Improve-User-Registration-for-Your-Online-Course.jpg"
                alt="Sample photo" class="img-fluid img-thumbnail"
                style="width: auto; height:95%" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">customer registration form</h3>
                <form  method="POST" action = "./register_process.php" id="regis_form">
                    
                   
                <div class="row">
                  
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="customer_name" required id="first_name" class="form-control form-control-lg" />
                      <label class="form-label" for="firstname"> name</label>
                      <div id="error_msg_name"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="email" name="customer_email" required id="regis_email" class="form-control form-control-lg" />
                      <label class="form-label" for="email">email</label>
                      <div id="error_msg"></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="password" name="customer_pass" required id="regis_password" class="form-control form-control-lg" />
                      <label class="form-label" for="psw">password</label>
                      <div id="error_msg"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="customer_country" required id="country" class="form-control form-control-lg" />
                      <label class="form-label" for="country">country</label>
                      <div id="error_msg_country"></div>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="customer_city" required id="city" class="form-control form-control-lg" />
                  <label class="form-label" for="city">city</label>
                  <div id="error_msg-city"></div>
                </div>

               

            

                <div class="form-outline mb-4">
                  <input type="text" name="customer_contact" required id="contact" class="form-control form-control-lg" />
                  <label class="form-label" for="contact">contact</label>
                  <div id="error_msg_contact"></div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="image" id="picture" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example90">Picture</label>
                </div>
                <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label text-dark" for="form2Example3">
                      I do accept the <a href="#!" class="text-dark"><u>Terms and Conditions</u></a> of your
                      site.
                    </label>
                  </div>
                
                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" name="submit" id="signup" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
                
                <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="login.php" id="signin">Already have an account? login</a></p>
                              </div>
                </div>
                

                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
<script src="../js/app.js"></script> 
</body>
</html>