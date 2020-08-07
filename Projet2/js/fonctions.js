let x = document.getElementsByClassName('type');
let t =  document.getElementsByClassName('resto');

function modeNuit(color) {

    document.body.style.background = color;

    for(let i in x){
        x[i].style.color="#0B5345";
    }

    for(let i in t){
        t[i].style.color="#0B5345";
    }

}

function modeJour(color){
    document.body.style.background = color;
    for(let i in x){
        x[i].style.color='#EC7063';
    }

    for(let i in t){
        t[i].style.color='#EC7063';
    }
}