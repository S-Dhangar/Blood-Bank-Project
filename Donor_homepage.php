<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Blood Bank</title>
</head>

<body>
    <?php
      session_start();
     
     
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['name']= $_POST['Name'];
    $_SESSION['password']= $_POST['Password'];
   $Name=$_POST['Name'];
   $Password=$_POST['Password'];
  
      
    $conn = new mysqli('localhost','root','','bloodbank');
    $sql = "SELECT * FROM `donor register` where `FirstName`='$Name' AND `Password`='$Password'";
   
    
      $result = mysqli_query($conn,$sql);
    
        $exists = mysqli_num_rows($result);
        if($exists){


    echo "<nav class='navbar background'>
        <div class='logo'>
           <a href='Donor_homepage.php'> <img src='Logo.jpg'></a> 
        </div>
        <ul>
            <li><a href='Donor_homepage.php'>Home</a></li>
            <li><a href='Bloodbankinterface.php'>Blood Banks</a></li>
            <li><a href='mybloodbank.php'>My donation</a></li>
            <li><a href='About_section.html'>About</a></li>
        </ul>
        <form action='donor_search.php' method='post'>
            <input type='text' placeholder='search blood group' name='query'>
             <button class='one'>
            Search
             </button>
             
 
        </form>
        <button class='one'>
        <a href='logout.php'> Logout</a>
              </button>
    </nav>
    <section class='background firstsection'>

        <div class='firsthalf'>
          <div id='heading'>Search Blood Bank by your location</div>  
            <form action='selectedbloodbanks.php' method='POST' autocomplete='off'>
                <label  for='District'>Choose city &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;:</label>
           <select name='District' id='District' >
               <option value='Sehore'>Bhopal</option>
               <option value='Bhopal'>Sehore</option>
               <option value='Indore'>Indore</option>
               <option value='Jabalpur'>Gwalior</option>
               <option value='Satna'>Jabalpur</option>
               <option value='Gwalior'>Shajahpur</option>
               <option value='Shajapur'>Satna</option>
           </select>
           <label  for='District'>Choose &#160;Location:</label>
           <select name='District' id='District' >
            <option >New Market</option>
            <option >MP Nagar</option>
            <option >Saket Nagar</option>
            <option va>Habibganj</option>
            <option >Jawahar chowk</option>
            <option >Nehru Nagar</option>
            <option ></option>
        </select>
           <button id='location' >Search</button>
            </form>

        </div>
        <div class='secondhalf'>
        <img src='Logo.jpg'>
        <p class='big text'>Donate Blood, Save Life</p>
        <p class='small text'>
            Search your blood group in nearby blood banks.
        </p>
        
    </div>

</section>
<section class='secondsection'>
    <div class='a1'>
        <p class='big2'>Search Blood Banks</p>


        <p class='small2'>

            Here you can find activities
            to practise your reading skills.
            Reading will help you to improve your
            understanding of the language and build your vocabulary.

            The self-study lessons in this section are
            written and organised according to
            the levels of the Common European Framework
            of Reference for languages (CEFR).
            There are different types of texts and interactive exercises that practise the reading skills you need
            to do
            well in your studies, to get ahead at work and to communicate in English in your free time.

            Take our free online English test to find out which level to choose. Select your level, from beginner
            (CEFR
            level A1) to advanced (CEFR level C1), and improve your reading skills at your own speed, whenever it's
            convenient for you.
        </p>


    </div>
    <div class='a2'>
        <img src='one.jpg'>
    </div>
</section>
<section class='secondsection'>
    <div class='b1'>


        <img src='two.jpg'>
    </div>
    <div class='b2'>
        <p class='big2'>Search Your Blod Group</p>


        <p class='small2'>

            Here you can find activities
            to practise your reading skills.
            Reading will help you to improve your
            understanding of the language and build your vocabulary.

            The self-study lessons in this section are
            written and organised according to
            the levels of the Common European Framework
            of Reference for languages (CEFR).
            There are different types of texts and interactive exercises that practise the reading skills you need
            to do
            well in your studies, to get ahead at work and to communicate in English in your free time.

            Take our free online English test to find out which level to choose. Select your level, from beginner
            (CEFR
            level A1) to advanced (CEFR level C1), and improve your reading skills at your own speed, whenever it's
            convenient for you.

        </p>
    </div>
</section>
<section class='secondsection'>
    <div class='a1'>
        <p class='big2'>Donate Blood</p>


        <p class='small2'>

            Here you can find activities
            to practise your reading skills.
            Reading will help you to improve your
            understanding of the language and build your vocabulary.

            The self-study lessons in this section are
            written and organised according to
            the levels of the Common European Framework
            of Reference for languages (CEFR).
            There are different types of texts and interactive exercises that practise the reading skills you need
            to do
            well in your studies, to get ahead at work and to communicate in English in your free time.

            Take our free online English test to find out which level to choose. Select your level, from beginner
            (CEFR
            level A1) to advanced (CEFR level C1), and improve your reading skills at your own speed, whenever it's
            convenient for you.
        </p>


    </div>
    <div class='a2'>
        <img src='three.jpg'>
    </div>
</section>

<div class='last'>
    <h1>Resgister </h1>
    <input type='text' placeholder='Enter your name'>
    <input type='text' placeholder='Enter Email'>
    <input type='text' placeholder='Enter Phone no.'>
    <input type='text' placeholder='Enter Address'>

    <button class='lastbutton'>Submit</button>
</div>";

        }
        else{

           
    echo "<h1 style='color:red;'>Username Password not found</h> <a href='Donor_reg.html'> Register</a>";
    echo "<br>again try to <a href='Donor_login.php'><b>Login</b></a>";
    
            session_destroy();
            exit;
        }
   }

   else if($_SESSION['name'] != true)
   {
       header("location: First page.html");
       exit;
   }
   


   else{
      


   echo "<nav class='navbar background'>
       <div class='logo'>
          <a href='Donor_homepage.php'> <img src='Logo.jpg'></a> 
       </div>
       <ul>
           <li><a href='Donor_homepage.php'>Home</a></li>
           <li><a href='Bloodbankinterface.php'>Blood Banks</a></li>
           <li><a href='mybloodbank.php'>My donation</a></li>
           <li><a href='About_section.html'>About</a></li>
       </ul>
       <form action='donor_search.php' method='post'>
           <input type='text' placeholder='search blood group' name='query'>
            <button class='one'>
           Search
            </button>
           
       </form>
       <button class='one'>
        <a href='logout.php'> Logout</a>
              </button>
   </nav>
   <section class='background firstsection'>

       <div class='firsthalf'>
         <div id='heading'>Search Blood Bank by your location</div>  
           <form action='selectedbloodbanks.php' method='POST' autocomplete='off'>
               <label  for='District'>Choose City &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;:</label>
          <select name='District' id='District' >
          <option value='Sehore'>Bhopal</option>
          <option value='Bhopal'>Sehore</option>
          <option value='Indore'>Indore</option>
          <option value='Jabalpur'>Gwalior</option>
          <option value='Satna'>Jabalpur</option>
          <option value='Gwalior'>Shajahpur</option>
          <option value='Shajapur'>Satna</option>
      </select>
      <label  for='District'>Choose &#160;Location:</label>
      <select name='District' id='District' >
       <option >New Market</option>
       <option >MP Nagar</option>
       <option >Saket Nagar</option>
       <option >Habibganj</option>
       <option >Jawahar chowk</option>
       <option >Nehru Nagar</option>
       <option >Neelbad</option>
   </select>
          <button id='location' >Search </button>
           </form>

       </div>
       <div class='secondhalf'>
           <img src='Logo.jpg'>
           <p class='big text'>Donate Blood, Save Life</p>
           <p class='small text'>
               Search your blood group in nearby blood banks.
           </p>
           
       </div>

   </section>
   <section class='secondsection'>
       <div class='a1'>
           <p class='big2'>Search Blood Banks</p>


           <p class='small2'>

               Here you can find activities
               to practise your reading skills.
               Reading will help you to improve your
               understanding of the language and build your vocabulary.

               The self-study lessons in this section are
               written and organised according to
               the levels of the Common European Framework
               of Reference for languages (CEFR).
               There are different types of texts and interactive exercises that practise the reading skills you need
               to do
               well in your studies, to get ahead at work and to communicate in English in your free time.

               Take our free online English test to find out which level to choose. Select your level, from beginner
               (CEFR
               level A1) to advanced (CEFR level C1), and improve your reading skills at your own speed, whenever it's
               convenient for you.
           </p>


       </div>
       <div class='a2'>
           <img src='one.jpg'>
       </div>
   </section>
   <section class='secondsection'>
       <div class='b1'>


           <img src='two.jpg'>
       </div>
       <div class='b2'>
           <p class='big2'>Search Your Blod Group</p>


           <p class='small2'>

               Here you can find activities
               to practise your reading skills.
               Reading will help you to improve your
               understanding of the language and build your vocabulary.

               The self-study lessons in this section are
               written and organised according to
               the levels of the Common European Framework
               of Reference for languages (CEFR).
               There are different types of texts and interactive exercises that practise the reading skills you need
               to do
               well in your studies, to get ahead at work and to communicate in English in your free time.

               Take our free online English test to find out which level to choose. Select your level, from beginner
               (CEFR
               level A1) to advanced (CEFR level C1), and improve your reading skills at your own speed, whenever it's
               convenient for you.

           </p>
       </div>
   </section>
   <section class='secondsection'>
       <div class='a1'>
           <p class='big2'>Donate Blood</p>


           <p class='small2'>

               Here you can find activities
               to practise your reading skills.
               Reading will help you to improve your
               understanding of the language and build your vocabulary.

               The self-study lessons in this section are
               written and organised according to
               the levels of the Common European Framework
               of Reference for languages (CEFR).
               There are different types of texts and interactive exercises that practise the reading skills you need
               to do
               well in your studies, to get ahead at work and to communicate in English in your free time.

               Take our free online English test to find out which level to choose. Select your level, from beginner
               (CEFR
               level A1) to advanced (CEFR level C1), and improve your reading skills at your own speed, whenever it's
               convenient for you.
           </p>


       </div>
       <div class='a2'>
           <img src='three.jpg'>
       </div>
   </section>

   <div class='last'>
       <h1>Resgister </h1>
       <input type='text' placeholder='Enter your name'>
       <input type='text' placeholder='Enter Email'>
       <input type='text' placeholder='Enter Phone no.'>
       <input type='text' placeholder='Enter Address'>

       <button class='lastbutton'>Submit</button>
   </div>";


   }

  
    ?>
</body>

</html>