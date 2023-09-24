<?php
require_once("util-db.php");
require_once("model-widereceivers.php");

$pageTitle = "Wide Receivers";
include "view-header.php";
$widereceivers = selectWidereceivers();
include "view-widereceivers.php";
include "view-footer.php";
?>
