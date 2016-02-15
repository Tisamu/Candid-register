<?php

require('../db/database.class.php');

$candid_id = $_POST['candid_id'];

$db = new Database();

$db->query('SELECT age,rate,comment FROM candidats WHERE id_candidat = :id');

$db->bind(':id', $candid_id);

$person = $db->single();

echo $person['age'].'|'.$person['rate'].'|'.$person['comment'];
?>

