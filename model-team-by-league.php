<?php
function selectteambyleague($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.team_id, team_name, team_leauge, country FROM `team` t join league l on l.team_id = t.team_id where l.league_id=?");
       $stmt->bind_param("i", $pid);
      $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
