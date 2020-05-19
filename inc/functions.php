<?php

// Fonction qui réalise les requêtes préparés
function executeRequete($requete, $param = array()){ // Le paramètre $requete attend de recevoir requête SQL sous forme de string
    // $param attend un array avec les marqueurs associés à leur valeur. Ce paramètre est optionnel, car on lui affecte un array vide par défaut.
    
    //On échappe les valeurs de $param car elles proviennent de l'internaute:
    foreach($param as $indice => $valeur){ // on parcourt $_POST en prenant chaque indice et chaque valeur
        $param[$indice] = htmlspecialchars($valeur, ENT_QUOTES); // on évite les injections XSS et CSS.
        // A chaque tour de boucle on prend la valeur du tableau que l'on échappe et que l'on réaffecte à son emplacement d'origine.
    }

    // Requête préparé:
    global $pdo; // on accède a la variable globale définie à l'extérieur de cette fonction dans le fichier init.php
    $resultat = $pdo->prepare($requete); // on prépare la requête envoyée à notre fonction
    $succes = $resultat->execute($param); // puis on execute la requête en lui passant le tableau qui associe les marqueurs et les valeurs
    // Excute retourn etjs un boolean (true = succes, false = echec)
    if($succes){
        return $resultat; // On retourne l'objet PDOStatement en cas de succès, car nous en avons besoin quand on fait une requête de selection
    }else{
        return false; // On retourne false en cas d'erreur sur la requête
    }
}