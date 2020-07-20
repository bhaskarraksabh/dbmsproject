<?php
//data: {real_name:uname ,college_name:clg},
$name=$_POST['real_name'];
$username=$_POST['user'];
$link=mysqli_connect('localhost','root','','Project') or die("database error");
$query="SELECT * FROM Users WHERE user_name='$username'";
$result=mysqli_query($link,$query) or die("query error");
$res=mysqli_num_rows($result);
if($res>0)
{
$query="UPDATE Users SET passkey='$name' WHERE user_name='$username'";
$exe=mysqli_query($link,$query);
if($exe)
echo "YES";
else
echo "NO";
}
else
echo "NO";
?>