<?php
//Page principale , acces utilisateur normaux si connection effective
require 'partials/header.php';
require 'src/DB.php';
require 'src/tools.php';
$dbh = connect();
if (!isset($_GET['search'])) {
    $sql = "SELECT s.id, s.name,s.url, s.note, c.category
    FROM sites s 
    LEFT JOIN category c on s.cat_id = c.id
    order by name";
    $result = $dbh->prepare($sql);
}
else {
    $sql = "SELECT s.id, s.name,s.url, s.note, c.category
    FROM sites s 
    LEFT JOIN category c on s.cat_id = c.id
    WHERE s.name LIKE :search
    order by name";
    $result = $dbh->prepare($sql);
    $result->bindValue('search', '%'.$_GET['search']. '%', PDO::PARAM_STR);
}
$result->execute();
$websites = $result->fetchAll()
?>
    <link href="css/cssglobal.css" rel="stylesheet">

    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h1 id="nom">Resto-rank</h1>
            </div>
        </div>
        <section id="listing">
            <h3 class="display-4 my-3">Liste des Restaurants</h3>

            <div class="row">

                <?php foreach ($websites as $website) : ?>

                    <div class="col-12 col-lg-4">
                        <div class="card" style="background-image: url('image/<?= $website->name ?>.jpg')">

                            <h1><?= $website->name ?></h1>
                            <h3><?= $website->category ?></h3><br>
                            <h4><?= stars($website->note) ?></h4>
                            <h5><a href="avis.php?search=<?= $website->name ?>">avis d'utilisateur</a></h5>
                            <h5><a href="<?= $website->url ?>">Voir le site</a></h5>
                        </div>
                    </div>



                <?php endforeach; ?>
            </div>

        </section>
    </main>
<?php
require 'partials/footer.php';
?>


