<?php
class DB
{
    function opencon()
    {
$DBHostname="localhost";
$DBUsername="root";
$DBpass="";
$DBName="CustomerSignup";

$conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
if($conn->connect_error)
{
    echo "can not create connectiono object".$conn->connect_error;
}
return $conn;
    }
    function insertData($cname,$email,$phoneNo,$gender,$cpassword,$tablename,$conn)
    {
$sqlstr="INSERT INTO $tablename (cname,email,phoneNo,gender,cpassword) 
VALUES('$cname','$email',$phoneNo,'$gender','$cpassword')";
if($conn->query ($sqlstr)===TRUE)
{
    echo "Data inserted";

}


else {
    echo "data entry not successful".$conn->error;

}
    }
    function closecon($conn)
    {
$conn->close();   
}
}


?>