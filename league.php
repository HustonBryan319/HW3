<?php
require_once("util-db.php");
require_once("model-league.php");

$pageTitle = "league";
include "view-header.php";
$player = selectleague();
include "view-player.php"; 
include "view-footer.php";
?>
