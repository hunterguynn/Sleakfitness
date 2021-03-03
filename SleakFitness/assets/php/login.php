<?php 
include('config.php');
session_start();



if (!isset($_POST['username'],$_POST['password'])) {
    header('Location: /SleakFitness/login-page.php?Empty= Please fill both username and password fields!');
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Prepare our SQL statement to prevent SQL injection.

    $query = $conn->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR); 
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if(!$result) {
        header("location: /SleakFitness/login-page.php?invaild=Incorrect Password and Username");
        exit;
    } else {
        if(password_verify($password, $result['pass'])) {

            //Create sessions to know the user is logged in

            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['lastname'] = $result['lastname'];
            $_SESSION['username'] = $result['username'];
            
            echo '<p class="success">Welcome, you are now logged in!</p>';
            header('Location: /SleakFitness/home.php');
        } else {
            header("location: /SleakFitness/login-page.php?invaild=Incorrect Password and Username");
            exit;
        }
    }
}

?>