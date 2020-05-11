<!-- Derreumaux Valentin -  24/04/2020  10:35 -->
<?php
$sql =  "SELECT id, category FROM category ORDER BY category";
$result = $dbh->prepare($sql);
$result->execute();
$categories = $result->fetchAll();
?>
<main class="container">
    <section id="insert">
        <h2 class="display-4 my-3">Insertion d'un restaurant</h2>
        <div class="row">
            <div class="col-md-12">
                <form action="src/insertsite.php" method="post">
                    <div class="form-group">
                        <label for="name">Nom du restaurant</label>
                        <input type="text" id="name" name="name" placeholder="Nom du site" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="url">URL du restaurant</label>
                        <input type="url" id="url" name="url" placeholder="URL du site" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie du restaurant</label>
                        <select id="category" name="category" required class="form-control">
                            <option value="" disabled selected>Sélectionnez...</option>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category->id ?>"><?= $category->category ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <label for="note">Evaluation du restaurant</label>
                    <select id="note" name="note" required class="form-control">
                        <option value="" disabled selected>Sélectionnez...</option>
                        <?php for($i = 1; $i <= 5; $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>

                        <!--                        <option value="1">⭐</option>-->
                        <!--                        <option value="2">⭐⭐</option>-->
                        <!--                        <option value="3">⭐⭐⭐</option>-->
                        <!--                        <option value="4">⭐⭐⭐⭐</option>-->
                        <!--                        <option value="5">⭐⭐⭐⭐⭐</option>-->
                    </select>
                    <div class="form-group">
                        <label for="description">Description du restaurant</label>
                        <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>
</main>
