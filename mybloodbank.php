<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
      .two{
 
 background-color:red;
 color:white;
   border: 2px;
   border-radius: 5px;
   margin-top: 25px;
   width: 80px;
   height: 30px;
  border: solid;
}
.three{
 
 text-decoration:none;
 background-color:black;
 color:white;
   border: 2px;
   border-radius: 5px;
   margin-left:150px;
   margin-top: 25px;
   width: 80px;
   height: 50px;
  border: solid;
}
.manage{
 margin-left:500px;
 display:flex;
}
a{
  text-decoration:none;
  color:white;

}
        h1{ 
            margin-top:50px;
            margin-bottom: 50px;
            color:red;
            margin-left: 250px;
        }
        body{

            background-color:wheat;
           padding-left:180px;
         
        }
        span{
          background-color:white;
            font-size:30px;
            color:red;
            border-radius: 15px;
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
        border-radius: 7px;
        background-color: red;
        margin-top:20px;
          margin-right:55px;
          font-weight: bolder;
           width: 40px;
           height:40px;
          color:white;
          border:none;
        font-size: large;
          text-align:center;
          
       }
       .group{
           display:flex;
       }
       button{
    margin-top: 50px;
    margin-left: 400px;
    width: 200px;
    height: 50px;
    background-color: red;
    color: white;
    border-radius: 7px;
    font-size: large;
    font-weight: bold;
}
button:hover{
    background-color: black;
    cursor: pointer;
}

</style>
 
  </head>

<body class="body">






         


   <form action="Updatebloodgroups.php" method="POST">


   <?php
   session_start();
   
    

    if(!isset($_SESSION['name']))
   {
    echo "<h1 style='color:red;'>Please login first</h> <a style='color:blue' href='Login.html'>Login</a>";
    echo "<br> <a style='color:blue' href='Register as.html'><b> Register</b></a>";
       exit;
   }
   else{
   $Name =  $_SESSION['name'];
   $Password = $_SESSION['password'];


$conn = new mysqli('localhost','root','','bloodbank');
$sql = "SELECT * FROM `Blood groups` where `Name`='$Name' AND `Password`='$Password'";

 $result = mysqli_query($conn,$sql);

   $exists = mysqli_num_rows($result);
   if($exists){
 $row = mysqli_fetch_assoc($result);
 
 echo "<tr>
   
<div class='manage'>
<button class='two'> <a  href='logout.php'>Logout</a>  </button>     
<button class='three'> <a href='deleteacount.php'>Delete Acount</a>  </button>   
</div>
 <h1>Available Blood Group Quantities(in Units)</h1>
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
   }
  }
    ?>
   </form>
           
                   
                  
                
                
            
        
</body>
</html>