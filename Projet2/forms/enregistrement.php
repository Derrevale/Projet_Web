<!-- Derreumaux Valentin -  24/04/2020  10:35 -->
<?php
$sql =  "SELECT id, category FROM category ORDER BY category";
$result = $dbh->prepare($sql);
$result->execute();
$categories = $result->fetchAll();
?>
<link href="css/enreg.css" rel="stylesheet">

<main class="container">
    <section id="insert">
        <h2 class="display-4 my-3">Nouvel utilisateur</h2>
        <div class="row">
            <div class="col-md-12">
                <form action="tools/enregistrement.php" method="post">
                    <div class="form-group">
                        <label for="login">Identifiant de connection</label>
                        <input id="login" name="login" placeholder="Entrez votre identifiant de connection" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre Prenom" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom de famille</label>
                        <input id="nomfam" name="nom" placeholder="Entrez votre nom de famille" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pseudo">Votre pseudo</label>
                        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Votre mot de passe</label>
                        <input type="text" id="password" name="password" placeholder="Entrez votre mot de passe" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password_verif"></label>
                        <input type="text" id="password_verif" name="password_verif" placeholder="Confirmez votre mot de passe" required class="form-control">
                    </div>

                    <br>

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>
</main>


