/*global $ */

function calcSub() {
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
        argSubTotal=100;
    }
    else if (document.getElementById('cloudservices').checked){
        argSubTotal=200;
    }
    else if (document.getElementById('aws').checked){
        argSubTotal=300;
    }
     else if (document.getElementById('gmail').checked){
        argSubTotal=400;
    }
    display(argSubTotal);
}

function calcDisVatTotal(){
    //Declare variables
    var subTotal
    var vatAmt
    var discountAmt
    var totalPrice
    
    //Pass parameter value into the variable
    subTotal = parmSubTotal; 
    
    //Calculate the discount amount
    discountAmt= (subTotal * 0.05)
    
    //Calculate the vat @ 10%
    vatAmt = (subTotal - discountAmt) * 0.10
    
    //Calculate total price
    totalPrice = subTotal - discountAmt + vatAmt
    
    //display figures in the display() function
    display(subTotal, discountAmt, vatAmt, totalPrice)
}

//Function to display calculations 
function display(parm1, parm2, parm3, parm4) {
    document.getElementById('subtotal').value = parm1;
    document.getElementById('discount').value = parm2;
    document.getElementById('vat').value = parm3;
    document.getElementById('total').value = parm4;
    
    enablebtnProceed();
}

//Function to enable btnProceed
function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

//Function to disable btnProceed
function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}