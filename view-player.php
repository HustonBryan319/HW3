<h1>player</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>position</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($player = $player->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $player['player_id']; ?></td>
    <td><?php echo $player['player_name']; ?></td>
    <td><?php echo $player['player_position']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
