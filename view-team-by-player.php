<h1>team</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
         <th>ID</th>
      <th>name</th>
      <th>league</th>
        <th>country</th>
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
    <td><?php echo $team['country'];?></td>
  </tr>
  <?php
  
}
?>
    </tbody>
  </table>
</div>
