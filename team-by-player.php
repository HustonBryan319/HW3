<?php
require_once("util-db.php");
require_once("model-team-by-player.php");

$pageTitle = "team-by-player";
include "view-header.php";
$player = selectteambyplayer($_GET['id']);
include "view-team-by-player.php"; 
include "view-footer.php";
?>
