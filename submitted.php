<?php
$code=$_POST['text1'];
$link=mysqli_connect('localhost','root','','Project')or die("database connection error");
$query="SELECT COUNT(*) FROM Submissions";
$res=mysqli_query($link,$query) or die("query error");
$res=$res+1;
$query="INSERT INTO Submissions(sub_id,sumitted_code) VALUES('$res','$code')";
$result=mysqli_query($link,$query) or die("query error");
?>
