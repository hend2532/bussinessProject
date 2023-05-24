<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact us</title>
   <link rel="stylesheet" href="contact.css">
   <link rel="stylesheet" href="normalize.css">
   <!-- font Awesome libarary -->
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
   <div class="header">
      <img class="logo" src="images/logo.png" alt="">
      <div class="header-logo">
         <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="task1.php">Order</a></li>
            <li class="active"><a href="contact.php">Contact us</a></li>
         </ul>
      </div>
   </div>
   <div class="section">
         <h1>Contact</h1>
      </div>
      <form method="post" action="contact-form.php">
         <h1>Contact Form</h1>
         Name <br><input type="text" name="name" required/>
         <br>
         Email <br><input type="text" name="email" required/>
         <br>
         Subject <br><input type="text" name="subject" />
         <br>
         Message <br><textarea name="message" id="" ></textarea>
         <br>
      <button type="submit" name="send">send Message</button>
      </form>
      <footer>
      <img class="logo" src="images/logo.png" alt="">   
      <a href="#"> <li class="fab fa-facebook-f"></li> </a>
      <a href="task1.php"> <li class="fa-sharp fa-solid fa-truck-fast"></li> </a>
      <a href="contact.php"><li class="fa-sharp fa-solid fa-envelope"></li></a>
      <div class="parent">
         <div class="footer1">
            <h3>Our Locations</h3>
            <p>564 Cairo
            <br>+123 456 7890</p>
         </div>
         <div class="footer2">
            <h3>Opening Hours</h3>
            <p>Monday - Friday : 8AM to 11PM <br>  Saturday - Sunday : 9Am to 12PM</p>
         </div>
      </div>  
      <a href="#">Demolink@mail.com</a>
      <div class="name">Made By <span>Hend,Mariam,Ghada</span></div>
      </footer>
</body>
</html>