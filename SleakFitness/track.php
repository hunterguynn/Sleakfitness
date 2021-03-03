<?php
//initialize session
include('assets/php/config.php');
session_start();

//Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["username"])){
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
    <link href="assets/css/style.css?v=101" rel="stylesheet">

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
            <a href="home.php" style="color: #FFFFFF;"><div style="font-size: 50px; font-family: 'Righteous', cursive; display:in-line;">Sleak Fitness</div></a> 
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

   
    &nbsp;


    
    


<!--====== Chart ==========-->


<div class="roundbox-homechart">
<h1 style="font-size: 20px;">Weight</h1>
  <div class="ct-chart ct-double-octave" style="z-index: 0;"></div>
  <script>
      


  var weight = [];
  var time = [];
  
  <?php
    
    
    $sql = "SELECT userweight,time FROM weight WHERE user='{$_SESSION['username']}' ";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
      while($row = $result->fetch(PDO::FETCH_ASSOC)) {  
      echo "weight.push(" .$row["userweight"]. ");" ;
      }
    }


    $conn = null;
    
  ?>

  var data = {
    // A labels array that can contain any sort of values
    labels: ['Tue', 'Wed', 'Thu', 'Fri','Sat', 'Sun',"Mon",'Tue', 'Wed', 'Thu', 'Fri','Sat', 'Sun',"Mon"],
    // Our series array that contains series objects or in this case series data arrays
    series: [weight]
  };
  
  
  // Create a new line chart object where as first parameter we pass in a selector
  // that is resolving to our chart container element. The Second parameter
  // is the actual data object.
  new Chartist.Line('.ct-chart', data,);
  

  
  
  </script>
    <nav>
  <ul>
    <li class="active"><a href="">All</a></li>
    <li><a href="">1Y</a></li>
    <li><a href="">1M</a></li>
    <li><a href="">1W</a></li>
  </ul>
</nav>
</div>
</section>


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