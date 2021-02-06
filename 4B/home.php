	<?php 

	require_once 'koneksi.php';

	 ?>

	<div class="row mt-5">
		<?php 

		  $query = mysqli_query($db,"SELECT * FROM cycle INNER join merk ON cycle.id_merek=merk.id WHERE stock != '0' ");
	  	  
	  	  while ($data = mysqli_fetch_assoc($query)) {
		 ?>
			<div class="col-sm-3">
				<div class="card bg-dark text-center">
					<div  class="card-body">
						<img src="assets/image/<?=$data['image']?>" width=250px class="img-thumbnail">
						<div class="row mt-2">
							<div class="col-sm-6">
								<p class="text-white"><?=$data['name']?></p>
							</div>
							<div class="col-sm-6">
								<p class="text-white"><?=$data['name_brand']?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<p class="text-md">Rp. <?=number_format($data['price'])?></p>
							</div>
							<div class="col-sm-6">
								<p class="text-sm">Stock : <?=$data['stock']?></p>
							</div>
						</div>
						
					</div>
					<div class="card-footer">
						<div class="row justify-content-center">
							<div class="col-sm-6">
								<a href="buy.php?id=<?=$data['id_cycle']?>" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Buy</a>
							</div>
							<div class="col-sm-6">
								<a href="index.php?page=detail-cycle&id=<?=$data['id_cycle']?>" class="btn btn-danger"></i>Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>

	