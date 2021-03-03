

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sleak Fitness New User</title>
  <meta content="Create an account, track your workouts and analyze your fitness journey" name="descriptison">
  <meta content="Fitness, Gym, Health, data tracker" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/imghere.jpg" rel="icon">
  <link href="assets/img/imghere.jpg" rel="apple-touch-icon">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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

<div class="fixed-header">
    <div class="container">
    <h1>Sleak Fitness Create Account</h1>
    </div>
</div>



  <div class="roundbox" style="background-color: black">
    <form method="post" action="assets/php/adduser.php" name="Create-Account">
      <!-- Username-->
      <div class="input-container">
        
        <input type="text" name="username" placeholder="" pattern="[a-zA-Z0-9]+" required />
        <label>Username</label>
      </div>

      <!-- Password-->
      <div class="input-container">
         
          <input type="password" name="password" placeholder="" required />
           <label>Password</label>
      </div>

      <div class="input-container">
          
          <input type="password" name="rpassword" placeholder="" required />
          <label>Re-Password</label>
      </div>

      <!-- Firstname-->
      <div class="input-container">
        
        <input type="text" name="firstname" placeholder="" required />
        <label>Firstname</label>
      </div>

      <!-- Lastname-->
      <div class="input-container">
        
        <input type="text" name="lastname" placeholder="" required />
        <label>Lastname</label>
      </div>
                  
      <!-- Email-->
      <div class="input-container">
        
        <input type="text" name="email" placeholder="" required />
        <label>Email</label>
      </div>


      <!-- Phone Number-->
      <div class="input-container">
        
        <input type="text" name="phone" placeholder="" required />
        <label>Phone Number</label>
      </div>

      <!-- Create Account Button-->
      <button type="submit" name="newuser" value="newuser">Create Account</button>
    </form>

     
  </div>

  <div style="margin-left: 15px;">
  <!-- Login Link-->
    <a href="login-page.php" class="white">Login</button>
  </div>
</body>

</html>