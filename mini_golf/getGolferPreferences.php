<?php  
function getGolferPreferences($db, $golferId) {
    $result = $db->query("SELECT * FROM GolferPreferences WHERE golferId = ?", [$golferId]);
    $preferences = $result->fetch_assoc();
    print_r($preferences);
}
?>