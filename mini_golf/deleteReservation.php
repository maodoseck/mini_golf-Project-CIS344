<?php
function deleteReservation($db, $teeTimeId) {
    $db->query("DELETE FROM TeeTimes WHERE teeTimeId = ?", [$teeTimeId]);
    echo "Reservation deleted successfully.";
}
?>