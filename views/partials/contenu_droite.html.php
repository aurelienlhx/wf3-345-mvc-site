
<?php foreach($products as $product): ?>

<div class="col-sm-4 mb-4">
	<div class="card">

		<!-- photo cliquable -->
		<a href="fiche_produit.php?id_produit=<?php echo $product['id_produit'] ?>">
			<img 
			src="<?php echo $product['photo'] ?>" 
			class="card-img-top" 
			alt="<?php echo $product['titre'] ?>"
			>
		</a>

		<!-- infos du produit -->
		<div class="card-body">				

			<h4>
				<?php echo $product['titre'] ?>
			</h4>
			<h5>
				<?php 
					// number_format() reformate un nombre avec ici 2 décimales, une vigule comme séparateur des décimales, et un vide comme séparateur des milliers
					echo number_format($product['prix'], 2, ',', '');
				?>  €
			</h5> 
			<p>
				<?php echo $product['description'] ?>
			</p>
		</div>

	</div>
</div> 

<?php endforeach; ?>