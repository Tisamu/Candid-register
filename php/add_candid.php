<?php

require('../db/database.class.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$rate = $_POST['rate'];
$comment = $_POST['comment'];

$db = new Database();

$db->query('INSERT INTO candidats (fname,lname,age,rate,comment) VALUES (:fname, :lname, :age, :rate, :comment)');

$db->bind(':fname', $fname);
$db->bind(':lname', $lname);
$db->bind(':age', $age);
$db->bind(':rate', $rate);
$db->bind(':comment', $comment);

$db->execute();

echo('<p style="color: red;">Candidat ajouté.</p>')

?>