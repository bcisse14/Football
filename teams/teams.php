<?php


$dsn = 'mysql:dbname=cinema;host=localhost';
$user = 'bafode';
$password = '04082023';
$dbh = new PDO($dsn, $user, $password);

$name = $_POST['name'];
$description = $_POST['description'];
$Creation = $_POST['Creation'];
$Championnat_Actuel = $_POST['Championnat_Actuel'];
$Coupe_Européenne = $_POST['Coupe_Européenne'];
$Capitaine = $_POST['Capitaine'];

$sth = $dbh->prepare('INSERT IGNORE INTO teams(clubname,description,Creation,Championnat_Actuel,Coupe_Européenne,Capitaine) VALUES ("{$name}","{$description}","{$Creation}","{$Championnat_Actuel}","{$Coupe_Européenne}","{$Capitaine}")');
$sth->execute();
