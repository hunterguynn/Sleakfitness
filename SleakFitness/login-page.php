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
    <link href="assets/css/style.css?v=12" rel="stylesheet">
    
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

<!-- Login Heading -->

 
    <div class="fixed-header">
        <div class="container" >
        <h1 >
            <div style="font-size: 50px; font-family: 'Righteous', cursive; display:in-line;">Sleak Fitness</div> 
        </h1>
        </div>
    </div>


    <div class="box" style="background-color: black">
        <form method="post" action="assets/php/login.php" name="Please Sign In">
            <span class="text-center">login</span>
            <!-- Username-->
            <div class="input-container">
                <input type="text" name="username" placeholder="" pattern="[a-zA-Z0-9]+" required="" />
                <label>Username</label>
            </div>
            <!-- Password-->
            <div class="input-container">
                <input type="password" name="password" placeholder="" required="" />
                <label>Password</label>
            </div>
            
            <!-- Login Button-->
            <button class="btn" type="submit" name="login" value="login">Login</button>
        </form>

        <!-- New User Link-->
        <a href="newuser.php" class="white">Create Account</button>
    


<!-- Login Errors -->    
        
        <!-- Seesion not started -->    
        <?php 
        if(@$_GET['nosession']==true)
        {
        ?>
        <div style="color: red;"><?php echo $_GET['nosession'] ?></div>                                
        <?php
        }
        ?>
        <!-- Incorrect password and username -->  
        <?php 
        if(@$_GET['invaild']==true)
        {
        ?>
        <div style="color: red;"><?php echo $_GET['invaild'] ?></div>                                
        <?php
        }
        ?>

        <!-- Empty -->  
        <?php 
        if(@$_GET['Empty']==true)
        {
        ?>
        <div style="color: red;"><?php echo $_GET['Empty'] ?></div>                                
        <?php
        }
        ?>
    
    
    
    </div>



</body>



</html>