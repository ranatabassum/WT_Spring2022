<?php
include ("../model/model.php");
if($_POST["cname"]=="")
{
    echo "empty input";
}
else{
    

    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchUser($conobj, "customersignup",$_POST["cname"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
          echo $row["cname"];
           
        }


    }
    else{
        echo "no data found";
    }
    

}


?>