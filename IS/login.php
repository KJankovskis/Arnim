<?php
session_start(); // Sāk sesiju
$error=''; // Mainīgais erroram
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// definē mainīgos
$username=$_POST['username'];
$password=$_POST['password'];

// Izveido savienojumu ar serveri
$connection = mysql_connect("localhost", "root", "");
// Sis rindas ir lai aizsargatu informaciju datubaze
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// izvelas datubazi
$db = mysql_select_db("mydb", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from persona where parole='$password' AND lietotajvards='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; 
header("location: profile.php"); // Pārslēdzas uz citu lapu
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Ja neizdodas pieslēgties beidz sesiju
}
}
?>