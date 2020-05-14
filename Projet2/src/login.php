<!-- Derreumaux Valentin -  01/05/2020  13:18 -->
<?php
require 'DB.php';
$dbh = connect();
// QUERY qui vérifie la présence du login


//MA VERSION
$sql = 'SELECT * FROM user';
$result = $dbh->prepare($sql);
$result->bindValue('login',$_POST['login'],PDO::PARAM_STR);
$result->execute();
$users = $result->fetchAll();
var_dump($users);
$connect = false;
$password = false;
foreach ($users as $user) {
    if ($user->login == $_POST['login']) {
        $connect = true;
        if ($user->password == $_POST['password'])$password = true;
        if ($user->typeOfUser == "admin")$typeOfUser = true;
        if ($user->typeOfUser == "user")$typeOfUser = false;
    }
}

if ($connect){

    if($typeOfUser) {
        if ($password) header('location:../admin.php');
        else header('location:../login.php');
    }else{
        if ($password) header('location:../index.php');
        else header('location:../login.php');
    }
}
else header('location:../index.php');
?>