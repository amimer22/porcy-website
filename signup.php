<?php 
/*try {
  /*$userId = $auth->register($_POST['email-register'], $_POST['psw-register'], $_POST['pswC-register'],function ($selector, $token) {
      echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
      echo '  For emails, consider using the mail(...) function, Symfony Mailer, Swiftmailer, PHPMailer, etc.';
      echo '  For SMS, consider using a third-party service and a compatible SDK';
  });

  //echo 'We have signed up a new user with the ID ' . $userId;
}*/
include("index.php");
try {
  if (isset($_POST['email-register']) && isset($_POST["psw-register"]) && isset($_POST["pswC-register"])) {
      $email = $_POST["email-register"];
      $password = $_POST["psw-register"];
      $cpass = $_POST["pswC-register"];
      
      /*if(isset($_POST["email-register"])){
        $emailregister = $_POST["email-register"];
      }else{
        $emailregister = null;
      }*/

      if($password === ""){
        echo "password must not be empty";
      }else if ($password !== $cpass) {
        echo "password dont match";
      }else{
        $userId = $auth->register($email, $password);
        echo 'We have signed up a new user with the ID ' . $userId;
      }
  }
}
  
catch (\Delight\Auth\InvalidEmailException $e) {
  die('Invalid email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
  die('Invalid password');
}
catch (\Delight\Auth\UserAlreadyExistsException $e) {
  die('User already exists');
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
        
                    <form action="" method="POST">
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                          <input type="email" id="email-register" class="form-control" name="email-register" />
                          <label class="form-label" for="email-register">Email address</label>
                      </div>
          
                      <!-- Password input -->
                      <div class="form-outline mb-4">
                          <input type="password" id="password-register" class="form-control" name="psw-register" />
                          <label class="form-label" for="password-register">Password</label>
                      </div>
                      <!-- Password confirm input -->
                      <div class="form-outline mb-4">
                        <input type="password" id="passwordC-register" class="form-control" name="pswC-register" />
                        <label class="form-label" for="passwordC-register">Confirm Password</label>
                      </div>
                      <br>
                      <div>
                        <a href="login.html">Login</a>
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