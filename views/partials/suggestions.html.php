<?php foreach($suggestions as $suggestion): ?>
	
        <div class="col-sm-3">
            <a href="index.php?controller=product&id_produit=<?php echo $product['id_produit'] ?>">
                <img 
                	src="<?php echo $product['photo'] ?>" 
                	alt="<?php echo $product['titre'] ?>" 
                	class="img-fluid"
                >
            </a>	
    
            <h4><?php echo ucfirst($product['titre']) ?></h4>
    
        </div>

<?php endforeach; ?>