<?php
function selectteam() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name, team_leauge FROM `team`");
       
      $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertteam($tname, tleague) {
    try {
        $conn = get_db_connection();
        $smt = $conn->prepare("INSERT INTO 'team'('team_name', 'team_league') VALUES (?, ?)");
        $smt->bind_param("ss", $uEmail);
        $smt->execute();
        $result = $smt->get_result();
        $conn->close();
        return $result;
        
    }
}
