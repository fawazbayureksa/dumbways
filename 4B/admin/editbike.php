<?php 

$id = $_GET['id'];
require_once '../koneksi.php'; 

$query = mysqli_query($db,"SELECT * FROM cycle INNER join merk ON cycle.id_merek=merk.id  WHERE id_cycle='$id'");
 $data=mysqli_fetch_assoc($query);

 $id_merek = $data['id_merek'];
	
 ?>
<div class="row justify-content-center mt-5">	
			<div class="col-sm-5">
				<div class="card bg-dark">
					<div class="card-header text-center">
						<h3 class="text-white">Form Edit Bike</h3>
					</div>
					<form class="" method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-floating mb-3"> 
								  <input type="text" class="form-control" id="floatingInput" value="<?=$data['name']?>" name="name" placeholder="Name" autocomplete="off" required>
								  <label for="floatingInput">Name</label>
							</div> 
							<div class="form-floating  mb-3">
								  <input type="number" class="form-control" id="floatingPassword" value="<?=$data['price']?>" name="price" placeholder="Password" autocomplete="off" required>
								  <label for="floatingPassword">Price</label>
							</div>
							<div class="form-floating  mb-3">
								  <input type="number" class="form-control"  value="<?=$data['stock']?>" id="floatingPassword" name="stock" placeholder="Password" autocomplete="off" required>
								  <label for="floatingPassword">Stock</label>
							</div>
							<div class="form-floating  mb-3">
								  <input type="file" class="form-control" name="gambar" id="floatingPassword" >
								  <label for="floatingPassword">Image</label>
								  <img src="../assets/image/<?=$data['image']?>" width="200px" class="mt-3">
							</div>
								<div class="form-floating  mb-3">
								  <select class="form-select" name="merek" id="floatingSelect" aria-label="Floating label select example" required>
								  
								    <option value="<?=$id_merek?>">
								    	<?php 
								   
								    	echo $data['name_brand'];
								    		
								  		?>

								    </option>
								    	<?php
								  		$query2 = mysqli_query($db , "SELECT * FROM merk");
								  		while ($data2 = mysqli_fetch_assoc($query2)) {
								  		
								  		
								  	?>
								    <option value="<?=$data2['id']?>"><?=$data2['name_brand']?></option>
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
				    $d = $_POST['merek'];

				if (empty($_FILES['gambar']['tmp_name'])) {

				    mysqli_query($db, "UPDATE cycle SET name='$a',price='$b',stock='$c',id_merek='$d' WHERE id_cycle='$id' ");

				    echo "<Script>alert('Bike Change Successfully')</script>";
			        echo "<Script>location='index.php?page=home'</script>";

				}else{

					$lok = $_FILES['gambar']['name'];
				    $gambar = $_FILES['gambar']['tmp_name'];
				    move_uploaded_file($gambar,"../assets/image/" . $lok);

				      mysqli_query($db, "UPDATE cycle SET name='$a',price='$b',stock='$c',image='$lok', id_merek='$d' WHERE id_cycle='$id' ");

				    echo "<Script>alert('Bike Change Successfully')</script>";
			        echo "<Script>location='index.php?page=home'</script>";
				 }
				}

		 ?>