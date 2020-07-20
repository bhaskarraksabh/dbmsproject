<?php
session_start();
$username=$_POST['text1'];
$passkey=$_POST['text2'];
$link=mysqli_connect('localhost','root','','Project') or die("database error");
$query="SELECT * FROM Users WHERE user_name='$username' AND passkey='$passkey'";
$result=mysqli_query($link,$query) or die("query error");
$res=mysqli_num_rows($result);
if($res==1)
{
echo "YES";
$_SESSION['username']=$username;
}
else
echo "NO";
?>
