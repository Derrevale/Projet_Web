function init(){

}

function fctRecup(){
    var elementRecup = document.getElementById('requete');
    var reponseRequete = elementRecup.value ;
    toString(reponseRequete) ;
    console.log(elementRecup.value);
    document.getElementById('reponceReq').value = reponseRequete;

}