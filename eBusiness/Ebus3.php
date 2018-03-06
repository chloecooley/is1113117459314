
<!DOCTYPE html>
<!-- Refer to stylesheet-->
<link rel="stylesheet" href="ebusinessstylesheet.css" type="text/css"/>

<?php
session_start();
?>


<html lang="en">
  
    <head>
         <meta charset="utf-8"/>
     
        <title>RECEIPT</title>
    </head>
   
    <body>
        
        <h1>RECEIPT</h1>
        
   <form>
   
    <?php
    $_SESSION["user_name"]=$_POST["user_name"];
    $_SESSION["user_email"]=$_POST["user_email"];
    //Echo session variables that were set on previous pages
    echo "Name: " . $_SESSION["user_name"] . "<br/>";
    echo "Email: " . $_SESSION["user_email"] . "<br/>";
    echo "Sub Total: " . $_SESSION["subtotal"] . "<br/>";
    echo "Discount: ".$_SESSION["discount"] . "<br/>";
    echo "VAT: ".$_SESSION["vat"] . "<br/>";
    echo "Total: ".$_SESSION["total"] . "<br/>";
    ?>
   
    </form>
   
   <br/>
   <br/>
   <br/>
   
    <!-- Link back to homepage -->
    <a href="../homepage.html" class="btn-btn-success">Home</a>
   
    </body>
</html>
