<?php

require_once __DIR__.'/../inc/init.php';

/**
 * Récupréation des catégories
 */
function getAllCategories() {
	$statement = executeRequete("SELECT DISTINCT categorie FROM produit");
	$resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $resultat;
}

/**
 * Récupération des produits selon leur catégorie
 */
function getProductByCategory($category) {
	$statement = executeRequete("SELECT id_produit, reference, titre, photo, prix, description FROM produit WHERE categorie = :categorie", array(':categorie' => $category));

	$resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $resultat;
}

/**
 * Récupération de tous les produits
 */
function getAllProducts() {
	$statement = executeRequete("SELECT id_produit, reference, titre, photo, prix, description FROM produit"); // pas de WHERE car on veut tous les produits
	$resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $resultat;
}

/**
 * Récupréation du top X des produits selon les ventes
 */
function getBestSoldProducts($number = 3){
	$statement = executeRequete("SELECT p.id_produit, p.photo, p.titre, p.prix FROM produit p INNER JOIN details_commande dc ON p.id_produit = dc.id_produit GROUP BY dc.id_produit ORDER BY SUM(dc.quantite) DESC LIMIT ".$number);
	$resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $resultat;
}

/**
 * Récupération du produit par ID
 */
function getProductById($id) {
	$statement = executeRequete("SELECT * FROM produit WHERE id_produit = :id_produit", array(':id_produit' => $id ));

	if($statement->rowCount() == 0) {
		return null;
	}else{
		$resultat = $statement->fetch(PDO::FETCH_ASSOC);
		return $resultat;
	}
}

/**
 * Récupération de produits aléatoires appartenant a une catégorie et excluant un produit par son id
 */
function getRandomProducts($categorie, $exclude_id_produit) {
	$statement = executeRequete("SELECT id_produit, photo, titre FROM produit WHERE categorie = :categorie AND id_produit <> :id_produit ORDER BY RAND() LIMIT 2", array(':categorie' => $categorie, ':id_produit' => $exclude_id_produit));
	$resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $resultat;
}

