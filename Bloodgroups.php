<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
  <style>
  th  {
      
      padding-left : 50px;
     
  }

  td {
      font-size: 20px;
      font-weight: bold;
    padding : 30px;
     
  }
  .container{
    margin-left:100px;
  }
 </style>
</head>
<body class="body">
<table class="container">
    <thead>
    <tr>
    
    <th><h2>Blood Bank</h2></th>
    <th><h2>Address</h2></th>
    <th><h2>A+</h2></th>
    <th><h2>A-</h2></th>
    <th><h2>B+</h2></th>
    <th><h2>B-</h2></th>
    <th><h2>AB+</h2></th>
    <th><h2>AB-</h2></th>
    <th><h2>O+</h2></th>
    <th><h2>O-</h2></th>
   

  </tr>
  
    </thead>
  <tbody>
    <?php
    $conn = new mysqli('localhost','root','','bloodbank');
  $sql = "SELECT * FROM `Blood Groups`";
    $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
   
    echo "<tr>
    
    
    <td>".$row['Name']."</td>
    <td>".$row['Address']."</td>
    <td>".$row['A+']."</td>
    <td>".$row['A-']."</td>
    <td>".$row['B+']."</td>
    <td>".$row['B-']."</td>
    <td>".$row['AB+']."</td>
    <td>".$row['AB-']."</td>
    <td>".$row['O+']."</td>
    <td>".$row['O-']."</td>
    
  </tr>";  
}
?>
  
  </tbody>
    
</table>
</body>
</html>
