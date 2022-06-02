<?php
require_once('../include/init.php');



require_once('./includeAdmin/header.php');
?>



<form method="POST">
    <div class="row mt-5 offset-2">
        <div class="col-md-4">
            <label class="form-label" for="date_arrivee"><div class="badge badge-dark text-dark">Date d'arrivée</div></label>
            <input class="form-control" type="date" name="date_arrivee" value="<?= $date_arrivee ?>" id="date_arrivee"  placeholder="date_arrivee">
        </div>
        <div class="col-md-4">
            <label class="form-label" for="date_depart"><div class="badge badge-dark text-dark">Date d'arrivée</div></label>
            <input class="form-control" type="date" name="date_depart" value="<?= $date_depart ?>" id="date_depart"  placeholder="date_depart">
        </div>
    </div>
    <div class="row mt-5 offset-2">
        <div class="col-md-4">
            <label class="form-label" for="id_produit"><div class="badge badge-dark text-dark">produit</div></label>
            <select class="form-select" name="ville" id="ville">
                    <option value="">Choisissez la produit</option>
                    <option class="text-dark" value=" paris">Paris</option>
                    <option class="text-dark" value=" lyon" >Lyon</option>
                    <option class="text-dark" value=" marseille ">Marseille</option>
                </select>
        </div>
        <div class="col-md-4">
            <label class="form-label" for="prix"><div class="badge badge-dark text-dark">Prix</div></label>
            <input class="form-control" type="text" name="prix" value="" id="prix"  placeholder="prix">
        </div>
    </div>
    <div class="col-md-1 mt-5">
        <button type="submit" class="btn btn-outline-dark offset-md-4 my-2">Valider</button>
    </div>
</form>


<table class="table  text-center">
<?php $affciheProduits = $pdo->query("SELECT * FROM produit ORDER BY id_produit ASC") ?>
    <thead>
        <tr>
            <?php for($i = 0; $i < $affciheProduits->columnCount(); $i++):
                $colonne = $affciheProduits->getColumnMeta($i) ?>
                <th><?= $colonne['name'] ?></th>
            <?php endfor?>
            <th colspan='2'>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while( $produit = $affciheProduits->fetch(PDO::FETCH_ASSOC) ): ?>
        <tr>
            <?php foreach( $produit as $key => $value): ?>
                <?php if( $key == 'photo'): ?>
                    <td><img class='img-fluid' src="<?= URL . "./img/" . $value ?> " width ="50"></td>
                <?php else: ?>
                    <!-- pour tous les autres cas, RAS, affichage de la valeur simplement -->
                    <td><?= $value ?></td>
                <?php endif ?>
            <?php endforeach ?>
            <td><a href='?action=update&id_produit=<?= $produit['id_produit'] ?>'><i class="bi bi-pencil-square text-white" style="font-size: 1.5rem;"></i></a></td>
            <td><a data-href="?action=delete&id_produit=<?= $produit['id_produit'] ?>" data-toggle="modal" data-target="#confirm-delete"><i class="bi bi-trash text-danger" style="font-size: 1.5rem;"></i></a></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>





<?php require_once('./includeAdmin/footer.php') ?>