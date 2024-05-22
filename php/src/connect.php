<?php

const DBHOST = 'db'; // nom du service dans le docker-compose.yml
const DBNAME = 'introsql';
const DBUSER = 'test';
const DBPASS = 'test';

$dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8';

// On essaie de se connecter
try {
  $db = new PDO($dsn, DBUSER, DBPASS);
}
// On capture les exceptions et on affiche le message d'erreur
catch(PDOException $e){
  echo "connection failed: " . $e->getMessage() . "</br>";
}