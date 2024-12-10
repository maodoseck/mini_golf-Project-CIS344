<?php
function findReservations($db, $golferId) {
    $result = $db->query("SELECT * FROM TeeTimes WHERE golferId = ?", [$golferId]);
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
}
?>