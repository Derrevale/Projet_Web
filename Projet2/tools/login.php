<!-- Derreumaux Valentin -  01/05/2020  13:18 -->

<?php
// Démarre le gestionnaire des sessions
session_start();
require 'DB.php';
$dbh = connect();

$sql = 'SELECT * FROM user WHERE login = :login';
$result = $dbh->prepare($sql);
$result->bindValue('login', $_POST['login'], PDO::PARAM_STR);
$result->execute();
$user = $result->fetch(PDO::FETCH_OBJ);

//Vérifie si un enregistrement a été trouvé

$connect = false;
$password = false;

    if ($user->login == $_POST['login']) {
        $connect = true;
        if ($user->password == $_POST['password']) $password = true;
        if ($user->typeOfUser == "admin") $typeOfUser = true;
        if ($user->typeOfUser == "user") $typeOfUser = false;
    }


if ($connect) {

    if ($typeOfUser) {
        if ($password){
            header('location:../admin.php');
            $_SESSION['typeofuser'] = $user->typeOfUser;
            $_SESSION['login'] = $user->pseudo;}
        else header('location:../login.php');
    } else {
        if ($password){ header('location:../insertavis.php?action=insertavis');
            $_SESSION['login'] = $user->pseudo;}
    else
        header('location:../login.php');
    }
} else header('location:../index.php');


