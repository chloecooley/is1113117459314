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
    </body>
</html>
