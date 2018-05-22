<?php
// FORMULIER UITLEZEN
$mailadres = $_POST['mailadres'];
// CONNECTIE MAKEN MET DE DATABASE
$host = 'localhost';
$username = '24663';
$password = 'nodqgfqy';
$dbname = '24663_db';

$dbc = mysqli_connect($host, $username, $password, $dbname) or die ('Error connecting.');
echo 'Connectie geslaagd!';
// QUERY BEDENKEN
$query = "SELECT * FROM nieuwsbrief WHERE mailadres ='$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc, $query) or die ('Error querying.');
// TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result);
// TESTEN OF ER REGELS ZIJN EN DAAR CONCLUSIES AAN VERBINDEN
if ($number_of_rows == 0) {
    echo 'Helaas, het mailadres ' . $mailadres . ' staat niet in de database.<br>';
    echo '<a href="uitschrijven.php">Klik hier om het nogmaals te proberen...</a><br><br>';
    exit();
} else {
    echo 'Hoera! Het mailadres ' . $mailadres . ' is gevonden in de database!';
}
mysqli_close($dbc)
?>

<a href="index.php">Klik hier om terug te keren naar de homepage.</a><br><br>
