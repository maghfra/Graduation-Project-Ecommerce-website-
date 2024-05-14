<?php
  if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $messag = $_POST["message"];
    /*-------- Create connection--------*/
    $conn = mysqli_connect("localhost:3307", "root", "", "aform");
    /*-----DTABASE TABLE----------*/
    $sql = "INSERT INTO `contact-data`(`name`, `email`, `message`) VALUES ('{$name}','{$email}','{$messag}')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
      echo "<script>alert('mail not send.')</script>";
    }
    else{
      echo "<script>alert('Thank you for connecting us')</script>";
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
     <title>contact</title>
    <!-- Render All Elements Normally -->
  </head>
  <body>
    <!-- Start Header -->
    <header>       
      <div class="container">
         <div class="logo"><img src="img/logo.jpg"></div>
         <nav class="nav-link" id="navlink">
           <i class="fas fa-x" onclick="hidemenu() "></i>
           <ul>
             <li><a href="index.html">Home</a></li>
             <li><a href="root.html">Products</a></li>
             <li><a href="feedback.html">Feedback</a></li>
             <li><a class="active" href="contact.html">Contact</a></li>
             <li class="carts"><a href="cart.html"> <i class="fa-solid fa-bag-shopping"></i><span>0</span></a></li>       
           </ul>
         </nav>
         <i class="fas fa-bars" onclick="showmenu()"></i>
      </div>
    </header>
    <!--end header-->

    <!--start page header-->
      <div class="contact">
       <div class="content">
         <h2>CONTACT US</h2>
         <p>Contact is the lifeblood of growth, means for changing oneself</p>
       </div>
   <!--end page header-->
    <!--start contact info------->
      <div class="con-container">
        <div class="contact-info">
          <div class="box">
            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="text">
                <h3>Address</h3>
                <p>Old Damietta<br>Damietta<br>egypt </p>
             </div>
          </div>
          <div class="box">
           <div class="icon"><i class="fa-solid fa-phone"></i></div>
             <div class="text">
                <h3>phone</h3>
                <p> 01022445678<br> 01044226587</p>
             </div>
          </div>
          <div class="box">
           <div class="icon"><i class="fa-solid fa-envelope"></i></div>
             <div class="text">
                <h3>E-mail</h3>
                <p>maghferahassan@gmail.com <br> shamsEldebsy@gmail.com</p>
             </div>
          </div>
       </div>
    <!----end contact info------>
    <!----start contact form----->
     <div class="contact-form">
       <form action="" method="post">
         <h2>Send message</h2>
         <div class="input-box">
           <input type="text" name="name" required="required">
           <span>Full Name</span>
         </div>
         <div class="input-box">
           <input type="text" name="email" required="required">
           <span>E-mail</span>
         </div>
         <div class="input-box">
           <textarea name="message" required ></textarea>
           <span>Type Your Message...</span>
         </div>
         <div class="input-box">
            <input type="submit"  name="submit" value="Send Message">
         </div>
       </form>
     </div>
     <!---end contact form----> 
    </div>
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
   <script src="scripts/main.js"></script>
 </body>
</html>

      