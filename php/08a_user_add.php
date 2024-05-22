<?php
require_once("./src/connect.php");

// Données de l'utilisateur à insérer
$first_name = "Roberto";
$last_name = "De Sousa";
$email = "jeanpaulgepeto@gmail.com";
$gender = "Male";
$birth_date = "1992-11-06";
$country = "France";

// Requête SQL pour insérer un nouvel utilisateur
$sql = "INSERT INTO users (first_name, last_name, email, gender, birth_date, country) VALUES (:first_name, :last_name, :email, :gender, :birth_date, :country)";

// Préparation de la requête
$query = $db->prepare($sql);

// Liaison des paramètres
$query->bindValue(':first_name', $first_name);
$query->bindValue(':last_name', $last_name);
$query->bindValue(':email', $email);
$query->bindValue(':gender', $gender);
$query->bindValue(':birth_date', $birth_date);
$query->bindValue(':country', $country);

// Exécution de la requête
if ($query->execute()) {
    // Redirection vers la page d'accueil en cas de succès
    header('Location: ./index.php');
    exit();
} else {
    echo "Erreur lors de l'ajout de l'utilisateur.";
}

require_once("./src/close.php");
?>