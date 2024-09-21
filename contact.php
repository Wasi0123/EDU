<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include "nav.php" ?>
    


<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="https://formspree.io/f/xkgwakpr" method="post">
         <h3>Contact Us</h3>
       
         <input type="email" placeholder="enter your email" name="email" required maxlength="50" class="box">
        
         <textarea name="msg" class="box" placeholder="enter your message" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel:1234567890">+237683469141</a>
         <a href="tel:1112223333">+237654377114</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="mailto:wasiemmanuela183@gmail.com">wasiemmanuela183@gmail.come</a>
         <a href="mailto:wasiemmanuela@gmail.com">wasiemmanuela@gmail.come</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <a href="#">Africa,Cameroon Litoral-Douala</a>
      </div>

   </div>

</section>














<?php include "footer.php" ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>