<?php

//array uitlezen
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$mailadres = $_POST['mailadres'];

//data in database stoppen
 // stap 1: Verbinding met de database
$dbc = mysqli_connect('localhost','root','', 'mijnschool')  or die("kon niet verbinden met de database.");

// stap 2: opdracht (query) schrijven voor de database
$query = "INSERT INTO klasgenoten VALUES (0,'$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres')";

//stap 3: query uitvoeren
$result = mysqli_query($dbc,$query) or die("error querying");

//stap 4: verbinding verbreken
mysqli_close($dbc);





//bevestigen dat data in database zit
if ($result) {
    echo 'de volgende gegevens zijn toegevoegd aan de database'. '<br>';
    echo $voornaam. '<br>';
    echo $tussenvoegsel. '<br>';
    echo $achternaam. '<br>';
    echo $mailadres. '<br>';
}else{
    echo 'Sorry er is iets misgegeaan. probeer het opnieuw';
}


?>