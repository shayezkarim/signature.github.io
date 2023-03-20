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
    <h2>Detail</h2>
<?php if(isset($_GET['s'])){
echo "Successfully Added!!!";
}?>
    <table border="1" width="100%" height="100%" text-align: center style="font-size: 15px;">
      <tr align="center">
        <th>ID</th>
        <td><?php echo $row['id']?></td>
      </tr align="center">
      <tr align="center">
        <th>ID</th>
      </tr align="center">
	  <?php 
	   $sql = "select * from raw_data LEFT JOIN user ON user.id = 15
	   LEFT JOIN brain_signature ON brain_signature.raw_data_id = raw_data.id
	   ";  
        $result = mysqli_query($conn, $sql);  
		while($row = $result->fetch_assoc())
		{
	  ?>
      
		<?php } ?>
    </table>


  </div>

  <!-- ##### Footer ##### -->

  <?php
  include("footer.php");
  ?>
</body>

</html>