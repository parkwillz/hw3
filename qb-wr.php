<?php
require_once("util-db.php");
require_once("model-qb-wr.php");

$pageTitle = "QBs and WRs";
include "view-header.php";
$qbwrs = selectQBWR($_GET['id']);
include "view-qb-wr.php";
include "view-footer.php";
?>
