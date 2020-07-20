<?php
session_start();
$code=$_POST['text1'];
$lang=$_POST['text2'];
$filetoopen=$_POST['text3'];
$location=$_SERVER['DOCUMENT_ROOT'];
$unmae=$_SESSION['username'];
$query="UPDATE Users SET Submissions=Submissions+1 WHERE user_name='$unmae'";
$link=mysqli_connect('localhost','root','','Project') or die("database error");
$result=mysqli_query($link,$query) or die("query error");
if($lang=='C')
{
$myfile=fopen("{$location}/pages/Problems/{$filetoopen}/textfile.c","w+") or die("unable to open1");
$errorfile=fopen("{$location}/pages/Problems/{$filetoopen}/error.txt","w+") or die("unable to open2");
chmod( $myfile,'0755' );
chmod( $errorfile,'0755');
fwrite($myfile,$code);
$link=mysqli_connect('localhost','root','','Project')or die("database connection error");
$query="SELECT COUNT(*) FROM Submissions";
$res=mysqli_query($link,$query) or die("query error1");
$query="INSERT INTO Submissions(submitted_code) VALUES('$code')";
$result=mysqli_query($link,$query) or die("query error2");
shell_exec("gcc {$location}/pages/Problems/{$filetoopen}/textfile.c -o {$location}/pages/Problems/{$filetoopen}/first 2> {$location}/pages/Problems/{$filetoopen}/error.txt");
$error=file_get_contents("{$errorfile}");
$in=fopen("in.txt","r");
$out=fopen("out.txt","r");
$var1=$_SESSION['username'];
if($error=='')
{
    shell_exec("{$location}/pages/Problems/{$filetoopen}/./first<{$location}/pages/Problems/{$filetoopen}/in.txt 1> {$location}/pages/Problems/{$filetoopen}/out2.txt");
    shell_exec("diff -w {$location}/pages/Problems/{$filetoopen}/out.txt {$location}/pages/Problems/{$filetoopen}/out2.txt 1>{$location}/pages/Problems/{$filetoopen}/difference.txt");
    $differ=file_get_contents("{$location}/pages/Problems/{$filetoopen}/difference.txt");
    if($differ=='')
    {
       $query="UPDATE Users SET Solved=Solved+1 WHERE user_name='$var1'";
       $result=mysqli_query($link,$query) or die("query error");
       $query="UPDATE ContestProblem SET number_of_ac=number_of_ac+1";
       $result=mysqli_query($link,$query) or die("query error");
    print "ACCEPTED";

    }
    else
    print "Wrong Answer";
}
else
echo "compilation Error '$error'";
fclose("textfile.c");
fclose("log.txt");
}
else if($lang=='C++')
{
    $myfile=fopen("{$location}/pages/Problems/{$filetoopen}/textfile.cpp","w+") or die("unable to open");
    $errorfile=fopen("{$location}/pages/Problems/{$filetoopen}/error.txt","w+") or die("unable to open");
    chmod( $myfile,'0755' );
    chmod( $errorfile,'0755');
    fwrite($myfile,$code);
    $link=mysqli_connect('localhost','root','','Project')or die("database connection error");
    $query="SELECT COUNT(*) FROM Submissions";
    $res=mysqli_query($link,$query) or die("query error1");
    $query="INSERT INTO Submissions(submitted_code) VALUES('$code')";
    $result=mysqli_query($link,$query) or die("query error2");
    shell_exec("g++ {$location}/pages/Problems/{$filetoopen}/textfile.cpp -o {$location}/pages/Problems/{$filetoopen}/first 2> {$location}/pages/Problems/{$filetoopen}/error.txt");
    $error=file_get_contents("error.txt");
    $in=fopen("in.txt","r");
    $out=fopen("out.txt","r");
    if($error=='')
    {
        shell_exec("{$location}/pages/Problems/{$filetoopen}/./first<{$location}/pages/Problems/{$filetoopen}/in.txt 1> {$location}/pages/Problems/{$filetoopen}/out2.txt");
        shell_exec("diff -w {$location}/pages/Problems/{$filetoopen}/out.txt {$location}/pages/Problems/{$filetoopen}/out2.txt 1>{$location}/pages/Problems/{$filetoopen}/difference.txt");
        $differ=file_get_contents("{$location}/pages/Problems/{$filetoopen}/difference.txt");
        if($differ=='')
        {
        $query="UPDATE Users SET Solved=Solved+1 WHERE user_name='$var1'";
       $result=mysqli_query($link,$query) or die("query error");
       $query="UPDATE ContestProblem SET number_of_ac=number_of_ac+1";
       $result=mysqli_query($link,$query) or die("query error");
        print "ACCEPTED";
        }
        else
        print "Wrong Answer";
    }
    else
    echo "compilation Error '$error'";
    fclose("textfile.c");
    fclose("log.txt");  
}
else if($lang=="JAVA")
{
$myfile=fopen("{$location}/pages/Problems/{$filetoopen}/Solution.java","w+") or die("unable to open");
$errorfile=fopen("{$location}/pages/Problems/{$filetoopen}/error.txt","w+") or die("unable to open");
chmod( $myfile,'0755' );
chmod( $errorfile,'0755');
fwrite($myfile,$code);
$link=mysqli_connect('localhost','root','','Project')or die("database connection error");
$query="SELECT COUNT(*) FROM Submissions";
$res=mysqli_query($link,$query) or die("query error1");
$query="INSERT INTO Submissions(submitted_code) VALUES('$code')";
$result=mysqli_query($link,$query) or die("query error2");
shell_exec("javac {$location}/pages/Problems/{$filetoopen}/Solution.java -o {$res} 2> {$location}/pages/Problems/{$filetoopen}/error.txt");
$error=file_get_contents("error.txt");
$in=fopen("in.txt","r");
$out=fopen("out.txt","r");
if($error=='')
{
    shell_exec("java {$location}/pages/Problems/{$filetoopen}/{$res}<{$location}/pages/Problems/{$filetoopen}/in.txt 1> {$location}/pages/Problems/{$filetoopen}/out2.txt");
    shell_exec("diff -w {$location}/pages/Problems/{$filetoopen}/out.txt {$location}/pages/Problems/{$filetoopen}/out2.txt 1>{$location}/pages/Problems/{$filetoopen}/difference.txt");
    $differ=file_get_contents("{$location}/pages/Problems/{$filetoopen}/difference.txt");
    if($differ=='')
    {
    $query="UPDATE Users SET Solved=Solved+1 WHERE user_name='$var1'";
    $result=mysqli_query($link,$query) or die("query error");
    $query="UPDATE ContestProblem SET number_of_ac=number_of_ac+1";
    $result=mysqli_query($link,$query) or die("query error");
    print "ACCEPTED";
    }
    else
    print "Wrong Answer";
}
else 
echo "compilation Error '$error'";
fclose("textfile.c");
fclose("log.txt");
}
?>
