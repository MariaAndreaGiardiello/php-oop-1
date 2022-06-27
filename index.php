<?php
require_once __DIR__ . '/classes/Movie.php';

$movies = [
    new Movie('Soul', 'Pete Docter', '2020', 'Walt Disney Studios Motion Pictures', 'Avventura', true ),
    new Movie('Revenant - Redivivo','Alejandro González Iñárritu', '2016', '20th Century Studios', 'Avventura', true ),
    new Movie('CODA - I segni del cuore','Sian Heder', '2021', 'Apple TV+', 'Drammatico', true ),
    new Movie('House of Gucci',' Ridley Scott', '2021', 'Universal Pictures', 'Drammatico', false ),
    new Movie('Quo vado?','Gennaor Nunziante', '2016', 'Medusa film', 'Commedia', false ),
    new Movie('Sandy Wexler','Steven Brill', '2017', 'Netflix', 'Commedia', false ),
    new Movie('Orphan','Jaume Collet-Serra', '2009', 'Warner Bros. Pictures, StudioCanal, StudioCanal UK', 'Horror', false ),
    new Movie('Il silenzio degli innocenti','Jonathan Demme', '1991', 'Orion Pictures', 'Horror', true ),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movie List</h1>
</body>
</html>