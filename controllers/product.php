<?php

/**
 * Récupréation du model
 */
require_once(__DIR__.'/../models/produit.php');

/**
 * Récupération du produit par son ID
 */

//Si l'id du produit éxiste dans l'url et qu'il n'est pas vide
if(isset($_GET['id_produit']) && !empty($_GET['id_produit'])) {
	//On tente de récupérer le produit depuis le modele
	$product = getProductById($_GET['id_produit']);

	//Si le produit n'existe pas dans la base de données on redirige vers l'index.php
	if($product == null) {
		header('location:index.php');
    	exit;
	}
}
else {
	//Si l'id du produit n'existe pas dans l'url on redirige vers l'index.php;
	header('location:index.php');
    exit;
}


//Si le produit existe on arrive jusqu'ici et on poursuit

//On récupère des produits de manière aléatoire que l'on va utiliser comme suggestion de produits
//Les produits aléatoires vont être piochés dans la catégorie qui correspond au produit courant
//Les produits aléatoire vont exclure le produit courant
$suggestions = getRandomProducts($product['categorie'],$product['id_produit']);


/**
 * Renvoie de la vue des catégories
 */
require_once(__DIR__.'/../views/product.html.php');