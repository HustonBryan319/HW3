<?php
require_once("util-db.php");
require_once("model-league.php");

$pageTitle = "league";
include "view-header.php";
$team = selectleague();
include "view-league.php"; 
include "view-footer.php";
?>
