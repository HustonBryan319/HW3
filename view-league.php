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
while ($league=$league->fetch_assoc()) 
{
  ?>
  <tr>
    <td><?php echo $team['league_id'];?></td>
    <td><?php echo $team['player_id'];?></td>
    <td><?php echo $team['team_id'];?></td>
  <td><?php echo $team['country'];?></td>
    <td>
      <form method = "post" action = "team-by-league.php">
        <input type = "hidden" name ="tid" value = "<?php echo $team['league_id'];?>">
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
