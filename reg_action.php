<?php
$name=$_POST['name'];
$uname=$_POST['User'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$mysql=new mysqli("localhost","root","","ddu");
if($name=='' or $uname=='' or $email=='' or $pass=='')
{
	echo "can't insert null value";
}
else{
	if($pass==$cpass)
	{
		$sql="insert into tbl_user (name,username,email,password) values ('$name','$uname','$email','$pass') ";
		echo $sql;
		$mysql->query($sql); 
	}
	else{
		echo"passwords are not matching";
	}
	}
header('Location:log.php');

?>