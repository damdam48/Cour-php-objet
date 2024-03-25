<?php

require_once '/app/Classes/Autoloader.php';


use App\Client\Compte;
use App\Autoloader;
use App\Banque\CompteCourant;

Autoloader::register();



// require_once '/app/Classes/Banque/CompteCourant.php';
// require_once '/app/Classes/Banque/Compte.php';
// require_once '/app/Classes/Banque/CompteEpargne.php';
// require_once '/app/Classes/Client/Compte.php';

$client = new Compte("Roberto", "le creput", "roberto@gmail.com");

$compte = new CompteCourant($client, 'FR2156435131313', 1000, 500);

var_dump($client, $compte);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Coucou</h1>
</body>

</html>