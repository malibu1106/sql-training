<?php
require_once("./src/connect.php");

// Requête SQL pour supprimer le nouvel utilisateur
$sql = "";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
