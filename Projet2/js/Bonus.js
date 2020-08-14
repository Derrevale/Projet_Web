function aleatoire() {

    document.getElementById("Search").value="";
    
    let resto=[];
    resto=document.getElementsByClassName("resto");
    var min=1;
    var max=resto.length;
    var random = Math.floor(Math.random() * (max - min)) + min;


    console.log(random);
    var restochoix=document.getElementById(random);
    if (!restochoix){
        console.log("dedans");
        while (!restochoix){
            let resto=[];
            resto=document.getElementsByClassName("resto");
            var min=0;
            var max=resto.length;
            var random = Math.floor(Math.random() * (max - min)) + min;


            console.log(random);
            var restochoix=document.getElementById(random);
        }

    }
    var restA=restochoix.innerText;
    console.log(restA);
    document.getElementById("Search").value=restA;

}
