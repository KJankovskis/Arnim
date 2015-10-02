<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="styleForMain.css" rel="stylesheet" type="text/css">
<link href="styleForProfile.css" rel="stylesheet" type="text/css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#header").load("header.php"); 
  $("#footer").load("footer.php"); 
});
</script> 
</head>
<body>
    <div class="wrap">
        	<div class="header">
                <b id="logo"><a href="profile.php"><img src="atteli/logo.png" alt="logo" height="50" width="250"></a></b>
                <b id="logout"><a href="logout.php"><img src="atteli/logout.png" alt="logout-icon" height="24" width="24"></a></b>
                <b id="user-page"><a href="user-page.php"><img src="atteli/user.png" alt="user-icon" height="24" width="24"></a></b>
            </div>