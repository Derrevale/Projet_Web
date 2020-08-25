<?php
//Page principale , acces utilisateur normaux si connection effective
require 'partials/header.php';
require 'tools/DB.php';
require 'tools/tools.php';
$dbh = connect();
if (!isset($_GET['search'])) {
    $sql = "SELECT s.ID_avis, s.name_rest,s.avis, s.note,s.pseudo_user
    FROM avis s 
    
    order by name_rest";
    $result = $dbh->prepare($sql);
}
else {
    $sql ="SELECT s.ID_avis, s.name_rest,s.avis, s.note, s.pseudo_user
    FROM avis s 
    
    WHERE s.name_rest LIKE :search
    order by name_rest";
    $result = $dbh->prepare($sql);
    $result->bindValue('search', '%'.$_GET['search']. '%', PDO::PARAM_STR);
}
$result->execute();
$websites = $result->fetchAll()
?>
    <script type="text/javascript" src="js/fonctions.js"></script>
   
    <main class="container">
        <section id="listing">
            <h3 style="color:#714F4F" class="display-4 my-3">Avis des utilisateurs</h3>
            <div class="row">
                <div class=" col-md-12">
                    <?php if (count($websites)) : ?>

                        <table class="table table-hover">
                            <thead>
                            <tr style="color:#714F4F">
                                <th>Nom du restaurant</th>
                                <th>Nom d'utilisateur</th>
                                <th>avis</th>
                                <th>note</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($websites as $website) : ?>
                                <tr style="color:#714F4F">
                                    <td><?= $website->name_rest ?></td>
                                    <td><?= $website->pseudo_user ?></td>
                                    <td><?= $website->avis ?></td>
                                    <td><?= stars($website->note) ?></td>

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
