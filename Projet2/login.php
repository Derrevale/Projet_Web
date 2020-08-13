<?php
require 'partials/header.php';
require 'tools/DB.php';
require 'tools/tools.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cssglobal.css">
    <script type="text/javascript" src="js/fonctions.js"></script>
</head>

<body>
<main class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 align="center" class="my-3">Connection</h3>
            <form action="tools/login.php" method="post">
                <div class="form-group">
                    <label for="login">Identifiant</label>
                    <input type="text" id="login" name="login" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required class="form-control">
                </div>
                <button class="btn btn-primary form-control" type="submit" >Connection</button>


            </form>

        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <h3 align="center" class="my-3">Inscription</h3>
        <form action="/enregistrement.php?action=enregistrement" method="post">
            <button class="btn btn-primary form-control" type="submit" >Enregistrez-vous</button>


        </form>

    </div>
</main>
</body>
</html>

<?php
require 'partials/footer.php';
?>
