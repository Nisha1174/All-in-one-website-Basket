<?php
$con=mysqli_connect('localhost','root',' ',projects);
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $query="INSERT INTO login(username,password) VALUES('$name','$password')";
    $run=mysqli_query($con,$query);
    echo"registered Successfully";

}
?>


