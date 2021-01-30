<?php 
require_once 'include/dbh.inc.php';
require_once 'header.php';

?>
<div class="container">
	<div>
		<div class="box shadow p-3 mb-5 bg-white">
		<br>
			<h3 class="col text-center"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Food</h3> 

			<form action="include/add.inc.php" method="POST">

				<br>
				<label for="firstname">Name</label>
				<input type="text" id="menu-name"  name="menu-name" class="form-control"><br>

				<label for="size">Size</label><br>
				<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="size" id="size">
				<option>Choose Size</option>
				<option value="Large">Large</option>
				<option value="Regular">Regular</option>
				</select><br>

				<label for="firstname">Price</label>
				<input type="number" id="price"  name="price" class="form-control"><br>
				<input type="submit" name="addnew" class="btn btn-primary " value="Add">
			</form>
		</div>
	</div>
</div>

<?php 
 require_once 'footer.php';