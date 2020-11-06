<?php
require "connection.php";

if( isset($_GET['username']) && isset($_GET['psw']) ) 
{
$un=$_GET['username'];
$psw=$_GET['psw'];
$sql = "SELECT * FROM users WHERE Email='$un' And password='$psw'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    
  
    echo "<script type='text/javascript'>alert('Login Successful');window.location.href= \"das.php\" </script>";
    
  }
} else {
  $value="Invalid details";
  echo "<script type='text/javascript'>alert('$value'); window.location.href= \"login.php\"</script>";
}
}
else{
  
  $value="Something Went Wrong"; 
  echo "<script type='text/javascript'>alert('$value');window.location.href= \"login.php\" </script>";
 
  
}




mysqli_close($conn);

?>