<?php

$bdd = new PDO('mysql:host=localhost;dbname=tsduillier;charset=utf8', 'root', '');

$query = $bdd->query("SELECT date FROM jour ORDER BY date DESC LIMIT 0,1");

$query->execute();

echo json_encode($query->fetchAll());
