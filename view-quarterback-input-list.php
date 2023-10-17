<select class="form-select" id="qbid" name="qbid">
<?php
while ($quarterbackItem = $quarterbackList->fetch_assoc()) {
  $selText = "";
  if ($selectedQuarterback == $quarterbackItem['quarterback_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $quarterbackItem['quarterback_id']; ?>"<?=$selText?>><?php echo $quarterbackItem['quarterback_name']; ?></option>
<?php
}
?>
</select>
