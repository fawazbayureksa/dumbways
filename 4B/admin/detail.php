
<?php 

$id = $_GET['id'];
require_once '../koneksi.php'; 

$query = mysqli_query($db,"SELECT * FROM cycle INNER join merk ON cycle.id_merek=merk.id  WHERE id_cycle='$id'");
 $data=mysqli_fetch_assoc($query);

 
?>


<div class="row mt-5 mb-5">
    <div class="card">
        <h3><?=$data['name']?></h3>
    </div>
</div>
<div class="row justify-content-start  mt-5">
    <div class="col-sm-3">

        <div class="card">
            <div class="card-body">
                <img src="../assets/image/<?=$data['image']?>" class="rounded mx-auto d-block" width="200px" alt="">
                <h4 class="text-center mt-5">Picture</h4>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="card">
            <div class="card-header bg-dark text-center">
                <h3 style="color:white;">Details Bike</h3>
            </div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center"></h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <th>Merek</th>
                    </div>
                    <div class="col-sm-1">
                        <td>:</td>
                    </div>
                    <div class="col-sm-5">
                        <td><?=$data['name_brand']?></td>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <th>Price</th>
                    </div>
                    <div class="col-sm-1">
                        <td>:</td>
                    </div>
                    <div class="col-sm-5">
                        <td>Rp. <?=number_format($data['price'])?></td>
                    </div>
                </div> 
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <th>Stock</th>
                    </div>
                    <div class="col-sm-1">
                        <td>:</td>
                    </div>
                    <div class="col-sm-5">
                        <td><?=$data['stock']?></td>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-dark">
                <a href="index.php?page=edit&id=<?=$data['id_cycle']?>" class="btn btn-warning">Edit Bike</a>
            </div>
        </div>
    </div>
</div>
