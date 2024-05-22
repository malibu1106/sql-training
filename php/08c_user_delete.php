<?php
require_once("./src/connect.php");
$userEmail ="jeanpaulgepetoamodifiesonadresse@gmail.com";

// Requête SQL pour supprimer le nouvel utilisateur
$sql = "DELETE FROM users WHERE email= :userEmail";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->bindValue(':userEmail', $userEmail);
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
