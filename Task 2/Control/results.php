<?php

 if(issert($_POST["submit"]))
 { 
     
       $uname= $_REQUEST["User Name"];
       if(empty($uname)<5)
       {
           echo "Please enter User name";
       }
       else{
           echo "Your name is ".$uname;

       }
       echo "<br>";
       if (issert($_POST["Radio"]))
      
       {
           echo "You have selected".$_POST["Radio"];
       }
       else{
           echo "Select radio button";

       }
       echo "<br>";

       if (issert($_POST["chkbx1"] || issert($_POST["chkbx2"] )))
      
       {
           echo "You have selecte a box";
       }
       if (issert($_POST["chkbx1"]))
       {
        echo "You have selected".$_POST["chkbx1"];
       }
       if (issert($_POST["chkbx2"]))
       {
        echo "You have selected".$_POST["chkbx2"];
       }
    

       else{
           echo "Select a box";

       }
       echo "<br>";
 }
?> 

