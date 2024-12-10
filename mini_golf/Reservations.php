<?php 
function addReservation($db, $golferName, $teeTime, $numberOfPlayers, $specialRequests) {
    $result = $db->query("SELECT golferId FROM Golfers WHERE golferName = ?", [$golferName]);
    $golfer = $result->fetch_assoc();

    if (!$golfer) {
        addGolfer($db, $golferName, '');
        $golferId = $db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
    } else {
        $golferId = $golfer['golferId'];
    }

    $db->query("INSERT INTO TeeTimes (golferId, teeTime, numberOfPlayers, specialRequests) VALUES (?, ?, ?, ?)", 
               [$golferId, $teeTime, $numberOfPlayers, $specialRequests]);
    echo "Reservation added successfully.";
}
?> 