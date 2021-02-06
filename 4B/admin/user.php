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
				      <th scope="col">email</th>
				      <th scope="col">Level</th>
				     
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  	$no = 1;
						  $query = mysqli_query($db,"SELECT * FROM user");
						  	while ($data = mysqli_fetch_assoc($query)) {
						  	?>
				  	<tr>
				  		<td><?=$no++?></td>
				  		<td><?=$data['name']?></td>
				  		<td><?=$data['email']?></td>
				  		<td>
				  			<?php 
				  			if ($data['level'] == 1){
			  					echo "User";
				  				}else{
				  					echo "Admin";
				  				}
				  				?>
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