<head>
   <style>
   table{
      font-family= arial, sans-serif;
      border-collapse=collapse;
      width=100%}
   td,th{
      border:ipx solid #dddddd;
      text-align:center;
      padding:8px;
   }
   tr:nth-child(even){
      background-color: #dddddd;
   }
      </style>
</head>

<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];
if (!empty($username) || !empty($password) || !empty($gender) || !empty($phoneCode) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "youtube";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into register (username, password, gender, phoneCode, phone) values(?, ?, ?, ?, ?)";
     
     if ($INSERT) {
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssii", $username, $password, $gender, $phoneCode, $phone);
        $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Not registered";
     }
     $sql="SELECT Id,username,password,gender,phonecode,phone FROM register";
     $result=$conn->query($sql);

     if($result->num_rows>0){
        echo "<table>";
        while($row=$result->fetch_assoc()){
           echo "<tr><td> Id:" .$row['Id']."</td><td> username:" .$row['username']."</td><td> password:" .$row['password']."</td><td> gender:" .$row['gender']."</td><td> phonecode:" .$row['phonecode']."</td><td> phone:" .$row['phone']."</td></tr>";          
        }
        echo "</table>";
     }
     else {
        print "0 values";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
 header("refresh:2;url:form.html");
}
?>