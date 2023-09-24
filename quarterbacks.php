<?php
require_once("util-db.php");
require_once("model-quarterbacks.php");

$pageTitle = "Quarterbacks";
include "view-header.php";
$quarterback = selectQuarterbacks();
include "view-quarterbacks.php";
include "view-footer.php";
?>
