<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Submission</title>
<!--
<style>
    body{
        display: flex;
        justify-content: center;
       background:#444444;
       border-radius: 100px;
    }
    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 300px;
        box-shadow: 0px 0px 10px wheat;
        
        
    }
    input {
        margin-bottom: 10px;
        width: 100%;
        padding: 5px;
    }
    input[type="submit"] {
        background-color: #193f1a;
        color: white;
        border: none;
        cursor: pointer;
        box-shadow: 0px 0px 4px whitesmoke;
    }
</style>-->
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "nav.php" ?>

<section class="form-container">

    <form action="cv.php" method="post" enctype="multipart/form-data">
        <!--
        <label for="full_name">Full Name:</label><br>
        <input type="text" id="full_name" name="full_name" required><br>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="cv">Upload CV:</label><br>
        <input type="file" id="cv" name="cv" required><br>
        <input type="submit" value="Submit">-->

        <h3>register now</h3>
      <p>your name <span>*</span></p>
      <input type="text" name="full_name" placeholder="enter your name" required maxlength="50" class="box">
      <p>your username <span>*</span></p>
      <input type="text" name="username" placeholder="enter your name" required maxlength="50" class="box">
      <p>your email <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" required maxlength="20" class="box">
      <p>select CV <span>*</span></p>
      <input type="file" accept="image/*" name="cv" required class="box">
      <input type="submit" value="register new" name="submit" class="btn">
    </form>
    
</section>


<?php include "footer.php" ?>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>