<?php
require_once("./src/connect.php");
$new_email = "jeanpaulgepetoamodifiesonadresse@gmail.com";
$current_email = "jeanpaulgepeto@gmail.com";

// Requête SQL pour modifier l'adresse e-mail du nouvel utilisateur
$sql = "UPDATE users SET email = :new_email WHERE email = :current_email";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->bindValue(':new_email', $new_email);
$query->bindValue(':current_email', $current_email);
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
