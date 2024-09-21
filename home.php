<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.php" class="logo">EDU4ALL</a>

         <form action="search.php" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
         </form>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div>

         <div class="profile">

            <a href="login.php" class="option-btn">login</a>
            <button onclick="register('tutor')" class="option-btn"><a href="Cv.php"> Register as Tutor</a></button>
            <button onclick="register('student')" class="option-btn"> <a href="register.php">Register as Student</a></button>
         </div>
         </div>

      </section>

   </header>

   <div class="side-bar">

      <div id="close-btn">
         <i class="fas fa-times"></i>
      </div>
      <!--
<div class="profile">
    <img src="images/pic-1.jpg" class="image" alt="">
    <h3 class="name">MiCHAEL N</h3>
    <p class="role">student of the week</p>
    <a href="profile.html" class="btn">view profile</a>
</div>
-->
      <nav class="navbar">
         <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
         <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
         <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
         <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
         <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
      </nav>

   </div>

   <section class="home-grid">

      <h1 class="heading">quick options</h1>

      <div class="box-container">

         <div class="box">
            <h3 class="title">my education my pride</h3>
            <p class="likes">number of subjects : <span>10</span></p>
            <a href="./courses.php" class="inline-btn">view subjects</a>
            <p class="likes">number of tutors : <span id="tutorCount">0</span></p>
            <a href="./teachers.php" class="inline-btn">view tutors</a>
            <p class="likes">number of students: <span id="studentCount">0</span></p>
            <a href="#" class="inline-btn">view stats</a>
         </div>

         <div class="box">
            <h3 class="title">top categories</h3>
            <div class="flex">
               <a href="#"><i class="fas fa-code"></i><span>computer science</span></a>
               <a href="#"><i class="fas fa-chart-simple"></i><span></span>Math</a>
               <a href="#"><i class="fas fa-code"></i><span>ICT</span></a>
               <a href="#"><i class="fas fa-chart-line"></i><span>Biology</span></a>
               <a href="#"><i class="fas fa-pen"></i><span>Further math</span></a>
               <a href="#"><i class="fas fa-camera"></i><span>Phylosophy</span></a>
               <a href="#"><i class="fas fa-user"></i><span>Food Science</span></a>
               <a href="#"><i class="fas fa-vial"></i><span>chemistry</span></a>
            </div>
         </div>

         <div class="box">
            <h3 class="title">popular topics</h3>
            <div class="flex">
               <a href="#"><i class="fab fa-bars"></i><span>physics</span></a>
               <a href="#"><i class="fab fa-chart-line"></i><span> Biology</span></a>
               <a href="#"><i class="fab fa-vial"></i><span>Chemistry</span></a>
               <a href="#"><i class="fab fa-camera"></i><span>Geography</span></a>
               <a href="#"><i class="fab fa-person"></i><span>English</span></a>
               <a href="#"><i class="fab fa-person"></i><span>French</span></a>
            </div>
         </div>
         <!--
      <div class="box">
         <h3 class="title">become a tutor</h3>
         <p class="tutor">Become a Tutor at our wonderful platform to impact the new generation</p>
         <a href="teachers.php" class="inline-btn">get started</a>
      </div>
-->

      </div>

   </section>

   <!--

<section class="courses">

   <h1 class="heading">our courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JS tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JQuery tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete SASS tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view all courses</a>
   </div>

</section>
-->




   <script>
      // Function to update the counts displayed on the page
      function updateCounts() {
         const tutorCount = localStorage.getItem('tutorCount') || 0;
         const studentCount = localStorage.getItem('studentCount') || 0;

         document.getElementById('tutorCount').innerText = tutorCount;
         document.getElementById('studentCount').innerText = studentCount;
      }

      // Function to register a user and update counts
      function register(type) {
         if (type === 'tutor') {
            let count = parseInt(localStorage.getItem('tutorCount')) || 0;
            localStorage.setItem('tutorCount', count + 1);
         } else if (type === 'student') {
            let count = parseInt(localStorage.getItem('studentCount')) || 0;
            localStorage.setItem('studentCount', count + 1);
         }
         updateCounts();
      }

      // Update counts on page load
      document.addEventListener('DOMContentLoaded', updateCounts);
   </script>









   <?php include "footer.php" ?>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>


</body>

</html>