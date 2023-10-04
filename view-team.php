<h1>player</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>leauge</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($team = $team->fetch_assoc(1)) {
  ?>
  <tr>
    <td><?php echo $team['team_id'];?></td>
    <td><?php echo $team['team_name'];?></td>
    <td><?php echo $team['team_leauge'];?></td>
    <td>
      <form method = "post" action = "team-by-league.php">
        <input type = "hidden" name ="tid" value = "<?php echo $team['team_id'];?>">
  <button type="submit" class="btn btn-primary">league</button>
</form>
    </td>
  </tr>
  <?php
  
}
?>
    </tbody>
  </table>
</div>
