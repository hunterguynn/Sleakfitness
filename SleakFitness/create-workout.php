<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>Sleak Fitness</title>
    <meta content="Create an account, track your workouts and analyze your fitness journey" name="descriptison">
    <meta content="Fitness, Gym, Health, data tracker" name="keywords">
    
    <!-- Favicons -->
    <link href="assets/img/imghere.jpg" rel="icon">
    <link href="assets/img/imghere.jpg" rel="apple-touch-icon">
    
    <!-- Main CSS File -->
    <link href="assets/css/style.css?v=4" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    

    </head>


<body>

<!-- ---------------------------------------
    Nav Bar
-------------------------------------------->

 
    <div class="fixed-header">
        <div class="container" >
        <h1 >
            <div style="font-size: 50px; font-family: 'Righteous', cursive; display:in-line;">Sleak Fitness</div> 
        </h1>
        </div>
    </div>


<!-- ---------------------------------------
    Create Workout Form
-------------------------------------------->



<div class="roundbox-wide" style="background-color: black">
    <form method="post" action="assets/php/addworkout.php" name="Create-Account">
      <!-- Workout Name-->
      <div class="input-container">
        <label>Workout Name</label>
        <input type="text" name="username" placeholder="" pattern="[a-zA-Z0-9]+" required />
      </div>


      <!--Add Exercise -->

    
      <div class="input-container" style="display: inline-block; padding:10px">
        <label>Add Exercise</label>
        <input type="text" name="exercise" placeholder="" required />
      </div>

      <!--Add Exercise -->
      <div class="input-container" style="display: inline-block;">
          <label>Sets</label>
          <input type="text" name="sets" placeholder="" pattern="[0-9]+" required />
      </div>
    

      <!-- Create Workout-->
      <button type="submit" name="newworkout" value="newworkout">Create Workout</button>
    </form>



</body>



</html>