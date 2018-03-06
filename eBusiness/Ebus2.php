<!DOCTYPE html>

<?php
session_start();
?>


<html lang="en">
  
    <head>
         <meta charset="utf-8"/>
         <!-- Refer to stylesheet-->
        <link rel="stylesheet" href="ebusinessstylesheet.css" type="text/css"/>

        <title>Enter Details</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript" src="ebus2_validator.js"></script>
       
    </head>
    <body>
        <h1>Please enter your payment details</h1>
        
        <!-- Sending info to Ebus3-->
        <form method="POST" action="Ebus3.php">
          
          <!--Creatubg labels and text fields for user name/email/ and pin -->
            <label for="user_name">Name:
            <input type="text" id="user_name" name="user_name" placeholder="Name">
            </label>
            <br/>
            <label for="user_email">Email:
            <input type="text" id="user_email" name="user_email" placeholder="Email">
            </label>
            <br/>
            <label for="user_pin">PIN:
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            </label>
            <br/>
            <!--BtnPurchase disabled until Validate is clicked -->
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        
        <br/>
        <!--When clicked call ValidateDetails() and if it is not incorrect activate btnProceed -->
        <button onClick="validateDetails()">Validate</button>
        
        <br/>
        <br/>
        <a href="../homepage.html" class="btn-btn-success">Home</a>
        
       <?php
       //set session variables
 
        $_SESSION["subtotal"]= $_POST["subtotal"];
        $_SESSION["discount"]= $_POST["discount"];
        $_SESSION["vat"]= $_POST["vat"];
        $_SESSION["total"]= $_POST["total"];
        ?>
        
    </body>
</html>