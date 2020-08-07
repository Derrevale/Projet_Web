<div>
    <button  id="sombre"  onclick="modeNuit('dimgray')"> Mode Nuit </button>
    <button id="jour" onclick="modeJour('blanchedalmond')"> Mode Jour </button>
</div>
<?php
/*possibiliter de modifier la db directement depuis le site en tant que admin
(objectif lors de la connection si admin direction vers celui si et non le user classique
*/
require 'partials/header_admin.php';
require 'src/DB.php';
require 'src/tools.php';
$dbh = connect();
if (isset($_GET['action'])){
    if ($_GET['action'] === 'enregistrement') {
        require 'forms/enregistrement.php';
    } elseif ($_GET['action'] === 'updatesite') {
        require 'forms/updatesite.php';
    }
} else {
    require 'partials/table_admin.php';
}

require 'partials/footer.php';
?>

<script type="text/javascript" src="js/fonctions.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="css/cssglobal.css" rel="stylesheet">
