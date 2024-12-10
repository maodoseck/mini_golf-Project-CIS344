<?php
require_once 'MiniGolfDatabase.php';

function addGolfer($db, $golferName, $contactInfo) {
    $db->query("INSERT INTO Golfers (golferName, contactInfo) VALUES (?, ?)", [$golferName, $contactInfo]);
    echo "Golfer added successfully.";
}
?>