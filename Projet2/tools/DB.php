<!-- Derreumaux Valentin -  20/04/2020  15:35 -->

<?php
//connection a la db "website"
function connect() : object
{
    $dns = 'mysql:dbname=website; host=localhost; charset=utf8';
    $user = 'client';
    $password = 'S|bt4ac20p&d&s9';
    $options = [ // remplace le setAttribute
            PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];

    try {
        $dbh = new PDO($dns, $user, $password, $options);
//        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // remplacer par $options
//        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }catch (Exception $e){
        die('Erreur serveur: '.$e->getMessage());
    }
    return $dbh;
}
