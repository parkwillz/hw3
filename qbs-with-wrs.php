<?php
require_once("util-db.php");
require_once("model-qbs-with-wrs.php");

$pageTitle = "Quarterbacks With Wide Receivers";
include "view-header.php";
$quarterbacks = selectQuarterbacks();
include "view-qbs-with-wrs.php";
include "view-footer.php";
?>
