<H1>Quarterbacks With WideReceivers</H1>
<div class="card-group">
  
<?php
while($quarterback = $quarterbacks->fetch_assoc())  {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $quarterback['quarterback_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $wrqbs = selectWRQB($quarterback['quarterback_id']);
  while ($wrqb-> $wrqbs->fetch_assoc()){
?>
    <li class="list-group-item"><?php echo $wrqb['widereceiver_name']; ?> - <?php echo $wrqb['widereceiver_adot']; ?></li>
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Air Yards: <?php echo $quarterback['quarterback_adot']; ?></small></p>
    </div>
<?php
}
?>
</div>
