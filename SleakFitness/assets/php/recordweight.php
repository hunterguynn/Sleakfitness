<?php 
include('config.php');
session_start();


/* Setting variables */
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$username = $_SESSION['username'];
$weight = $_POST['weight'];


/* Fetching User ID */

$sql = "SELECT id, username FROM users";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
  // output data of each row
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    if($row["username"] == $_SESSION['username']){
        $id = $row["id"]; 
    }
  }
} else {
  echo "User not found";
}

/* Inserting into weight table */
try {
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'INSERT INTO weight (id, user, userweight) 
  VALUES ("'.$id.'", "'.$username.'" , "'.$weight.'")';
  

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
  header('Location: /SleakFitness/record-data.php?Success= Recorded Successfully!');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>