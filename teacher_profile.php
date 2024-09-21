<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tutor profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include "nav.php" ?>
    

<section class="teacher-profile">

   <h1 class="heading">profile details</h1>

   <div class="details">
      <div class="tutor">
         <img src="images/th-1073072570.jpeg" alt="">
         <h3>Emily watt</h3>
         <span>Mathematics</span>
      </div>
      <div class="flex">
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <p>total comments : <span>52</span></p>
      </div>
   </div>

</section>

<section class="courses">

   <h1 class="heading">our courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="thumb">
            <img src="images/maths1.jpeg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">mathematics with machanics</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/math2.jpeg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Mathematics with statics </h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/math4.jpeg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">pure mathematics</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/math5.jpeg" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Business mathematic</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

   </div>

</section>












<?php include "footer.php" ?>
<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>