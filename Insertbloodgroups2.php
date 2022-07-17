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
            font-size:30px;
            color:red;
            background-color:#ffd68be1;
           text-align:left;
            font-weight: bold;
            padding: 9px;
            background-color:;
            height: 100px;
            width: 100px;
           text-align:right;
            margin-left: 100px;
          margin-bottom: 30px;
        }
       .data{
        background-color:#f3bd59e1;
        margin-top:20px;
          margin-right:55px;
          font-weight: bold;
           width: 40px;
           height:40px;
          color:black;
          border:none;
        font-size: large;
          text-align:center;
          
       }
       .group{
           display:flex;
       }
       button{
    
    margin-left: 400px;
    width: 200px;
    height: 40px;
    background-color: rgb(230, 157, 0);
    color: black;
    border-radius: 7px;
    font-size: large;
    font-weight: bold;
}
button:hover{
    background-color: gray;
    cursor: pointer;

}
.a{
  background-color:white;
  margin-left:900px;
 
}
a{
  color:white;
  text-decoration: none;
}

.two{
  margin-left:1000px;
  background-color:black;
  color:white;
    border: 2px;
    border-radius: 5px;
    margin-top: 30px;
    width: 80px;
    height: 30px;
   border: solid;
}

</style>

  </head>

<body class="body">

<button class="two"> <a href="logout.php">Logout</h2>  </button>     

<button class='one'>
            <a  href='homepage.php'> Home </a>
              </button>    


<h1>Available Blood Group Quantities(in lit.)</h1>


         


   <form action="Updatebloodgroups.php" method="POST">


   <?php
   session_start();
  
$Name =  $_SESSION['name'];
$Password = $_SESSION['password'];


$A = $_POST['A+'];
$B = $_POST['A-'];
$C = $_POST['B+'];
$D = $_POST['B-'];
$E = $_POST['AB+'];
$F = $_POST['AB-'];
$G = $_POST['O+'];
$H = $_POST['O-'];


$conn = new mysqli('localhost','root','','bloodbank');
$sql="UPDATE `blood groups` SET `A+` = '$A' ,`A-` = '$B',`B+` = '$C', `B-` = '$D', `AB+`='$E',`AB-`='$F',`O+`='$G',`O-`='$H' WHERE Name = '$Name' AND Password = '$Password'";

mysqli_query($conn,$sql);

$sql = "SELECT * FROM `blood groups` where `Name`='$Name' AND `Password`='$Password'";
  $result = mysqli_query($conn,$sql);


  $row = mysqli_fetch_assoc($result);
  
  echo "<tr>


            <div class='group'>
                <span>A + <input value='".$row['A+']."' class='data' disabled >  </span>
                <span>A - <input value='".$row['A-']."' class='data' disabled >  </span>
            
            
                <span>B + <input value='".$row['B+']."' class='data' disabled >  </span>
                <span>B - <input value='".$row['B-']."' class='data' disabled >  </span>
            </div>
            <div class='group'>
                <span>AB + <input value='".$row['AB+']."' class='data' disabled >  </span>
                <span>AB - <input value='".$row['AB-']."' class='data' disabled > </span>
            
            
                <span>O + <input value='".$row['O+']."' class='data' disabled >  </span> 
                <span>O - <input value='".$row['O-']."' class='data' disabled >  </span>
            </div>
                   
                   <button>UPDATE</button> ";
    ?>
   </form>
                  
                
      
            
        
</body>
</html>
