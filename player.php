<?php
require_once("util-db.php");
require_once("model-player.php");

$pageTitle = "player";
include "view-header.php";
$player = selectplayer();
include "view-player.php"; 
include "view-footer.php";
?>
