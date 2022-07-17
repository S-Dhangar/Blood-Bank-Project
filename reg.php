<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<div class="php">
<?php

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];

$Phone = $_POST['Phone'];
$Password = $_POST['Password'];
$Confirm = $_POST['Confirm'];
$conn = new mysqli('localhost','root','','bloodbank');
if($conn->connect_error){
    die('Connection Failed : '. $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(FirstName,LastName,Phone,Email,Password,Confirm)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$FirstName,$LastName,$Phone,$Email,$Password,$Confirm);
    $execval = $stmt->execute();
	echo $execval;
   
    echo "<h1 >Registration Successfull... go to <a href='homepage.html' style=\"font-color: black;\">homepage</a>";

    $stmt->close();
    $conn->close();
}
?>
</div>
<body class="body">
    <img src="Logo.jpg" alt="">
    <h1>Register</h1>
    <div class="registration">
        <form action="reg.php" method="POST" autocomplete="off">
            <input type="text" name="FirstName" placeholder="Type your firstname">
            <input type="text" name="LastName" placeholder="Type your firstname">
            <input type="text" name="Phone" placeholder="Type phone number">
            <input type="text" name="Email" placeholder="Type email">
            
            <input type="text" name="Password" placeholder="Type password" >
            <input type="text" name="Confirm" placeholder="confirm password">
       <button><a href="Bloodbank.html"></a>Submit</a></button>
        </form>
    </div>
</body>
</html>
