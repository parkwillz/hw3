<?php
require_once("util-db.php");
require_once("model-qbs-with-wrs.php");

$pageTitle = "Quarterbacks With Wide Receivers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertTeam($_POST['qbid'], $_POST['wrid'], $_POST['wName'], $_POST['wADOT'])) {
        echo '<div class="alert alert-success" role="alert">Team added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateTeam($_POST['qbid'], $_POST['wrid'], $_POST['wName'], $_POST['wADOT'], $_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteTeam($_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}


$quarterbacks = selectQuarterbacks();
include "view-qbs-with-wrs.php";
include "view-footer.php";
?>
