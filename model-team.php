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
        $smt = $conn->prepare("INSERT INTO 'team'('team_name', 'team_league') VALUES (Barcelona, LaLiga)");
        $smt->bind_param("ss", $tname, $tleague);
        $success = $smt->execute();
        $conn->close();
        return $success;
         } catch (Exception $e) {
        $conn->close();
        throw $e;
         }
}

function insertteam($tname, $tleague) {
    try {
        $conn = get_db_connection();
        $smt = $conn->prepare("INSERT INTO 'team'('team_name', 'team_league') VALUES (PSG, Serie A)");
        $smt->bind_param("ss", $tname, $tleague);
        $success = $smt->execute();
        $conn->close();
        return $success;
         } catch (Exception $e) {
        $conn->close();
        throw $e;
         }
}

function insertteam($tname, $tleague) {
    try {
        $conn = get_db_connection();
        $smt = $conn->prepare("INSERT INTO 'team'('team_name', 'team_league') VALUES (Real Madrid, LaLiga)");
        $smt->bind_param("ss", $tname, $tleague);
        $success = $smt->execute();
        $conn->close();
        return $success;
         } catch (Exception $e) {
        $conn->close();
        throw $e;
         }
}

function insertteam($tname, $tleague) {
    try {
        $conn = get_db_connection();
        $smt = $conn->prepare("INSERT INTO 'team'('team_name', 'team_league') VALUES (Inter Miami, MLS)");
        $smt->bind_param("ss", $tname, $tleague);
        $success = $smt->execute();
        $conn->close();
        return $success;
         } catch (Exception $e) {
        $conn->close();
        throw $e;
         }
}

