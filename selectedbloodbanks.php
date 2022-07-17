<?php


    echo "<h1 style='text-align: center;  background-color:#b30202e1; padding:20px; color:wheat;'>
    <marquee behavior='alternate' direction='right' scrollamount='15'>
        SEARCH BLOOD BANKS NEAR YOU</marquee></h1>
    
    <!DOCTYPE html>
    <html lang='en'>
        
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <style>
            body{
                background-color: #ff3232;
                background-size: cover;
                position: sticky;
                margin:0px;
                padding:0px;
            }
            .bloodbank{
                display: flex;
                margin-left: 300px;
                margin-top:40px;
                background-color:rgb(255, 211, 128);
                height: 20vh;
                width: 50%;
                border:1px solid white;
                border-radius: 15px;
               
            }
            .photo{
               text-align: center;
                height: 20vh;
                width: 100px;
                border-radius: 15px;
                border-right: 2px solid white;
            }
            .name{
                margin: 5px;
               text-align: center;
                height: 20vh;
                width: 200px;
                border-radius: 15px;
               color:red;
            }
    
            .logo img{
        margin-left:600px ;
         margin-top: 10px;
       border-radius: 45px;
        height: 100px;
    }
    .bloodgroups{
        
        font-size: 17px;
        border-left: 2px solid white;
        border-top-left-radius: 7%;
      border-bottom-left-radius: 7%;
        padding: 12px;
       
        color: #0a6831;
    }
    p{
        color:black;
        margin-top : 0px;
    }
        </style>
        </head>
        <body>";
    
    


    echo "<div class='logo'>
            <img src='Logo.jpg'>
        </div>";
    $area = $_POST['District'];

$conn = new mysqli('localhost','root','','bloodbank');
$query= "SELECT * from `blood groups` where `Address`= '$area' ";

$result = mysqli_query($conn,$query);
$a = 1;
while($row = mysqli_fetch_assoc($result)){
   echo " <div class='bloodbank'>
    <div class='photo'> </div>
    <div class='name' ><h2><b>". $row['Name']." </b></h2>
       <div style='color:black'> ".$row['Address']."  </div>
    </div>
    <div class='bloodgroups'>
    <p> Available blood groups </p> 
     <b>
     A+ : ".$row['A+']."  &nbsp; &nbsp;  B+ : ".$row['B+']."  &nbsp; &nbsp;   O+ : ".$row['O+']."  &nbsp; &nbsp;   AB+ : ".$row['AB+']."<br> <br>
     A- : ".$row['A-']."  &nbsp; &nbsp;  B- : ".$row['B-']."  &nbsp; &nbsp;   O- : ".$row['O-']." &nbsp; &nbsp;  AB- : ".$row['AB-']."
      </b>
    </div>
  </div> ";
  

}


 echo "  
</body>
</html>";

?>