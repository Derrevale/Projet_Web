<!-- Derreumaux Valentin -  23/04/2020  14:33 -->

<?php
require 'DB.php';
$dbh = connect();
$sql = "DELETE FROM sites WHERE id = :id";
$result = $dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();
/* Redirection en PHP */
header('location:../admin.php');