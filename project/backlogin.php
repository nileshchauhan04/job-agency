<?php require_once("connect.php") ?>

<?php
if(isset($_POST['name'])){
    $email = $_POST['name'];
    $query = " insert into login (name)
    values ('$email') ";
    values
  }
  
  if(mysqli_query($con,$query)) {
    
     echo "<script> alert('Success! Thank you for Subscribing Us.'); </script>";

  } else {
  
    echo("Error description: ". mysqli_error($con));
    echo "<br>".$query;
    
  }