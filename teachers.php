<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>teachers</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include "nav.php" ?>
    
<section class="teachers">

   <h1 class="heading">expert teachers</h1>

   <form action="" method="post" class="search-tutor">
      <input type="text" name="search_box" placeholder="search tutors..." required maxlength="100">
      <button type="submit" class="fas fa-search" name="search_tutor"></button>
   </form>

   <div class="box-container">

      <div class="box offer">
         <h3>become a tutor</h3>
         <p>Impact knowledge in to the next generation of amazing leader of tommorrow</p>
         <a href="register.php" class="inline-btn">get started</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/th-1073072570.jpeg" alt="">
            <div>
               <h3>Emily watt</h3>
               <span>mathematics</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/teach2.jpeg" alt="">
            <div>
               <h3>Sam will</h3>
               <span>physics</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
        
         
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/teach3.jpeg" alt="">
            <div>
               <h3>Elle samp</h3>
               <span>chemistry</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
        
         
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/teach4.jpeg" alt="">
            <div>
               <h3>john stones</h3>
               <span>further mathematics</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
        
         
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/teach5.jpeg" alt="">
            <div>
               <h3>camila</h3>
               <span>ICT</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
        
         
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>
<!--
      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-8.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

   </div>-->

</section>














<?php include "footer.php" ?>
<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>