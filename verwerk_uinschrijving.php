<?php
 //formulier uitlezen (data binnenhalen)
$mailadres = $_POST['mailadres'];

//connectie maken met de database
$dbc = mysqli_connect('localhost','root','', 'mijnschool')  or die("kon niet verbinden met de database.");


//query schrijven voor zoeken naar data
$query = "SELECT * FROM klasgenoten WHERE mailadres='$mailadres'";

//query uitvoeren
$result = mysqli_query($dbc, $query) or die('ERROR QUERYING select');
echo 'query geslaagd! <br>';

//Tellen hoeveel regels we nu hebben
$number_of_rows = mysqli_num_rows($result);
//testen of er regels zijn en daar conclusies aan verbinden
if ($number_of_rows == 0 ){
    echo "helaas het mailadres ". $mailadres. " zit niet in de database.<br>";
    echo '<a href="verwerk_uinschrijving.php">Klik hier om het nogmaals te proberen</a>';
    exit();

}else{
    echo "hoera! het mailadres ". $mailadres." is gevonden in de database";
}
//query schrijven voor verwijdere data
$query = "DELETE FROM klasgenoten WHERE mailadres= '$mailadres'";
//query uitvoeren
$result = mysqli_query($dbc, $query) or die('ERROR QUERYING delete');

//connectie verbreken
mysqli_close($dbc);

//verslag doen van het resultaat
echo 'het mailadres '.$mailadres. ' is verwijderd uit de database. <br>';
echo '<a href="index.php">Klik hier om naar de homepage te gaan</a>';



?>

