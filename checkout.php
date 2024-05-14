<?php
  if(isset($_POST['submit'])){
   $fname = $_POST['fristname'];
   $lname = $_POST['lastname'];
   $company = $_POST['company'];
   $city = $_POST['city'];
   $street = $_POST['street'];
   $postcode = $_POST['postcode'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $notes = $_POST['notes'];
   $conn = mysqli_connect("localhost:3307", "root", "" ,"aform");
   $sql = "INSERT INTO `data`(`fristname`, `lastname`, `company`, `city`, `street`, `postcode`, `phone`, `email`, `notes`)
  VALUES ('{$fname}' , '{$lname}' , '{$company}' , '{$city}' , '{$street}' , '{$postcode}' , '{$phone}' , '{$email}' , '{$notes}')";
  $result = mysqli_query($conn, $sql);
  if(!$result){
    echo "<script>alert('mail not send.')</script>";
  }
  else{
    header("location:thanks.html");
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
   <title>checkout</title>
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
              <li ><a href="index.html">Home</a></li>
              <li><a href="root.html">products</a></li>
              <li><a href="feedback.html">feedback</a></li>
              <li><a href="contact.php">contact</a></li>
              <li class="carts"><a class="active" href="cart.html"> <i class="fa-solid fa-bag-shopping"></i><span>0</span> </a></li>
           </ul>
        </nav>
          <i class="fas fa-bars" onclick="showmenu()"></i>
      </div>
    </header>
    <!--end header-->
      <!--start page header-->
       <div class="feedback-header">
         <h2>checkout</h2>
       </div>

       <div class="checkout-total">
        <form action="" method="post">
            <h2>Billing details</h2>
            <hr>
            <br>
            <div class="total-details">
            <label for="fristname"> Frist name</label>
            <br>
            <input type="text" name="fristname" placeholder="Enter your frist name" required>
            </div>
            <div class="total-details">
                <label for="lastname"> last name</label>
                <br>
                <input type="text" name="lastname" placeholder="Enter your last name" required>
                </div>
                <div class="total-details">
                    <label for="company"> Company name (optional) </label>
                    <br>
                    <input type="text" name="company" placeholder="Enter your company name">
                    </div>
                    <div class="total-details">
                        <label for="text"> Country</label>
                        <br>
                        <select>
                            <option>Egypt</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Hong Kong</option>
                            <option>India</option>
                            <option>Kuwait</option>
                            <option>Libya</option>
                        </select>
                    </div>
                    <div class="total-details">
                        <label for="city">Town / City</label>
                        <br>
                        <input type="text" name="city" placeholder="Enter your city" required>
                        </div>
                   <div class="total-details">
                     <label for="street">Street address</label>
                     <br>
                     <input type="text" name="street" placeholder=" Enter your house number and street number" required>
                  </div>
                  <div class="total-details">
                    <label for="postcode">Postcode</label>
                    <br>
                   <input type="text" name="postcode" placeholder="Enter your postcode" required>
                </div>
                  <div class="total-details">
                      <label for="phone">Phone</label>
                      <br>
                     <input type="text" name="phone" placeholder="Enter your phone" required>
                  </div>
                  <div class="total-details">
                        <label for="email">Email address</label>
                        <br>
                        <input type="email" name="email" placeholder="Enter your E-mail address" required>
                  </div>
                  <h2>Additional information</h2>
                  <hr>
                  <br>
                  <div class="total-details">
                    <label for="notes">Order notes (optional) </label>
                    <br>
                    <input type="text" name="notes" placeholder="Enter notes about your order">
                    </div>
                    <br>
                    
                    <div class="your-order">
                     
                        </div>
                      <div class="pay">
                        <h2>Way of payment</h2>
                        <hr>
                        <br>
                      <input type="radio" id="pay" name="price" required>
                      <label for="pay">check payments</label>
                       <br>
                      <input type="radio" id="cash" name="price" required>
                      <label for="cash">Cash on delivery</label>
                    </div>
                    <hr>
                    <br>
                    <div class="checkout">
            <input type="submit"  name="submit" value="Place order">
         </div>
                    </div>
                </form>                
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