<?php
include('config.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$phone = $_POST['phone'];
$hash = password_hash($password, PASSWORD_DEFAULT);

try {
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'INSERT INTO users (username, pass, email, firstname, lastname, phone) 
  VALUES ("'.$username.'", "'.$hash.'" , "'.$email.'","'.$firstname.'", "'.$lastname.'", "'.$phone.'" )';
  

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
  header('Location: /SleakFitness/login-page.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
