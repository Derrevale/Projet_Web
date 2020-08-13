<!-- Derreumaux Valentin -  13/08/2020  12:35 -->

<?php
require 'DB.php';
$dbh = connect();
$sql = "DELETE FROM avis WHERE name_rest = :nameR";
$result = $dbh->prepare($sql);
$result->bindValue('nameR', $_GET['nameR'], PDO::PARAM_STR);
$result->execute();




/* Redirection en PHP */
header('location:../admin.php');