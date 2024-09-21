<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>video playlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include "nav.php" ?>
    

<section class="playlist-details">

   <h1 class="heading">playlist details</h1>

   <div class="row">

      <div class="column">
         <form action="" method="post" class="save-playlist">
            <button type="submit"><i class="far fa-bookmark"></i> <span>save playlist</span></button>
         </form>
   
         <div class="thumb">
            <img src="images/math2.jpeg" alt="">
            <span>10 videos</span>
         </div>
      </div>
      <div class="column">
         <div class="tutor">
            <img src="images/th-1073072570.jpeg" alt="">
            <div>
               <h3>emily watt</h3>
               <span>21-10-2022</span>
            </div>
         </div>
   
         <div class="details">
            <h3>complete Mathematics</h3>
            <p>i am a dedicated and patient teacher who is willing to see you through your advance level.</p>
            <a href="teacher_profile.php" class="inline-btn">view profile</a>
         </div>
      </div>
   </div>

</section>

<section class="playlist-videos">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/math4.jpeg" alt="">
         <h3>mathematics(part 01)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/maths1.jpeg" alt="">
         <h3>mathematics (part 02)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/math2.jpeg" alt="">
         <h3>mathematics(part 03)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/math5.jpeg" alt="">
         <h3>mathematics(part 04)</h3>
      </a>
<!--
      <a class="box" href="watch-video.html">
         <i class="fas fa-play"></i>
         <img src="images/post-1-5.png" alt="">
         <h3>complete HTML tutorial (part 05)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-6.png" alt="">
         <h3>complete HTML tutorial (part 06)</h3>
      </a>-->

   </div>

</section>













<<?php include "footer.php" ?>
<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>