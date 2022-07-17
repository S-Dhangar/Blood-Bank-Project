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
    <form name="myform" action="Blood_bank_reg.php" method="POST" autocomplete="off" onsubmit="return validateform()">
            <input type="text" name="Name" placeholder="Blood Bank name">
            <input type="text" name="Address" placeholder="Address">
            
            <input type="text" name="Email" placeholder="Email Address">
            
            <input type="text" name="Password" placeholder="Type password" >
            <input type="text" name="Confirm" placeholder="confirm password">
       <button><a href="Bloodbank.html"></a>Submit</a></button>
        </form>
    </div>
    <script>
        function validateform(){
            var name=document.myform.Name.value;
            var Address=document.myform.Address.value;
            var email=document.myform.Email.value;
            var password=document.myform.Password.value;
            var attherat=email.indexOf("@");
            var attherat=email.lastIndexOf(".");
            if(name==null || name==""){
                alert("Name can't be blank");
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
            
            
            else if(Address == null || Address=="" ){
                alert("please enter Address");
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
$_SESSION['name']= $_POST['Name'];
$_SESSION['password']= $_POST['Password'];
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Confirm = $_POST['Confirm'];


    

$conn = new mysqli('localhost','root','','bloodbank');
if($conn->connect_error){
    die('Connection Failed : '. $conn->connect_error);
}
else{
    $query3 = "SELECT * from `blood banks` where `Name` = '$Name' AND `Password` = '$Password'";
    $result=mysqli_query($conn,$query3);
    $exists=mysqli_num_rows($result);
    
    if($exists){
        $exists = true;
    }
    else{
        $exists= false;
    }
    if($Password == $Confirm && $exists == false){

    $query1 = "INSERT INTO `blood banks`(`Ref No.`, `Name`, `Address`, `Email`, `Password`, `Confirm`) 
    VALUES ('','$Name','$Address','$Email','$Password','$Confirm')";
    $query2 = "INSERT INTO `blood groups`(`Blood Bank ID`, `Name`, `Address`,`Password`) 
    VALUES ('','$Name','$Address','$Password')";
    $bl1 = mysqli_query($conn,$query1);
    $bl2= mysqli_query($conn,$query2);
    if($bl1){
      
        echo "<h1 >Registration Successfull... go to <a href='Insertbloodgroups.php' style=\"font-color: black;\">Insert Blood Groups data</a>";
    }
    else{
        echo " <br> sorry couldn't inserted data ";
    }
   
    if($bl2){
      
       
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
