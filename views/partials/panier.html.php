<?php  
// si le stock est disponible on affiche le bouton
if($product['stock'] > 0): 
?>

    <form method="post" action="panier.php" class="my-4">
        
        <input type="hidden" name="id_produit" value="<?php echo $product['id_produit'] ?>">            
        <select name="quantite" class="custom-select col-3">
            <?php 
                // on fait 5 tours de boucle max à concurrence du stock disponible (si le stock est inférieur à 5, on s'arrête à la quantité en stock)
                for($i = 1; $i <= $product['stock'] && $i <= 5 ;$i ++):
            ?>
               <option><?php echo $i ?></option>

            <?php endfor; ?> 
        </select>

        <input type="submit" name="ajout_panier" value="ajouter au panier" class="btn btn-info col-8 offset-1">

    </from>

<?php 
//sinon on affiche "rupture de stock"
else:
?> 
    <p>Produit en ruptue de stock</p>

<?php endif; ?>