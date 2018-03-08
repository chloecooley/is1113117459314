/* global $ */

function validateDetails(){
    
    validateNameDetails();
    
}
//Validate name details and give alerts if invalid input is entered
function validateNameDetails(){
    var name;
    
    name= document.getElementById("user_name").value;
    
    if (name ==""){
        alert("Please enter your name");
    }
    
    else if (String(name).length < 4){
        alert("Please make sure your full name is entered.");
    }
    
    else{
        validateEmailDetails();
    }
} 

//Validate email details and give alerts if invalid input is entered
function validateEmailDetails(){
    var email;
    
   email= document.getElementById("user_email").value;
    
    if (email ==""){
        alert("Please enter your email");
    }
    
    else if (String(email).length <5){
        alert("Please make sure your email is correct.");
    }
    
    else{
        validatePinDetails();
    }
} 

//Validate pin details and give alerts if invalid input is entered
function validateCardDetails(){
    var cardnum;
    
    cardnum= document.getElementById("card_number").value;
    
    if (cardnum ==""){
        alert("Please enter your card number");
    }
    
    else if (String(cardnum).length < 16){
        alert("Please make sure your card number is accurate");
    }
    
    else{
        validateCvvDetails();
    }
} 

//Validate pin details and give alerts if invalid input is entered
function validateCvvDetails(){
    var cvv;
    
    cvv= document.getElementById("cvv").value;
    
    if (cvv ==""){
        alert("Please enter your CVV number");
    }
    
    else if (String(cvv).length < 3){
        alert("Please make sure your CVV number is accurate");
    }
    
    else{
        validatePinDetails();
    }
} 

//Validate pin details and give alerts if invalid input is entered
function validatePinDetails(){
    var pin;
    
    pin= document.getElementById("user_pin").value;
    
    if (pin ==""){
        alert("Please enter your PIN");
    }
    
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    
    else{
        enablebtnPurchase();
    }
} 

//Enable btnPurchase when validation on the above is true
function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

//Disable btnPurchase when validation on the above is false
function disablebtnPurchase(){
    $('#btnPurchase').prop('disabled', true);
}