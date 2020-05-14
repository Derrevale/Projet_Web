
<?php
require 'DB.php';
$dbh = connect();

$sql = "INSERT INTO sites (name,url,description,note,cat_id)
        VALUES (:name, :url, :description, :note, :category)";
$result = $dbh->prepare($sql);
$result->bindValue('name', $_POST['name'], PDO::PARAM_STR);
$result->bindValue('url', $_POST['url'], PDO::PARAM_STR);
$result->bindValue('description', $_POST['description'], PDO::PARAM_STR);
$result->bindValue('note', $_POST['note'], PDO::PARAM_INT);
$result->bindValue('category', $_POST['category'], PDO::PARAM_INT);
$result->execute();

//redirection vers admin.php
header('location:../admin.php');