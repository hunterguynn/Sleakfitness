<?php
//initialize session
session_start();

//Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["firstname"])){
    header("location: /SleakFitness/login-page.php?nosession= Please Login Again!");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>Sleak Fitness Home</title>
    <meta content="Create an account, track your workouts and analyze your fitness journey" name="descriptison">
    <meta content="Fitness, Gym, Health, data tracker" name="keywords">
    
    <!-- Favicons -->
    <link href="assets/img/imghere.jpg" rel="icon">
    <link href="assets/img/imghere.jpg" rel="apple-touch-icon">
    

    <!-- Main CSS File -->
    <link href="assets/css/style.css?v=17" rel="stylesheet">

    <!-- Charting -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <link href="assets/css/chart.css" rel="stylesheet">
    <link href="assets/css/chartnav.css" rel="stylesheet">
    
     <!-- Icons -->
    <script src="https://kit.fontawesome.com/5b37c91a08.js" crossorigin="anonymous"></script>

    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">


    <!-- Vendor CSS Files   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>


    
    <div class="fixed-header" style="z-index: 9999;">
        <div class="container" >
          <h1 >
              <div style="font-size: 50px; font-family: 'Righteous', cursive; display:in-line;">Sleak Fitness</div> 
          </h1>
          <!--
          <ul>
          <li><a href="/html/">Home</a></li>
          <li><a href="/css/">Workouts</a></li>
          <li><a href="/js/">Create</a></li>
          <li><a href="/python/">Record</a></li>
          </ul>
          -->
        </div>
    </div>



    <!-- Home Page Heading -->

<section>
  <script>
    var statement =document.getElementById('welcomestatement');
    

  </script>

<div class="page-header">
    <h1 id=welcomestatement style="font-size: 30px; padding-left: 30px;">Good Afternoon, <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b>!</h1>
<div>


<!----------------------------------------------------
Home Page Chart 
------------------------------------------------------>

<div class="roundbox-homechart">
<h1 style="font-size: 20px;">Fitness Score</h1>
    <div class="ct-chart ct-double-octave" style="z-index: 0;"></div>
    <script src="assets/js/homepagecharts/firstchart.js"></script>
  <ul id="time-frame-nav" class="ul">
  <div id="time-frame-nav" class="div "><a class="a" id="time-frame-nav" href="#">All</a></div>
  <div class="div" id="time-frame-nav"><a class="a" id="time-frame-nav" href="#">1Y</a></div>
  <div class="div" id="time-frame-nav"><a class="a" id="time-frame-nav" href="#">1M</a></div>
  <div class="div" id="time-frame-nav"><a class="a" id="time-frame-nav" href="#">1W</a></div>
  </ul>
</div>
</section>


<!--====== Databox ==========-->
<section>
<div class="data-box">

<div>Data</div>

</div>

</section>
<!--====== Grid ==========-->

<section>

<div class="home-grid">
<a class="item1" href="workout.php"><button class=" grid-button"  href="workout.php"><i class="fas fa-dumbbell"></i>Workout Here</button></a>
<a class="item2" href="create-workout.php"><button class="grid-button"  ><i class="fa fa-pencil"></i>Create Workout</button></a>
<a class="item3" href="track.php"><button class="grid-button"><i class="fas fa-chart-line"></i> <br>Track Progress</button></a>
<a class="item4" href="record-data.php"><button class="grid-button"><i class="fas fa-book-medical"></i>Record Data</button></a>
</div>
<section>



<p>
    <a style="display: block;" href="reset-password.php" class="">Reset Your Password</a>
    <a style="display: block; margin-bottom: 5%;" href="assets/php/logout.php?logout" class="">Logout</a>
</p>



   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Hunter Guynn</span></strong>
      </div>
      <div class="credits">
        Designed by <a href="https://hunterguynn.com/">Hunter Guynn</a>
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
</html>