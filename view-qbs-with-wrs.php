<H1>Quarterbacks With WideReceivers</H1>
<div class="card-group">
  
<?php
while($quarterback = $quarterbacks->fetch_assoc())  {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $quarterback['quarterback_name']; ?></h5>
      <p class="card-text">
<?php
  $wideouts = selectWideoutsByQB($quarterback['quarterback_id'];);
  while ($wideouts->fetch_assoc()){
?>
<?php
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Air Yards: <?php echo $quarterback['quarterback_adot']; ?></small></p>
    </div>
<?php
}
?>
</div>
