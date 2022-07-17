<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
<style>
       
        body{
              margin-top : 100px;
            background-color:wheat;
           padding-left:180px;
         
        }
        span{
            font-size:30px;
            color:red;
            border-radius:15px;
            background-color:white;
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
        border-radius:7px;
        background-color:red;
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
  
       h1{ 
            margin-top: 50px;
           
            color:red;
            margin-left: 350px;
        }
        h2{
            margin-bottom: 50px;
            margin-left: 390px;
            color:rgb(172, 54, 0);
        }
     


</style>
</head>
<body>

<?php
$query1 = $_POST['query'];
$conn = new mysqli('localhost','root','','bloodbank');
$query = "SELECT * FROM `blood groups` WHERE `name` = '$query1'";
$result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);
    if($row){
    echo "  <thead> <h1>Blood Bank - ".$row['Name']." </h1><h2>Location - ".$row['Address']." </h2> </head>    <tr>
    
    
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
                </div>";

}
else{
    echo "<h1> Sorry data not found </h1>..... <a href='homepage.php'>try again</a>";
}

?>
</body>
</html>