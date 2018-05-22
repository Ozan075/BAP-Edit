<?php

// 0. Uitlezen van de POST-ARRAY
$subject = $_POST['subject'];
$message = $_POST['message'];
// 1. Connectie maken met de database
$dbc = mysqli_connect('localhost', '24663' , 'nodqgfqy' , '24663_db') or die ('Error connecting');
// 2. Kijken in de database en alle mailadressen tevoorschijn halen
$query = "SELECT mailadres FROM nieuwsbrief";
$result = mysqli_query($dbc,$query) or die ('Error querying.');

// 3. Loopje waarin een bericht wordt verzonden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'Mail verzonden naar:' . $row['mailadres'] . '<br>';
    // Variabelen voor de mail
    $to = $row['mailadres'];
    $headers = 'From: 24663@ma-web.nl';
    // Mail verzenden
    mail($to,$subject,$message,$headers);

}

echo 'Klaar met verzenden';