<?php
include("index.php");
try {
if (isset($_POST['email-login']) && isset($_POST["password-login"])) {
    // 
    $auth->login($_POST['email-login'], $_POST['password-login']);
    header("location: homepage.html");
    }
}
catch (\Delight\Auth\InvalidEmailException $e) {
  die('Wrong email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
  die('Wrong password');
}
catch (\Delight\Auth\EmailNotVerifiedException $e) {
  die('Email not verified');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
  die('Too many requests');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="login.html">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>    
            </ul>
          </div>
        </div>
    </nav>
    <br>
    <div class="container">
      <!-- Section: Design Block -->
      <section class=" text-center text-lg-start">
         <style>
         .rounded-t-5 {
             border-top-left-radius: 0rem;
             border-top-right-radius: 0rem;
         }
     
         @media (min-width: 992px) {
             .rounded-tr-lg-0 {
             border-top-right-radius: 0;
             }
     
             .rounded-bl-lg-5 {
             border-bottom-left-radius: 0rem;
             }
         }
         </style>
         <div class="card mb-3">
         <div class="row g-0 d-flex align-items-center">
             <div class="col-lg-4 d-none d-lg-flex">
             <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                 class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
             </div>
             <div class="col-lg-8">
             <div class="card-body py-5 px-md-5">
     
                 <form action="" method="post">
                 <!-- Email input -->
                 <div class="form-outline mb-4">
                     <input type="email" id="email-login" class="form-control" name="email-login" />
                     <label class="form-label" for="email-login" >Email address</label>
                 </div>
     
                 <!-- Password input -->
                 <div class="form-outline mb-4">
                     <input type="password" id="password-login" class="form-control" name="password-login"/>
                     <label class="form-label" for="password-login" >Password</label>
                 </div>
     
                 <!-- 2 column grid layout for inline styling -->
                 <div class="row mb-4">
                     <div class="col d-flex justify-content-center">
                     <!-- Checkbox -->
                     <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                         <label class="form-check-label" for="form2Example31"> Remember me </label>
                     </div>
                     </div>
     
                     <div class="col">
                     <!-- Simple link -->
                     <a href="#!">Forgot password?</a>
                     </div>
                 </div>
                 <br>
                 <div>
                  <a href="signin.php">Register</a>
                </div>  
                <br>
                 <!-- Submit button -->
                 <input type="submit" class="btn btn-primary btn-block mb-4"/>
     
                 </form>
     
             </div>
             </div>
         </div>
         </div>
     </section>
      <!-- Section: Design Block -->
    </div>
    
     
</body>
</html>