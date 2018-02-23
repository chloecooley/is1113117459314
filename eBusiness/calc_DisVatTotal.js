/* global $ */

function calcSubTotal() {
    var parmSubTotal;
     if(document.getElementById('salesforce').checked) {
       parmSubTotal=100;
    }
    else if (document.getElementById('gmail').checked){
       parmSubTotal=200;
    }
    else if (document.getElementById('aws').checked){
       parmSubTotal=300;
    }
     else if (document.getElementById('cloudservices').checked){
        parmSubTotal=400;
    }
    display(parmSubTotal)
}

 function calcDiscount(){
 var parmDiscount;
 if(document.getElementById('salesforce').checked) {
        parmDiscount=100 * 0.05;
    }
    else if (document.getElementById('gmail').checked){
       parmDiscount=200 * 0.05;
    }
    else if (document.getElementById('aws').checked){
        parmDiscount=300 * 0.05;
    }
     else if (document.getElementById('cloudservices').checked){
        parmDiscount=400 * 0.05;
    }
    display(parmDiscount);
}

function calcVat(){
    var parmVat
     if(document.getElementById('salesforce').checked) {
        parmVat= ((100 -(100 * 0.05)) * 0.10);
    }
    else if (document.getElementById('cloudservices').checked){
       parmVat=((200 -(200 * 0.05)) * 0.10);
    }
    else if (document.getElementById('aws').checked){
        parmVat=((300 -(300 * 0.05)) * 0.10);
    }
     else if (document.getElementById('gmail').checked){
        parmVat=((400 -(400 * 0.05)) * 0.10);
    }
      display(parmVat);
}

function calcTotal(){
    var parmTotal
     if(document.getElementById('salesforce').checked) {
        parmTotal= 100 + ((100 -(100 * 0.05)) * 0.10);
    }
    else if (document.getElementById('cloudservices').checked){
       parmTotal= 200 + ((200 -(200 * 0.05)) * 0.10);
    }
    else if (document.getElementById('aws').checked){
        parmTotal= 300 + ((300 -(300 * 0.05)) * 0.10);
    }
     else if (document.getElementById('gmail').checked){
        parmTotal=400 + ((400 -(400 * 0.05)) * 0.10);
    }
      display(parmTotal);
}

function display(){
    document.getElementById('subtotal').value = calcSubTotal();
    document.getElementById('discount').value = calcDiscount();
    document.getElementById('vat').value =calcVat();
    document.getElementById('total').value =calcTotal();
}

