<?php
require_once("util-db.php");
require_once("model-widereceivers.php");

$pageTitle = "Wide Receivers";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertWidereceivers($_POST['wName'], $_POST['wADOT'])) {
        echo '<div class="alert alert-success" role="alert">Widereceiver Added!</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateWidereceivers($_POST['wName'], $_POST['wADOT'], $_POST['wrid'])) {
        echo '<div class="alert alert-success" role="alert">Widereceiver Edited!</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteWidereceivers($_POST['wrid'])) {
        echo '<div class="alert alert-success" role="alert">Widereceiver Deleted!</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">Error</div>';
      }
      break;
  }
}

$widereceivers = selectWidereceivers();
include "view-widereceivers.php";
include "view-footer.php";
?>
