
function aleatoire(c) {
    console.log(c)
    var min=0;
    var max=c.length;
    var random = Math.floor(Math.random() * (max - min)) + min;
    console.log(random);
    document.getElementById("Search1").value="";
    document.getElementById("Search1").value=c[random].name;
}

