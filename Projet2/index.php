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
<main class="container">
    <section id="listing">
        <h3 class="display-4 my-3">Liste des Restaurants</h3>
        <div class="row">
            <div class="col-md-12">
                <?php if (count($websites)) : ?>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Url</th>
                            <th>Catégorie</th>
                            <th>Note</th>
                            <th>Commentaire</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($websites as $website) : ?>
                            <tr>
                                <td><?= $website->name ?></td>
                                <td><a href="<?= $website->url ?>">Voir le site</a></td>
                                <td><?= $website->category ?></td>
                                <td><?= stars($website->note) ?></td>
                                <td><a href="avis.php?search=<?= $website->name ?>">avis d'utilisateur</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h3>Aucun enregistrement pour <?= $_GET['search'] ?></h3>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php
require 'partials/footer.php';
?>