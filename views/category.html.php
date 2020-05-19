<?php

/**
 * Intégration du header
 */
require_once(__DIR__.'/partials/header.html.php');

?>



<h1 class="mt-4 mb-4">Boutique</h1>

<div class="row">

	<div class="col-md-3">
		<?php 
			// pour afficher les catégories de produits
			require_once(__DIR__.'/partials/contenu_gauche.html.php');
		?>
	</div>

	<div class="col-md-9">
		<div class="row">
			<?php 
				// pour afficher les produits 
				require_once(__DIR__.'/partials/contenu_droite.html.php');
			?>
		</div>	
	</div>
	
</div><!-- .row -->

<hr>

<div class="row">
	<h4 class="col-12">Le top des ventes</h4>
	<?php 
		// pour afficher le top des ventes 
		require_once(__DIR__.'/partials/affichage_top.html.php');
	?>
</div>



<?php

/**
 * Intégration du footer
 */
require_once(__DIR__.'/partials/footer.html.php');

?>