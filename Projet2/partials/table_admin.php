<?php
$sql = "SELECT s.id, s.name,s.url, s.note, c.category
FROM sites s
LEFT JOIN category c on s.cat_id = c.id
order by name";$result = $dbh->prepare($sql);
$result->execute();
$websites = $result->fetchAll()
?>
<main class="container">
    <section id="listing">
        <h3 class="display-4 my-3">Liste des Restaurants</h3>
        <a href="?action=insertsite" class="btn btn-primary mb-3">Ajouter Restaurant</a>
        <div class="row">
            <div class="col-md-12">

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Url</th>
                        <th>Catégorie</th>
                        <th>Note</th>
                        <th>Modif</i></th>
                        <th>Supp avis</th>
                        <th>Supp site</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($websites as $website) : ?>
                        <tr>
                            <td><?= $website->name ?></td>
                            <td><a href="<?= $website->url ?>">Voir le site</a></td>
                            <td><?= $website->category ?></td>
                            <td><?= stars($website->note) ?></td>
                            <td><a href="?action=updatesite&id=<?= $website->id ?>"><i class="icofont-ui-edit"></i></a></td>
                            <td><a href="tools/delavis.php?nameR=<?= $website->name ?>" onclick="return confirm('Êtes-vous sur de supprimer les avis de ce site?\n Attention c\'est irréversivre')"><i class="icofont-mop"></i></a></td>
                            <td><a href="tools/delsite.php?id=<?= $website->id ?>" onclick="return confirm('Êtes-vous sur de supprimer ce site?\n Attention c\'est irréversivre')"><i class="icofont-ui-delete"></i></a></td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</main>