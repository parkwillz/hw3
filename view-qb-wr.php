<H1>QBs and WRs</H1>
<div class="table-responsive table-striped table-hover">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>ADOT</th>
      <th>Team Name</th>  
      </tr>
    </thead>
    <tbody>
<?php
while($qbwr = $qbwrs->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $qbwr['widereceiver_id']; ?> </td>
    <td><?php echo $qbwr['widereceiver_name']; ?></td>
    <td><?php echo $qbwr['widereceiver_adot']; ?></td>
    <td><?php echo $qbwr['teamname']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
