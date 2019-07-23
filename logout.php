<?php
session_start(); 
if(session_destroy()) {
    header("Location: userlogin.php"); // Redirecting To Home Page  
  }
?>