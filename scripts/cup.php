<?php
session_start();
$data = parse_ini_file("../config.ini");
$host=$data[host];
$user=$data[username];
$password=$data[password];
$db=$data[dbname];
$connection= mysqli_connect($host, $user, $password, $db);
if($connection === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$a=$_SESSION['email'];
$pwd=mysqli_real_escape_string($connection, $_POST['password']);
$npwd=mysqli_real_escape_string($connection, $_POST['password1']);
$sql="SELECT password from app_user where email='$a'";
$query=mysqli_query($connection,$sql);
$p=mysqli_fetch_row($query);
if($pwd==$p[0])
{
mysqli_query($connection,"UPDATE app_user set password='$npwd'");
header("Location:../index.html");
session_destroy();
}
else{
header("Location: ecpd.php");
}
mysqli_close($connection);
?>
