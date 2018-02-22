/* global $ */

function validateDetails(){
    
    validateNameDetails();
    
}

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

function validateEmailDetails(){
    var email;
    
   email= document.getElementById("user_email").value;
    
    if (email ==""){
        alert("Please enter your email");
    }
    
    else if (String(email).length <10){
        alert("Please make sure your email is correct.");
    }
    
    else{
        validatePinDetails();
    }
} 

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

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase(){
    $('#btnPurchase').prop('disabled', true);
}