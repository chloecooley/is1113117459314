<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
   
  
   <?php
     //Echo session variables that were set on previous page
    echo "Name: ". $_SESSION["user_name"];
   ?>
   <br/>
    <?php
    //Echo session variables that were set on previous page
    echo "Email: " . $_SESSION["user_email"];
    ?>
    <br/>
    <?php
    //Echo session variables that were set on previous page
    echo "Total: " . $_SESSION["total"];
    ?>
    </body>
</html>
