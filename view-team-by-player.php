<h1>team by player</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
         <th>ID</th>
      <th>name</th>
      <th>league</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($team = $team->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $team['team_id'];?></td>
    <td><?php echo $team['team_name'];?></td>
    <td><?php echo $team['team_league'];?></td>
    </tr>
  <?php
  
}
?>
    </tbody>
  </table>
</div>
