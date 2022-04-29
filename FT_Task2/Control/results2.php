<?php

include ("../model/model.php");
{
    if(isset($_POST["Signup"]))
{

$cname=$email=$phoneNo=$gender=$cpassword= $confirmpassword="";
{
$cname = $_POST["cname"];
if(isset($cname))
{
    echo "Please enter your name";
}
else{
    echo "you have entered your name";
}

echo "<br>";

$email = $_POST["Email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    echo "Please enter valid email";
}
else{

    echo "you have entered valid email";
}

echo "<br>";
$phoneNo = $_POST["phoneNo"]; 
if(is_numeric($phoneNo))
{

    echo"You have entered phone number";
}
else{
    echo "enter phone number";
}

echo "<br>";
$gender = $_POST["Gender"];
if(isset($_POST["Gender"]))
{

    echo "You selected gender";
}
else{
    echo "Please select your gender";
}

echo "<br>";

$cpassword= $_POST["password"]; 
$confirmpassword=$_REQUEST["confirmpassword"];

        if(empty($cpassword) || strlen($cpassword)<6)
        {
            echo  "Please enter a valid password";
        }
        else if($cpassword != $confirmpassword)
        {
            echo "Password didn't match";
        }
        else
        {
            echo "Password is valid";
        }

        

        echo "<br>";

    if(empty($cname)||empty($email)||empty($phoneNo)||empty($gender)||empty($cpassword))
    {
        echo "please insert all the field";
    }


          else{
            $mydb = new DB();
            $connobj = $mydb -> opencon();
            $mydb->insertData($cname,$email,$phoneNo,$gender,$cpassword,"CustomerSignup",$connobj);
            $mydb ->closecon($connobj);
          }
        
        
        

}
}}
?>
