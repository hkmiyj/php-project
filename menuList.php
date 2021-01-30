<?php 
require_once 'include/dbh.inc.php';
require_once 'header.php';
echo '<br>';
echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM users WHERE user_id=" . $_POST['menu_id'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete the menu</div>";
	}
}

?>
<div class="container">
<table id="menu_class" class="table shadow lg p-3 mb-5 bg-white">
  <tr>
    <th class="table-secondary text-dark" >MENU ID</th>
    <th class="table-secondary text-dark" >NAME</th>
    <th class="table-secondary text-dark" >SIZE</th>
    <th class="table-secondary text-dark">PRICE</th>
    <th class="table-secondary text-dark text-center">ACTIONS</th>
  </tr>

<?php

include "include/dbh.inc.php"; 


$records = mysqli_query($conn, "SELECT * FROM menu"); // fetch data from database

while ($data = mysqli_fetch_array($records)) {
    ?>
  <tr>
    <td><?php echo $data['menu_id']; ?></td>
    <td><?php echo $data['menu_name']; ?></td>
    <td><?php echo $data['menu_size']; ?></td>
    <td>RM<?php echo $data['price']; ?></td>     
	<td class="col text-center" ><a href="include/delete.inc.php?menu_id=<?php echo $data['menu_id']; ?>" class="text-light btn btn-danger">Delete</a>
  <a href="update.php?menu_id=<?php echo $data['menu_id'];  ?>" class="text-light btn btn-warning">Update</a></td>
  </tr>	
<?php
}
?>
</table> 
</div>
<?php require_once 'footer.php';
?>