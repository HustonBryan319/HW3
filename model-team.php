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

function insertteam($tname, $tleague) {
    try {
        $conn = get_db_connection();
        $smt = $conn->prepare("INSERT INTO 'team'('team_name', 'team_league') VALUES (?, ?)");
        $smt->bind_param("ss", $tname, $tleague);
        $success = $smt->execute();
        $conn->close();
        return $success;
         } catch (Exeption $e) {
        $conn->close();
        throw $e;
         }
}


function insertteam($tname, $tleague) {
    try {
        $conn = get_db_connection();
        $smt = $conn->prepare("INSERT INTO 'team'('team_name', 'team_league') VALUES (?, ?)");
        $smt->bind_param("ss", $tname, $tleague);
        $success = $smt->execute();
        $conn->close();
        return $success;
         } catch (Exeption $e) {
        $conn->close();
        throw $e;
         }
}

