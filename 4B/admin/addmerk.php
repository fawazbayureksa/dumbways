<?php 
	require_once '../koneksi.php';
	
 ?>
		<div class="row justify-content-center mt-5">	
			<div class="col-sm-5">
				<div class="card bg-dark">
					<div class="card-header text-center">
						<h3 class="text-white">Form Added Brand</h3>
					</div>
					<form class="" method="post">
						<div class="card-body">
							<div class="form-floating mb-3"> 
								  <input type="text" class="form-control" id="floatingInput" name="merek" placeholder="Username" required>
								  <label for="floatingInput">Brand</label>
							</div> 
						</div>
						<div class="card-footer">
								<div class="row justify-content-center mt-3">
									<button class="btn btn-success" type="submit" name="save"><i class="fas fa-save"></i> Save</button>
								</div>
								<div class="row justify-content-center mt-3">
									<a class="btn btn-warning" href="admin/index.php">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php 
	
	if (isset($_POST['save'])) {

		$a =$_POST['merek'];

		mysqli_query($db,"INSERT INTO merk (name) values ('$a')");
		   echo "<Script>alert('Brand Added Successfully')</script>";
	       echo "<Script>location='index.php?page=home'</script>";
	}

	
 ?>