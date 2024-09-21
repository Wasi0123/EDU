<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include "nav.php" ?>
    

<section class="form-container">

   <form action="login2.php" method="post" enctype="multipart/form-data">
      <h3>login now</h3>

      <p>your username <span>*</span></p>
      <input type="text" name="username" placeholder="enter your email" required maxlength="50" class="box">
      
      <p>your email <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" required maxlength="20" class="box">
      <input type="submit" value="login now" name="submit" class="btn"><!--
      <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="email">email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login" id="btn">-->
   </form>

</section>















<?php include "footer.php" ?>
<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>