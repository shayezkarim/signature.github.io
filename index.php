<?php
session_start();
include("config.php");
include("header.php");

?>


  <!-- ##### Side Bar ##### -->
  <?php
include("nav.php");

?>
  <!-- ##### Main Copy ##### -->

  <div id="main-copy" class="table-container">
    <h2>Header</h2>
<?php if(isset($_GET['s'])){
echo "Successfully Added!!!";
}?>
    <table border="1" width="100%" height="100%" text-align: center style="font-size: 15px;">
      <tr align="center">
        <th>ID</th>
        <th>Subeject Pool</th>
        <th>Degree Centrality</th>
        <th>Betweeness Centrality</th>
        <th>Path Length</th>
        <th>Clustering</th>
        <th>Globale Efficiency</th>
        <th>Local Efficiency</th>
        <th>User</th>
        <th>Reference</th>
      </tr align="center">
	  <?php 
	   $sql = "select * from raw_data LEFT JOIN user ON user.id = raw_data.user_id
	   LEFT JOIN brain_signature ON brain_signature.raw_data_id = raw_data.id
	   ";  
        $result = mysqli_query($conn, $sql);  
		while($row = $result->fetch_assoc())
		{
	  ?>
      <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['subject_pool']?></td>
        <td><?php echo $row['degree_centrality']?></td>
        <td><?php echo $row['betweeness_centrality']?></td>
        <td><?php echo $row['path_length']?></td>
        <td><?php echo $row['clustering']?></td>
        <td><?php echo $row['globale_efficiency']?></td>
        <td><?php echo $row['local_efficiency']?></td>
        <td><?php echo $row['email']?></td>
        <?php
          $link_prefix = "";
        ?>
        <td>
          <a href="<?php echo $link_prefix . $row['connectivity_matrix']?>" target="_blank"><?php echo $link_prefix . $row['connectivity_matrix']?></a>
        </td>

      </tr>
		<?php } ?>
    </table>


  </div>

  <!-- ##### Footer ##### -->

  <?php
  include("footer.php");
  ?>
</body>

</html>