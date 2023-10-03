<H1>Wide Receivers</H1>
<div class="table-responsive">
  <table class="table table-striped table-hove">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>ADOT</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while($widereceiver = $widereceivers->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $widereceiver['widereceiver_id']; ?> </td>
    <td><?php echo $widereceiver['widereceiver_name']; ?></td>
    <td><?php echo $widereceiver['widereceiver_adot']; ?></td>
    <td>
      <form method="post" action="wr-qb.php">
        <input type="hidden" name="wrid" value="<?php echo $widereceiver['widereceiver_id']; ?>">
        <button type="submit" class="btn btn-primary">Quarterback</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
