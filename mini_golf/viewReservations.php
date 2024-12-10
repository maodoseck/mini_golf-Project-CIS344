<?php
require_once 'MiniGolfDatabase.php';

$db = new MiniGolfDatabase();
$reservations = $db->query("SELECT t.teeTimeId, g.golferName, t.teeTime, t.numberOfPlayers, t.specialRequests
                            FROM TeeTimes t
                            JOIN Golfers g ON t.golferId = g.golferId")->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reservations</title>
</head>
<body>
    <h2>Reservations</h2>
    <table border="1">
        <tr>
            <th>Reservation ID</th>
            <th>Golfer Name</th>
            <th>Tee Time</th>
            <th>Number of Players</th>
            <th>Special Requests</th>
        </tr>
        <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= htmlspecialchars($reservation['teeTimeId']) ?></td>
                <td><?= htmlspecialchars($reservation['golferName']) ?></td>
                <td><?= htmlspecialchars($reservation['teeTime']) ?></td>
                <td><?= htmlspecialchars($reservation['numberOfPlayers']) ?></td>
                <td><?= htmlspecialchars($reservation['specialRequests']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>