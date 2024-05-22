<?php
require_once("./src/connect.php");

// Requête SQL pour récupérer le nombre de personnes pour chaque genre
$sql = "SELECT gender, COUNT(*) as gender_count FROM users GROUP BY gender ORDER BY gender_count DESC";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();
// Stockage du résultat dans un tableau associatif [personne1, personne2, ...]
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once("./src/close.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender stats</title>
</head>
<body>
    <?php include_once('./components/nav.php') ?>
    <!-- <pre><?= print_r($result) ?></pre> -->
    <div>
        <?php
            foreach ($result as $user) {
                // faire un echo du nombre de personnes pour chaque genre
                echo $user['gender'] . " : " . $user['gender_count'] . "<br>";

            }
        ?>
    </div>
</body>
</html>