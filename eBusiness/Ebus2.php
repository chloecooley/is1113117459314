<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript" src="ebus2_validator.js"></script>
       
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        <form method="POST" action="Ebus3.php">
            <label for="user_name">Name:
            <input type="text" id="user_name" name="user_name" placeholder="Name">
            </label>
            <label for="user_email">Email:
            <input type="text" id="user_email" name="user_email" placeholder="Email">
            </label>
            <label for="user_pin">PIN:
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            </label>
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        
        <br/>
        <button onClick="validateDetails()">Validate</button>
        
       
      
        <!--email and name needed-->
       
       <?php
       //set session variables
 
        
        $_SESSION["total"]= $_POST["total"];
        ?>
    </body>
    </html>