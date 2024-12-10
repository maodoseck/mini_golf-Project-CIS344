<?php
require_once 'MiniGolfDatabase.php';

$db = new MiniGolfDatabase();
$golferName = $_POST['golferName'];
$teeTime = $_POST['teeTime'];
$numberOfPlayers = $_POST['numberOfPlayers'];
$specialRequests = $_POST['specialRequests'];

$result = $db->query("SELECT golferId FROM Golfers WHERE golferName = ?", [$golferName]);
$golfer = $result->fetch_assoc();

if (!$golfer) {
    $db->query("INSERT INTO Golfers (golferName, contactInfo) VALUES (?, '')", [$golferName]);
    $golferId = $db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
} else {
    $golferId = $golfer['golferId'];
}

$db->query("INSERT INTO TeeTimes (golferId, teeTime, numberOfPlayers, specialRequests) VALUES (?, ?, ?, ?)", 
           [$golferId, $teeTime, $numberOfPlayers, $specialRequests]);

echo "Reservation added successfully! <a href='index.php'>Go back</a>";
?>