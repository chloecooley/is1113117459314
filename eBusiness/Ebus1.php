<link rel="stylesheet" href="ebusinessstylesheet.css" type="text/css"/>

<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
       
    </head>
    
    <body>
        
        <h1>Select a Product</h1>
        
        <br/>
        
        <!-- Creating labels and radio buttons for products-->
        <!-- Sending info to Ebus2-->
        <form method="POST" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            <br/>
            
            <label for="cloudservices">
                <input type="radio" id="cloudservices" name="product" onClick="disablebtnProceed()"/>
                Cloud Services @ $200
            </label>
            <br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            <br/>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            <br/>
           
           <!--Creating labels and readonly inputs for subtotal/vat/discount/total with values preset at 0-->
            <br/>
            <label for=subtotal>
                Sub Total
                <input type="text" id="subtotal" name='subtotal' value="0.00" readonly/>
            </label>
            
           <br/>
            <label for=discount>
                Discount
                <input type="text" id="discount" name='discount' value="0.00" readonly/>
            </label>
            
            <br/>
            <label for=vat>
                VAT
                <input type="text" id="vat" name='vat' value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            <label for="total">
                Total
                <input type="text" id="total" name='total' value="0.00" readonly/>
            </label>
            <br/>
            <!--Enusre that btnProceed is disabled until Calculate Costs is clicked-->
          <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            <br/>
             
        </form>
          
        <br/>
        <br/>
        <!--Call calcSub() when Calculate Costs is clicked-->
         <button onClick="calcSub()">Calculate Costs</button>

       <!-- Refreshes page-->
        <a role="button" href="Ebus1.php">Clear Choice</a>
    </body>
</html>