<?php
require_once("util-db.php");
require_once("model-quarterbacks.php");

$pageTitle = "Quarterbacks";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertQuarterbacks($_POST['qName'], $_POST['qADOT'])) {
        echo '<div class="alert alert-success" role="alert">Quarterback Added!</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">Error</div>';
      }
      break;
  }
}
$quarterbacks = selectQuarterbacks();
include "view-quarterbacks.php";
include "view-footer.php";
?>
