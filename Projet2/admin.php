<?php
/*possibiliter de modifier la db directement depuis le site en tant que admin
(objectif lors de la connection si admin direction vers celui si et non le user classique
*/
require 'partials/header_admin.php';
require 'tools/DB.php';
require 'tools/tools.php';
$dbh = connect();
if (isset($_GET['action'])){
    if ($_GET['action'] === 'insertsite') {
        require 'forms/insertsite.php';
    } elseif ($_GET['action'] === 'updatesite') {
        require 'forms/updatesite.php';
    }
} else {
    require 'partials/table_admin.php';
}

require 'partials/footer.php';
?>

