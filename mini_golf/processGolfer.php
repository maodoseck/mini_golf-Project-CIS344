<?php
require_once 'MiniGolfDatabase.php';

$db = new MiniGolfDatabase();
$golferName = $_POST['golferName'];
$contactInfo = $_POST['contactInfo'];

$db->query("INSERT INTO Golfers (golferName, contactInfo) VALUES (?, ?)", [$golferName, $contactInfo]);
echo "Golfer added successfully! <a href='index.php'>Go back</a>";
?>