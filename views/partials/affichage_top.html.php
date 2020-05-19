
<?php foreach($top3 as $product): ?>
	
	<div class="col-sm-3">
		<a href="fiche_produit.php?id_produit=<?php echo $product['id_produit'] ?>">
			<img 
				src="<?php echo $product['photo'] ?>" 
				class="img-fluid" 
				alt="<?php echo $product['titre'] ?>"
			>
		</a>
		<h5>
			<?php echo $product['titre'] ?>
		</h5>				   
		<h5>
			<?php echo $product['prix'] ?> €
		</h5>
		<a href="fiche_produit.php?id_produit=<?php echo $product['id_produit'] ?>">voir le produit</a>			   
	</div>

<?php endforeach; ?>
	
	