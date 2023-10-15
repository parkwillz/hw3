<?php
require_once("util-db.php");
require_once("model-runningbacks.php");

$pageTitle = "Runningbacks";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertRunningbacks($_POST['rName'], $_POST['rRYOA'])) {
        echo '<div class="alert alert-success" role="alert">Runningback Added!</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateRunningbacks($_POST['rName'], $_POST['rRYOA'], $_POST['rbid'])) {
        echo '<div class="alert alert-success" role="alert">Runningback Edited!</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteRunningbacks($_POST['rbid'])) {
        echo '<div class="alert alert-success" role="alert">Runningback Deleted!</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">Error</div>';
      }
      break;
  }
}

$runningbacks = selectRunningbacks();
include "view-runningbacks.php";
include "view-footer.php";
?>
