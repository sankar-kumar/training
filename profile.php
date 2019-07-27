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
<p><b>ID:</b><?php echo $login_id; ?></p>
<p><b>Gender:</b><?php echo $login_gender; ?></p>
<p><b>Phone code:</b><?php echo $login_phonecode; ?></p>
<p><b>Phone:</b><?php echo $login_phone; ?></p>
<p><b>Email:</b><?php echo $login_email; ?></p>
<p><b><a href="logout.php">Log Out</a></b></p>
</div>
</body>
</html>