<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body class="body">
    <img src="Logo.jpg" alt="">
    <h1>Register</h1>
    <div class="registration">
    <form name="myform" action="Donor_reg.php" method="POST" autocomplete="off" onsubmit="return validateform()">
            <input type="text" name="firstname" placeholder="Type your Firstname">
            <input type="text" name="lastname" placeholder="Type your Lastname">
            <input type="text" name="Phone" placeholder="Type phone number">
            <input type="text" name="Email" placeholder="Type email">
            
            <input type="text" name="Password" placeholder="Type password" >
            <input type="text" name="Confirm" placeholder="confirm password">
       <button>Submit</button>
        </form>
    </div>
    <script>
        function validateform(){
            var name=document.myform.firstname.value;
            var password=document.myform.Password.value;
            var phone=document.myform.Phone.value;
            var email=document.myform.Email.value;
            var attherat=email.indexOf("@");
            var attherat=email.lastIndexOf(".");
            var lastnames= document.myform.lastname.value;
            if(name==null || name==""){
                alert("Name can't be blank");
                return false;
            }
            else if(!isNaN(name)){
                alert("invalid username");
                return false;
            }
            else if((password==null) || (password=="")){
                alert("please create password for login purpose");
                return false;
            }
            else if(password.length<6){
                alert("password must contain atleast 6 characters");
                return false;
            }
            else if(phone == null || phone=="" ){
                alert("Enter phone number");
                return false;
            }
            
            else if(phone.length<10 || phone.length>10 || isNaN(phone)){
                alert("Invalid Phone no.");
                return false;
            }
           
            else if((attherat<1) || (dot<(attherat+2)) || ((dot+2) >= email.length)){
                alert("Please provide a valid email address");
                return false;
            }
            
           
           
            
        }
          </script>
</body>
<div class="php">
<?php
session_start();
$_SESSION['name']= $_POST['firstname'];
$_SESSION['password']= $_POST['Password'];
$Name = $_POST['firstname'];
$lastname=$_POST['lastname'];

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Confirm = $_POST['Confirm'];


    

$conn = new mysqli('localhost','root','','bloodbank');
if($conn->connect_error){
    die('Connection Failed : '. $conn->connect_error);
}
else{
    $query3 = "SELECT * from `donor register` where `FirstName` = '$Name' AND `Password` = '$Password'";
    $result=mysqli_query($conn,$query3);
    $exists=mysqli_num_rows($result);
    
    if($exists){
        $exists = true;
    }
    else{
        $exists= false;
    }
    if($Password == $Confirm && $exists == false){

    $query1 = "INSERT INTO `donor register`(`Id`,`FirstName`, `LastName`, `Email`, `Password`, `Confirm`) 
    VALUES ('','$Name','$lastname','$Email','$Password','$Confirm')";
    
    $bl1 = mysqli_query($conn,$query1);
    
    if($bl1){
      
        echo "<h1 >Registration Successfull... go to <a href='Donor_homepage.php' style=\"font-color: black;\">Go to homepage</a>";
    }
    else{
        echo " <br> sorry can't inserted data ";
    }
   
   
    
    $conn->close();
}
else if($exists == true){
    echo "<h1 style='color:red; background-color:white'>User alresdy exists</h>";
}
else if($Password != $Confirm){
    echo "<h1 style='color:red; background-color:white'>Password and Confirm password did not match</h1>";
}
}

?>
</div>

</html>
