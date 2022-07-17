<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
        h1{ 
            margin-top:100px;
            margin-bottom: 50px;
            color:red;
            margin-left: 250px;
        }
        body{

            background-color:wheat;
           padding-left:180px;
         
        }
        span{
            border-radius:8px;
            background-color:white;
            font-size: x-large;
            font-weight: bolder;
            padding: 10px;
            text-align: center;
            height: 50px;
            width: 300px;
            border: 2px solid red;
            margin-left: 100px;
          margin-bottom: 20px;
        }
       input{
   
    margin-left: 50px;
    background-color: rgb(247, 223, 12)
    padding: 2px;
    font-size: large;
   width:40px;
    height: 40px;
   border-radius: 3px;
       }
       .group{
       
           color:red;
           display:flex;
       }
       button{
         
    margin-top: 20px;
    margin-left: 600px;
    width: 200px;
    height: 50px;
    background-color: rgb(230, 157, 0);
    color: black;
    border-radius: 7px;
    font-size: large;
    font-weight: bold;
}
button:hover{
    background-color: red;
    cursor: pointer;
}
}
</style>
   
 


  </head>

<body class="body">
<h1>Insert Blood Group Quantities(in Unit.)</h1>
   <form action="mybloodbank2.php" method="POST">
 

       <?php

       session_start(); 
$Name =  $_SESSION['name'];
$Password=$_SESSION['password'];

$conn = new mysqli('localhost','root','','bloodbank');
      
     
         
 

$sql = "SELECT * FROM `Blood groups` where `Name`='$Name' AND `Password`='$Password'";
  $result = mysqli_query($conn,$sql);


  $row = mysqli_fetch_assoc($result);
  
echo "
<div class='group'>
<span>A +  <input type='text' value='".$row['A+']."' name='A+'></span>
<span>A -  <input type='text'  value='".$row['A-']."' name='A-'></span>
</div>
<div class='group'>
<span>B +  <input type='text' value='".$row['B+']."' name='B+'></span>
<span>B -  <input type='text' value='".$row['B-']."' name='B-'></span>
</div>
<div class='group'>
<span>AB +  <input type='text' value='".$row['AB+']."' name='AB+'></span>
<span>AB -  <input type='text' value='".$row['AB-']."' name='AB-'></span>
</div>
<div class='group'>
<span>O +   <input type='text' value='".$row['O+']."' name='O+'></span> 
<span>O -  <input type='text' value='".$row['O-']."' name='O-'></span>
</div>
   
   <button>SAVE</button>";
 
       ?>    
      
   </form>
           
                   
                  
                
                
            
        
</body>
</html>