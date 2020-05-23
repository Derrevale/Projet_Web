<?php
require 'partials/header.php';
require 'src/DB.php';
require 'src/tools.php';
?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link href="css/cssglobal.css" rel="stylesheet">

<main class="container">
        <div class="row">
            <div class="col">
                 <div class="jumbotron">
                     <h1>Contact</h1>
                 </div>
            </div>
        </div>
    <div class="row">
        <div class="col">
            <div class="text-center">
                 <img src="image/bo.jpg" alt="b">
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="image/mail.jpg" alt="mail" >
                <div class="card-body">
                    <h4 class="card-title"> Email </h4>
                    <p class="card-text"> Contactez nous via : eaten@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="image/tel.jpg" alt="tel" >
                <div class="card-body">
                    <h4 class="card-title"> Mobile </h4>
                    <p class="card-text"> Contactez nous via ce numéro : 0135433</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="image/maison.jpg" alt="maison">
                <div class="card-body">
                    <h4 class="card-title"> Adresse </h4>
                    <p class="card-text"> Retrouvez nous "Rue du parpaing n°15</p>
                </div>
            </div>
        </div>
    </div>

</main>


<?php
require 'partials/footer.php';
?>
