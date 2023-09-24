<H1>Wide Receivers</H1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>ADOT</th>
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
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
