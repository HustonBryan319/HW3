<?php
require_once("util-db.php");
require_once("model-team-by-league.php");

$pageTitle = "team by league";
include "view-header.php";
$team = selectteambyleague();
include "view-team-by-league.php"; 
include "view-footer.php";
?>
