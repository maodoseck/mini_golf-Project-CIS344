<?php
function addSpecialRequest($db, $teeTimeId, $requests) {
    $db->query("UPDATE TeeTimes SET specialRequests = ? WHERE teeTimeId = ?", [$requests, $teeTimeId]);
    echo "Special request added successfully.";
}
?>