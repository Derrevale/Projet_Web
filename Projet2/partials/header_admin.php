<!-- Derreumaux Valentin -  20/04/2020  13:27-->
<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['login']))
{
// Si inexistante ou nulle, on redirige vers le formulaire de login
header('Location:../index.php');
exit();
}

if(empty($_SESSION['typeofuser']))
{
// Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websites</title>
    <!--    CSS-->
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://www.ephec.be/">Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0" action="?" method="get">

            <button class="btn btn-outline-success my-2 my-sm-0" onclick="<?php

            session_destroy();
            unset($_SESSION);
            ?>">Déconnextion</button>
        </form>
    </nav>
</header>
