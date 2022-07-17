<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
    <style>
        input{
            display: list-item;
            margin-left:450px;
        }
    </style>
</head>
<body class="body">
    <img src="Logo.jpg" alt="" style="margin-top:60px; margin-left:600px">
    <h1 style="color:white; margin-left:600px" >Login</h1>
    <div class="registration">
    <form name="myform" action="homepage.php" method="POST" autocomplete="off" onsubmit="return validateform()">
            <input style="width:400px" type="text" name="Name" placeholder="Blood Bank name"> 
            <input style="width:400px" type="text" name="Password" placeholder="Type password" >
           
       <button style="margin-left:650px">Login</button>
        </form>
    </div>
    <script>
  function validateform(){
      var name=document.myform.Name.value;
      var password=document.myform.Password.value;
      if(name==null || name==""){
          alert("Name can't be blank");
          return false;
      }
      else if(password.length<6){
          alert("Password must be atleast 6 characters");
          return false;
      }
  }
    </script>
</body>

</html>
