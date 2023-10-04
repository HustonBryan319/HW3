<h1>player</h1>
<div class="table-responsive">
  <table class="table">
    <thead> 
      <tr>
         <th>ID</th>
      <th>ID</th>
      <th>ID</th>
        <th>country</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($league = $league->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $league['league_id'];?></td>
    <td><?php echo $league['player_id'];?></td>
    <td><?php echo $league['team_id'];?></td>
    <td><?php echo $league['country'];?></td>
  </tr>
  <?php
  
}
?>
    </tbody>
  </table>
</div>
