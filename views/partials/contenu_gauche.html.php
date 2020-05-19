
<div class="list-group mb-4">
	
	<!-- Lien "tous les produits" -->
	<a href="?controller=category&categorie=all" class="list-group-item" > Tous les produits </a>

	<!-- Les autres catégories provenant de la BDD -->
	<?php foreach($categories as $category) { ?>
			<a 
				href="index.php?controller=category&categorie=<?php echo $category['categorie'] ?>" 
				class="list-group-item"
			>
				<?php echo $category['categorie'] ?>
			</a>
	<?php } ?>

</div>