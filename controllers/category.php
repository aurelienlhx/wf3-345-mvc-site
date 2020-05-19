<?php

/**
 * Récupréation du model
 */
require_once(__DIR__.'/../models/produit.php');

/**
 * Récupération de toutes les catégories
 */
$categories = getAllCategories();


/**
 * Récupération des produits
 */
//Si la catégorie est renseignée dans l'url et si la catégorie n'est pas égale a "all"
if( isset($_GET['categorie']) && $_GET['categorie'] != 'all' ) {

	//Je récupère les produits selon l catégories renseignée dans l'url
	$products = getProductByCategory($_GET['categorie']);

}else{
	//Sinon je récupère tous les produits indépendamment de leur catégorie dans le cas où la catégorie n'est pas renseignée ou que la catégorie est égale a "all"
	$products = getAllProducts();
}

/**
 * Récupération du top 3 des produits
 */
$top3 = getBestSoldProducts(10);


/**
 * Renvoie de la vue des catégories
 */
require_once(__DIR__.'/../views/category.html.php');