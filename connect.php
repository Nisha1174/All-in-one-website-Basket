<?php
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['lastname'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  $Gender= $_POST['r1'];

  // Database connection

  $conn = mysqli('localhost','root','','test');
  if($conn -> connect_error){
    die('connection Failed '.$conn->connect_error);
  } else{
    $stmt = $conn->prepare("insert into registerf(FirstName,LastName,Gender,Password,Email) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssss" , $FirstName, $LastName ,$Gender , $Password,$Email);
    $stmt->execute();
    echo "registration successfully.....";
    $stmt->close();
    $conn->close();
  }
  ?>