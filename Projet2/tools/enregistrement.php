
<?php
require 'DB.php';
$dbh = connect();

$sql = "INSERT INTO user (pseudo,first_name,last_name,login,password)
        VALUES (:pseudo, :prenom, :nom, :login, :password)";
$result = $dbh->prepare($sql);
$result->bindValue('pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$result->bindValue('prenom', $_POST['prenom'], PDO::PARAM_STR);
$result->bindValue('nom', $_POST['nom'], PDO::PARAM_STR);
$result->bindValue('login', $_POST['login'], PDO::PARAM_STR);
$result->bindValue('password', $_POST['password'], PDO::PARAM_STR);
$result->execute();

//redirection vers admin.php
header('location:../admin.php');