<?php
require_once("util-db.php");
require_once("model-wr-qb.php");

$pageTitle = "QBs by WR";
include "view-header.php";
$wrqbs = selectWRQB($_GET['id']);
include "view-wr-qb.php";
include "view-footer.php";
?>
