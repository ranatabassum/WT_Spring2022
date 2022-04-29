<?php
include ("../control/results2.php");
?>

<html>
<head>
        <link rel="stylesheet" type="text/css" href="../css/myStyle.css">
</head>
<center id="box">
   <body>
   <script src="../js/JS.js" defer></script>
    <p id="labels"> Sign Up for an account </p>
  
<form action="" method="post"  id="form">

    <p id="labels"> <label> Name: </p>
       <input type="text" name="cname" id="cname"> 
       <small>Error Message</small>

       <p id="labels">Email:</p>
       <input type="text" name="Email" id="Email"> 
       <small>Error Message</small>

         <p id="labels">Phone Number:</p>
        <input type="text" name="phoneNo" id="phoneNo"> 
        <small>Error Message</small>

        <p id="labels">Pick your Gender:</p>
        <input type="radio" name="Gender" value="Male">Male
        <input type="radio" name="Gender" value="Female">Female
        <input type="radio" name="Gender" value="Others">Others
        <small>Error Message</small>

        <p id="labels">Password: </p>
        <input type="password" name="password" id="password"> 
        <small>Error Message</small>
     <br> <br>
       <input type="submit" class="button submitbutton" name="Signup" >
       <input type="reset" class="button resetbutton" name="Reset"> 
      

</center>


</form>
</body>
</html>