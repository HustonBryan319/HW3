<?php
require_once("util-db.php");
require_once("model-team.php");

$pageTitle = "team";
include "view-header.php";
$team = selectteam();
include "view-team.php"; 
include "view-footer.php";
?>
