let ima =document.getElementsByClassName('card');


function modeNuit(color) {
    window.sessionStorage.mode="nuit";
    document.location.reload(true);



}

function modeJour(color){
    window.sessionStorage.mode="jour";
    document.location.reload(true);
}
