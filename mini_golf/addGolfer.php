<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Golfer</title>
</head>
<body>
    <h2>Add a New Golfer</h2>
    <form action="processGolfer.php" method="POST">
        <label for="golferName">Golfer Name:</label>
        <input type="text" id="golferName" name="golferName" required>
        <br>
        <label for="contactInfo">Contact Info:</label>
        <input type="text" id="contactInfo" name="contactInfo" required>
        <br>
        <button type="submit">Add Golfer</button>
    </form>
</body>
</html>