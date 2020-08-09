let ima =document.getElementsByClassName('card');


function modeNuit(color) {

    document.body.style.background = color;
    for(let i in ima){
        ima[i].style.filter='brightness(0.7)';
    }



}

function modeJour(color){
    document.body.style.background = color;
    for(let i in ima){
        ima[i].style.filter='brightness(1)';
    }

}
