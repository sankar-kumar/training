<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: userlogin.php"); // Redirecting To Login Page 
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<div id="profile">
<b>Welcome : <i><?php echo $login_session; ?></i></b>
<b><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>