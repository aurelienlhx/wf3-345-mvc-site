<?php

require_once 'functions.php';

// Connexion à la BDD
$pdo = new PDO(
	'mysql:host=localhost;dbname=site', // driver mysql, nom du serveur, suivi du nom de la BDD
    'root', // login BDD
    'root', // mot de passe de la BDD
    array(
    	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // pour afficher les erreurs sql dans le navigateur
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // définit le jeu de caractère des échanges avec la BDD
   	));


// Constante qui contient le chemin du site
define('RACINE_SITE', '/formations/wf3-345/mvc/site-mvc/'); // ici on indique le dossier dans lequel se trouve le site a partir de localhost. S'il n'est dans aucun dossier, on met un / tout seul