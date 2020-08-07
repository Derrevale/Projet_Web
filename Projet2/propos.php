<?php
require 'partials/header.php';
require 'src/DB.php';
require 'src/tools.php';
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="css/cssglobal.css" rel="stylesheet">
<script type="text/javascript" src="js/fonctions.js"></script>

<head>
    <title>A propos</title>
</head>
<div>
    <button  id="sombre"  onclick="modeNuit('dimgray')"> Mode Nuit </button>
    <button id="jour" onclick="modeJour('blanchedalmond')"> Mode Jour </button>
</div>
<body>
    <div id="prop">
        <h3 class="titregras"> A propos </h3>
        <p> Nous sommes trois étudiants de l'Ephec LLN, ce site est le produit d'un projet WEB, dans le cadre de notre cours de bac 2</p>
    </div>
</body>


<?php
require 'partials/footer.php';
?>
