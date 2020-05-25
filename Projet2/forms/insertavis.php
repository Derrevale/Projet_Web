<!-- Vincent Brichant -  14/05/2020  -->
<?php
$sql =  "SELECT id, name FROM sites ORDER BY name";
$result = $dbh->prepare($sql);
$result->execute();
$name = $result->fetchAll();
?>
<main class="container">
    <section id="insert">
        <h2 class="display-4 my-3">Insertion d'un avis </h2>
        <div class="row">
            <div class="col-md-12">
                <form action="tools/insertavis.php" method="post">
                    <div class="form-group">
                        <label for="pseudo">Utilisateur</label>
                        <input type="text" id="pseudo" name="pseudo"  readonly value="<?= $_SESSION['login'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Nom du restaurant</label>
                        <select id="name" name="name" required class="form-control">
                            <option value="" disabled selected>Sélectionnez...</option>
                            <?php foreach ($name as $name) : ?>
                                <option value="<?= $name->name ?>"><?= $name->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <label for="note">Note du restaurant</label>
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
                        <label for="avis">Description du restaurant</label>
                        <textarea name="avis" id="avis" rows="4" class="form-control" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>
</main>
