<?php
include ("../control/results2.php");
?>

<html>
<head>
</head>
<center>
    <table>
    <hr>
    <h1> Sign Up for an account </h1>

    <form action="" method="post" >

        <tr><td>Name: </td>
        <td> <input type="text" name="cname"> </td>
       </tr>

        <tr><td>Email: </td>
        <td><input type="text" name="Email"> </td>
         </tr>

        <tr><td>Phone Number:</td>
        <td><input type="number" name="phoneNo"> </td>
        </tr>

        <tr><td>Pick your Gender: </td>
        <td><input type="radio" name="Gender" value="Male">Male
        <input type="radio" name="Gender" value="Female">Female
        <input type="radio" name="Gender" value="Others">Others</td>
        </tr>

        <tr><td>Password: </td>
        <td><input type="password" name="password" placeholder="Password must be 6 characters"> </td>
       </tr>

        <tr><td>Re-enter password: </td>
        <td><input type="password" name="confirmpassword" placeholder="Please re-enter password"></td>
        </tr>
        <tr><td><input type="submit" name="Signup" value="Signup"></td></tr>



</table>
</center>
</form>
</html>