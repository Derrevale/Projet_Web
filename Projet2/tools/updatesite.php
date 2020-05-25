<!-- Derreumaux Valentin -  01/05/2020  11:32 -->
<?php
require 'DB.php';
//var_dump($_POST['id']);  Afficher toutes les données du formulaire
$dbh = connect();

$sql = "UPDATE sites SET name = :name, url = :url, description = :description, note = :note, cat_id= :category WHERE id = :id";
$result = $dbh->prepare($sql);
$result->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$result->bindValue('name', $_POST['name'], PDO::PARAM_STR);
$result->bindValue('url', $_POST['url'], PDO::PARAM_STR);
$result->bindValue('description', $_POST['description'], PDO::PARAM_STR);
$result->bindValue('note', $_POST['note'], PDO::PARAM_INT);
$result->bindValue('category', $_POST['category'], PDO::PARAM_INT);
$result->execute();

//redirection vers admin.php
header('location:../admin.php');