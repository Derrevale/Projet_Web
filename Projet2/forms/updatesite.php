<!-- Derreumaux Valentin -  01/05/2020  10:30 -->
<?php

//Query liste déroulante
$sql =  "SELECT id, category FROM category ORDER BY category";
$result = $dbh->prepare($sql);
$result->execute();
$categories = $result->fetchAll();


//Query pour remplir le formulaire
$id = $_GET['id'];
$sqlForm = "SELECT id,name, url, cat_id, note, description FROM sites WHERE id = :id";
$result = $dbh->prepare($sqlForm);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();
$restos = $result->fetchAll();
//var_dump($restos);
?>
<main class="container">
    <section id="insert">
        <h2 class="display-4 my-3">Mettre à jour un restaurant</h2>
        <div class="row">
            <div class="col-md-12">
                <form action="tools/updatesite.php" method="post">
                    <?php foreach ($restos as $resto) : ?>
                    <div class="form-group">
                        <label for="name">Nom du restaurant</label>
                        <input type="text" id="name" name="name" placeholder="Nom du site" required class="form-control" value="<?= $resto->name ?>">
                    </div>
                    <div class="form-group">
                        <label for="url">URL du restaurant</label>
                        <input type="url" id="url" name="url" placeholder="URL du site" required class="form-control" value="<?= $resto->url ?>">
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie du restaurant</label>
                        <select id="category" name="category" required class="form-control">
                            <option value="" disabled selected>Sélectionnez...</option>
                            <?php foreach ($categories as $category) {
                                if ($category->id === $resto->cat_id) {
                                    ?><option value="<?= $category->id ?>" selected><?= $category->category ?></option> <?php
                                }
                                else {
                                    ?><option value="<?= $category->id ?>"><?= $category->category ?></option> <?php
                                }
                            } ?>
                        </select>
                    </div>

                    <label for="note">Evaluation du site</label>
                    <select id="note" name="note" required class="form-control">
                        <option value="" disabled selected>Sélectionnez...</option>
                        <?php for($i = 1; $i <= 5; $i++) {
                            if ($i == $resto->note) {
                                ?><option value="<?= $i ?>" selected><?= $i ?></option> <?php
                            }
                            else {
                            ?><option value="<?= $i ?>"><?= $i ?></option> <?php
                            }
                        } ?>
                    </select>
                    <div class="form-group">
                        <label for="description">Description du site</label>
                        <textarea name="description" id="description" rows="4" class="form-control" required> <?php echo $resto->description ?></textarea>
                    </div>
<!--                    Champ caché avec l'id du site-->
                        <input type="hidden" name="id" value="<?= $resto->id ?>"> <!-- Plus sécuriser comme ça si erreur vient directement de la requête -->
                    <input type="submit" class="btn btn-primary">
                    <?php endforeach;?>
                </form>
            </div>
        </div>
    </section>
</main>
