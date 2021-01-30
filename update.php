<?php 

require_once 'include/dbh.inc.php';
require_once 'header.php';

$id = $_GET['menu_id'];

$records = mysqli_query($conn, "SELECT * FROM menu WHERE menu_id=$id");
while ($data = mysqli_fetch_array($records)) {
	
    $name = $data['menu_name']; 
    $size = $data['menu_size']; 
	$price = $data['price']; 

}

?>
	<div class="container">
		<div class="box shadow p-3 mb-5 bg-white">
			<br>
			<h3 class="col text-center">&nbsp;Update Menu</h3> 

			<form action="include/update.inc.php" method="POST">

				<label for="menu-id">Menu ID</label>
				<input input type="text" id="menu_id"  name="menu_id" class="form-control" value="<?php echo $id; ?>"hidden>

				<label for="name">Name</label>
				<input type="text" name="menu_name" class="form-control" value="<?php echo $name; ?>">

				<label for="size">Size</label><br>
				<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="size" id="size">
				<option >Choose Size</option>
				<option <?php if($size=="Large"){echo "selected";}?>>Large</option>
				<option <?php if($size=="Regular"){echo "selected";}?>>Regular</option>
				</select>

				<label for="firstname">Price</label>
				<input type="number" id="price"  name="price" class="form-control" value="<?php echo $price; ?>"><br>
				<input type="submit" name="addnew" class="btn btn-primary" value="Update">

			</form>
		</div>
	</div>
</div>
</div>

<?php 
 require_once 'footer.php';