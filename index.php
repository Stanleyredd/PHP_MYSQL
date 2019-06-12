<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 12-6-2019
 * Time: 09:17
 */
//$dbc = mysqli_connect('localhost', 'root', '', 'mijnschool') or die ('Error connecting');
//
//$query = "SELECT * FROM klasgenoten";
//
//$result = mysqli_query($dbc, $query) or die ('Error querying');
//
//while ($row = mysqli_fetch_assoc($result)){
//    echo $row['klasgenoot_id'].'<br>'.$row['voornaam'].'<br>'.$row['tussenvoegsel'].'<br>'.$row['achternaam'].'<br>';
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuwsbrief</title>
</head>
<body>
<h1>Nieuwsbrief</h1>
<h2>Voor bezoekers</h2>
<a href="inschrijven.php">inschrijven</a><br>
<a href="uitschrijven.php">Uitschrijven</a><br>
<h2>voor admin</h2>
<a href="versturen.php">Nieuwsbrief versturen</a><br>
<a href="beheren.php">Mailinglijst beheren</a>



</body>
</html>
