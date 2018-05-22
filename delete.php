<?php
$id = $_GET['id'];
$dbc = mysqli_connect('localhost', '24663' , 'nodqgfqy' , '24663_db') or die ('Error connecting');
$query = "DELETE FROM nieuwsbrief WHERE id = '$id' ";
$result = mysqli_query($dbc,$query) or die ('Error deleting.');
header( "Location: beheren.php");