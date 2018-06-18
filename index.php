<?php
include 'header.php';
?>
		<div class="container data">
		<form id="myform" action="./adduser.php" method="post" class="myform jumbotron" enctype="multipart/form-data">
			<h2>FORM</h2>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name"  class="form-control" required>
			</div>
			<div class="form-group">
				<label>Attach Image</label>
				<input type="file" name="uploadedimage" required />
			</div>
			<div class="form-group">
				<label>City</label>
				<input type="text" name="city"  class="form-control" required>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add User</button>
					</div>
				</div>
				<div class="col-md-4"><div class="form-group">
					<button type="reset" class="form-control btn btn-default">Reset</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					<a href="./listing.php">Show Database</a>
					</div>
				</div>
			</div>
		</form>	  		
  		</div>	
<?php 
include 'footer.php';
?>