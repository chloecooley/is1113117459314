<!DOCTYPE html>

<?php
session_start();
?>

<html lang="en">
  
    <head>
         <meta charset="utf-8"/>
         
         <!-- Refer to stylesheet-->
        <link rel="stylesheet" href="ebusinessstylesheet.css" type="text/css"/>

        <title>Select Product</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>
       
    </head>
    
    <body>
         <ul>
        
         <li class="mainNav"><a href="../homepage.html">Home</a></li>
         <li class="dropdown">
         <a href="javascript:void(0)" class="dropbtn">Curriculum Vitae</a>
         <div class="dropdown-content">
         <a href="CV/cv_page1.html">Bio</a>
         <a href="CV/cv_page2.html">Educationl Details</a>
         <a href="CV/cv_page3.html">Work Experience</a>
        
         </li>
        </div>
        
         <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Interests</a>
        <div class="dropdown-content">
        <a href="Interests/sports.html">Sports</a>
        <a href="Interests/travel.html">Travel</a>
        </div>
         </li>
         
          <li class="mainNav">
         <a href="AboutCloud.html">About Clouds of Code</a>
        </li>
        <li class="mainNav"><a href="Ebus1.php">eBusiness</a></li>
        <li class="mainNav"> <a href="https://github.com/chloecooley" target="_blank">GitHub Account</a></li>
        <li class="mainNav"> <a href="https://github.com/chloecooley/is1113117459314/graphs/commit-activity" target="_blank">Commit Activity</a></li>
        <li class="mainNav"> <a href="https://is1113117459314.herokuapp.com/" target="_blank">Heroku App</a></li>
       </ul>
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
                <input type="text" id="subtotal" name='subtotal' value="0.00"   readonly/>
            </label>
            
           <br/>
            <label for=discount>
                Discount
                <input type="text" id="discount" name='discount' value="0.00"  readonly/>
            </label>
            
            <br/>
            <label for=vat>
                VAT
                <input type="text" id="vat" name='vat' value="0.00"  readonly/>
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
        
        <br/>
        <br/>
        <!-- Link back to homepage -->
        <a href="../homepage.html" class="btn-btn-success">Home</a>
    </body>
</html>