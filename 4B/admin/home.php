<?php 
	require_once '../koneksi.php'
 ?>

<div class="row mt-5">
			<div class="col-sm-12">
				<div class="card bg-light text-center">
					<div  class="card-body">
						<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">No</th>
						      <th scope="col">Name</th>
						      <th scope="col">Price</th>
						      <th scope="col">Stock</th>
						      <th scope="col">Image</th>
						      <th scope="col">Merek</th>
						      <th><i class="fas fa-cog"></i></th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
						  	$no = 1;
								  $query = mysqli_query($db,"SELECT * FROM cycle INNER join merk ON cycle.id_merek=merk.id");
								  	while ($data = mysqli_fetch_assoc($query)) {
								  		
								  		
								  	?>
						  	<tr>
						  		<td><?=$no++?></td>
						  		<td><?=$data['name']?></td>
						  		<td>Rp. <?=number_format($data['price'])?></td>
						  		<td><?=$data['stock']?></td>
						  		<td><img src="../assets/image/<?=$data['image']?>" width="200px"></td>
						  		<td><?=$data['name_brand']?></td>
						  		<td>
						  			<a href="index.php?page=detail&id=<?=$data['id_cycle']?>" class="btn btn-success btn-md"><i class="fas fa-eye"></i> </a>
						  			<a href="index.php?page=delete&id=<?=$data['id_cycle']?>" class="btn btn-danger btn-md"><i class="fas fa-trash"></i> </a>
						  		</td>
						  	</tr>

						  	<?php 

						  	} ?>
						  </tbody>

						</table>
					</div>
				</div>
			</div>
		</div>