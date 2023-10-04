<?php
function selectleague() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT league_id, player_id, team_id, country FROM `league`");
       
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
