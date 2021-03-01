<?php
require("db.php");
$email=$_POST['email'];
$password=$_POST['pass'];

$sql="select * from tbl_user where email='$email' and password='$password'";
if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0)
{
echo "successfully logged in";
mysqli_free_result($result);
}

else{
echo "invalid username or password";
}
}

mysqli_close($link);
?>

