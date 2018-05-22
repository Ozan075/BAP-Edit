<?php
    //POST-ARRAY UITLEZEN
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mailadres = $_POST['mailadres'];

    // DATA IN DATABASE STOPPEN
    // CONNECTIE MAKEN MET DE DATABASE
    $host = 'localhost';
    $username = '24663';
    $password = 'nodqgfqy';
    $dbname = '24663_db';

    $dbc = mysqli_connect($host, $username, $password, $dbname) or die ('Error connecting.');
    // 2. OPDRACHT (QUERY) SCHRIJVEN VOOR DE DATABASE
    $query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres')";
    // 3. QUERY UITVOEREN
    $result = mysqli_query($dbc, $query) or die ('Error querying.');
    // 4. VERBINDING VERBREKEN
    mysqli_close($dbc);


    //BEVESTIGEN DAT DATA IN DATABASE STAAT
    if ($result) {
        echo 'De volgende gegevens zijn toegevoegd aan de database:<br>';
        echo $voornaam . '<br>';
        echo $tussenvoegsel . '<br>';
        echo $achternaam . '<br>';
        echo $mailadres . '<br>';
    } else {
        echo 'Sorry, er is iets misgegaan. Probeer het opnieuw.';
    }

