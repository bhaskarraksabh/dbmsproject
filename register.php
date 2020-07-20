<?php
$username=$_POST['User_name'];
$email=$_POST['e_m_ail'];
$passcode=$_POST['pass_code'];
$link=mysqli_connect('localhost','root','','Project') or die("db error");
$query="SELECT * FROM Users where email='$email'";
$result=mysqli_query($link,$query) or die("query error");
$res=mysqli_num_rows($result);
if($res>0)
echo "Email already exists";
else{
$query="INSERT INTO Users(user_name,email,passkey) VALUES('$username','$email','$passcode')";
$result=mysqli_query($link,$query) or die("query2 error");
echo "YES";
}
?>