<H1>Runningbacks</H1>
<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Rushing Yards/Attempt</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while($runningback = $runningbacks->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $runningback['runningback_id']; ?> </td>
    <td><?php echo $runningback['runningback_name']; ?></td>
    <td><?php echo $runningback['runningback_ryoa']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
