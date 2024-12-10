<?php
require_once 'MiniGolfFunctions.php';

$db = new MiniGolfDatabase();

addGolfer($db, "Amy Green", "amy.green@example.com");

addReservation($db, "Jane Doe", "2024-12-15 10:00:00", 4, "Birthday celebration");

viewReservations($db);

getGolferPreferences($db, 1);

addSpecialRequest($db, 1, "Extra golf balls");

findReservations($db, 1);

deleteReservation($db, 1);
?>