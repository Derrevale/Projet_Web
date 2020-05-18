<!-- Vincent Brichant -  17/05/2020  -->
<?php
require 'DB.php';
$dbh = connect();

$sql = "INSERT INTO avis (ID_avis, pseudo_user,name_rest,note,avis)
        VALUES (:ID_avis,:pseudo, :name, :note, :avis)";
$result = $dbh->prepare($sql);
$result->bindValue('ID_avis', $_POST['ID_avis'], PDO::PARAM_INT);
$result->bindValue('pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$result->bindValue('name', $_POST['name'], PDO::PARAM_STR);
$result->bindValue('note', $_POST['note'], PDO::PARAM_INT);
$result->bindValue('avis', $_POST['avis'], PDO::PARAM_STR);
$result->execute();

//redirection vers admin.php
header('location:../admin.php');