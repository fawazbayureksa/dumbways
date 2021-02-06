<?php 
	require_once '../koneksi.php';
	
 ?>
<div class="row justify-content-center mt-5">	
			<div class="col-sm-5">
				<div class="card bg-dark">
					<div class="card-header text-center">
						<h3 class="text-white">Form Added Bike</h3>
					</div>
					<form class="" method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-floating mb-3"> 
								  <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Name" autocomplete="off" required>
								  <label for="floatingInput">Name</label>
							</div> 
							<div class="form-floating  mb-3">
								  <input type="number" class="form-control" id="floatingPassword" name="price" placeholder="Password" autocomplete="off" required>
								  <label for="floatingPassword">Price</label>
							</div>
							<div class="form-floating  mb-3">
								  <input type="number" class="form-control" id="floatingPassword" name="stock" placeholder="Password" autocomplete="off" required>
								  <label for="floatingPassword">Stock</label>
							</div>
							<div class="form-floating  mb-3">
								  <input type="file" class="form-control" name="gambar" id="floatingPassword"  required>
								  <label for="floatingPassword">Image</label>
							</div>
								<div class="form-floating  mb-3">
								  <select class="form-select" name="merek" id="floatingSelect" aria-label="Floating label select example" required>
								  
								    <option selected>-- Choose --</option>
								    	<?php
								  		$query = mysqli_query($db , "SELECT * FROM merk");
								  		while ($data = mysqli_fetch_assoc($query)) {
								  		
								  		
								  	?>
								    <option value="<?=$data['id']?>"><?=$data['name_brand']?></option>
								<?php } ?>
								  </select>
								  <label for="floatingSelect">Merek</label>
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
					
					$a = $_POST['name'];
					$b = $_POST['price'];
					$c = $_POST['stock'];
					
				    $lok = $_FILES['gambar']['name'];
				    $gambar = $_FILES['gambar']['tmp_name'];
				    move_uploaded_file($gambar,"../assets/image/" . $lok);

				    $d = $_POST['merek'];

				    mysqli_query($db, "INSERT INTO cycle (name,price,stock,image,id_merek) VALUES ('$a','$b','$c','$lok','$d')");

				    echo "<Script>alert('Bike Added Successfully')</script>";
			        echo "<Script>location='index.php?page=home'</script>";

				}

		 ?>