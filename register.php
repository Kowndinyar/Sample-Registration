<?php
require "connection.php";

if( isset($_POST['Fn']) && isset($_POST['Ln'])  && isset($_POST['username']) && isset($_POST['psw']) ) 
{
$Fn=$_POST['Fn'];
$Ln=$_POST['Ln'];
$un=$_POST['username'];
$psw=$_POST['psw'];
$sql = "INSERT INTO users (first_name, last_name, email,password) VALUES ('$Fn', '$Ln', '$un', '$psw')";
 if (mysqli_query($conn, $sql)) {
 echo "<script type='text/javascript'>alert('Registration Successful'); window.location.href= \"login.php\"</script>";
      } else {
        echo "<script type='text/javascript'>alert('This Email is Already Registered.Try another email'); window.location.href= \"index.php\"</script>";
     }
}
else{
    echo "<script type='text/javascript'>alert('Something went wrong Please try Again'); window.location.href= \"index.php\"</script>";
}


mysqli_close($conn);
?>