var imaindex =document.getElementsByClassName('card');
var nav=document.getElementById("navTop");



function modeNuit(color) {
    var basP = document.getElementById("pied");
    nav.style.filter= 'brightness(0.7)';
    basP.style.filter= 'brightness(0.7)';
    document.body.style.background = color;
    for (let i in imaindex) {
        imaindex[i].style.filter = 'brightness(0.7)';
    }

}

function modeJour(color){
    var basP = document.getElementById("pied");
    nav.style.filter= 'brightness(1)';
    basP.style.filter= 'brightness(1)';
    document.body.style.background = color;
    for(let i in imaindex){
        imaindex[i].style.filter='brightness(1)';
    }

}
