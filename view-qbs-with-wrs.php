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
  $qbwr = selectWideoutsByQB($quarterback['quarterback_id'];);
  while ($qbwr->fetch_assoc()){
?>
    <li class="list-group-item"><?php echo $qbwr['widereceiver_name']; ?> - <?php echo $qbwr['widereceiver_adot']; ?></li>
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
