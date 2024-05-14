<?php
 @include 'test.php';
  if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   /*---------DATABASE---------*/
   $select = " SELECT * FROM  user_form WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($conn, $select);
   /*قراءه السجل من الدتا بيز*/
   $row = mysqli_fetch_assoc($result);

     if(mysqli_num_rows($result) > 0){
       if($pass == $row["password"]){
       header("location: index.html");
      }
    }else{
      $error[] = 'something wrong!';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" /> 
     <title>login page</title>
    <!-- Render All Elements Normally -->
  </head>
  <body>
     <!--start page header-->
     <div class="login" id="login">
        
     <!--end page header-->
      <!----start contact form----->
      <div class="contact-form">
        <form action="" method="post">
           <h2>Login Now</h2>

          <?php
           if(isset($error)){
             foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
              }
            }
          ?>

           <div class="input-box">
              <input type="text" name="email" required="required">
              <span>Enter Your E-mail</span>
           </div>
           <div class="input-box">
            <input type="password" name="password" required="required">
            <span>Enter your password</span>
           </div>
           <div class="input-box">
            <div class="btn">
             <input type="submit" name="submit" value="Login now">
            </div>
             <p>Don't have an account? <a href="registeration.php"><i> Sign In Now </i></a> </p>
           </div>
        </form>
      </div>
     <!---end contact form----> 
     </div>
          
   <!--start footer-->
   <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Boutique</h4>
          <ul>
            <li><a href=""></a> about us</li>
            <li><a href=""></a>our services</li>
            <li><a href=""></a>privacy policy</li>
          </ul>
        </div>
        <div class="footer-col">
         <h4>Get Help</h4>
         <ul>
           <li><a href=""></a>Shipping</li>
           <li><a href=""></a>returns</li>
           <li><a href=""></a>order status</li>
           <li><a href=""></a>payment options</li>
         </ul>
       </div>
       <div class="footer-col">
         <h4>Online Shop</h4>
         <ul>
           <li><a href=""></a>clothes</li>
           <li><a href=""></a>shoes</li>
           <li><a href=""></a>bags</li>
           <li><a href=""></a>accessories</li>
         </ul>
       </div>
       <div class="footer-col">
         <h4>Follow Us</h4>
         <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"> <i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
         </div>
       </div>
      </div>
      <hr>
      <p> &copy; 2022 Boutique All Right Reserved</p>
    </div>
  </div>
  <!--end footer-->
 </body>
</html>