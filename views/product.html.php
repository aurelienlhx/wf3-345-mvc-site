<?php

/**
 * Intégration du header
 */
require_once(__DIR__.'/partials/header.html.php');

?>

<div class="row">
    <div class="col-12 mt-4">
        <h1><?php echo $product['titre']; ?></h1>
    </div>

    <div class="col-md-8">
        <img src="<?php echo $product['photo']; ?>" alt="<?php echo $product['titre']; ?>" class="img-fluid"> 
        <!--on peut remplacer l'ouverture php suivi d'un echo par <point interrogation =--> 
    </div>
    <div class="col-md-4">
        <h3>Description</h3>
        <p><?php echo $product['description']; ?></p>

        <h3>Détails</h3>
        <ul>
            <li>Catégorie : <?php echo $product['categorie']; ?></li>
            <li>Couleur : <?php echo $product['couleur']; ?></li>
            <li>Taille : <?php echo $product['taille']; ?></li>
        </ul>

        <h4>Prix : <?php echo number_format($product['prix'], 2, ',', ''); ?> €</h4>
        
        <?php require_once(__DIR__.'/partials/panier.html.php'); ?>

        <p>
            <a href="index.php?controller=category&categorie=<?php echo $product['categorie']; ?>">
                Retour vers la catégorie '<?php echo $product['categorie']; ?>'
            </a>
        </p>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <h3>Suggestion de produits</h3>
    </div>
    <?php require_once(__DIR__.'/partials/suggestions.html.php'); ?>
</div>

<script>
// script d'affichage de la modale d'ajout au panier
$(function(){
    $('#modal-panier').modal('show'); // pour déclencher l'affichage
});
</script>

<?php

/**
 * Intégration du footer
 */
require_once(__DIR__.'/partials/footer.html.php');

?>