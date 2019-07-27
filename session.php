<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
$conn = mysqli_connect("localhost", "root", "", "user"); 
session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User 
$query = "SELECT * from register where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
$login_id = $row['Id'];
$login_gender = $row['gender'];
$login_phonecode = $row['phonecode'];
$login_phone= $row['phone'];
$login_email = $row['email'];

?>