<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Reservation</title>
</head>
<body>
    <h2>Make a Reservation</h2>
    <form action="processReservation.php" method="POST">
        <label for="golferName">Golfer Name:</label>
        <input type="text" id="golferName" name="golferName" required>
        <br>
        <label for="teeTime">Tee Time:</label>
        <input type="datetime-local" id="teeTime" name="teeTime" required>
        <br>
        <label for="numberOfPlayers">Number of Players:</label>
        <input type="number" id="numberOfPlayers" name="numberOfPlayers" min="1" required>
        <br>
        <label for="specialRequests">Special Requests:</label>
        <input type="text" id="specialRequests" name="specialRequests">
        <br>
        <button type="submit">Add Reservation</button>
    </form>
</body>
</html>