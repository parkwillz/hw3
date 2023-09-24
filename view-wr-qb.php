<H1>QBs and WRs</H1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>AirYards</th>
      <th>Team Name</th>  
      </tr>
    </thead>
    <tbody>
<?php
while($wrqb = $wrqbs->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $wrqb['quarterback_id']; ?> </td>
    <td><?php echo $wrqb['quarterback_name']; ?></td>
    <td><?php echo $wrqb['quarterback_adot']; ?></td>
    <td><?php echo $wrqb['teamname']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
