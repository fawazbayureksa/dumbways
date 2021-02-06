<?php

include 'koneksi.php';

$id_cycle = $_GET['id'];

$query = mysqli_query($db, "SELECT * FROM cycle INNER join merk ON cycle.id_merek=merk.id WHERE id_cycle='$id_cycle'");
$data = mysqli_fetch_assoc($query);
?>


        <div class="row justify-content-start mt-5">
             <div class="col-sm-6">
                    <img src="assets/image/<?=$data['image']?>" width="500px" class="img-thumbnail" alt="">
             </div>
                <div class="col-sm-6">
                    <form method="POST">
                        <h2><?php echo $data['name']; ?></h2>
                        <h4>Rp <?php echo number_format($data['price']); ?></h4>
                        <p>Stock : <?php echo $data['stock']; ?></p>
                        <p>Brand : <?php echo $data['name_brand']; ?></p>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                     <div class="input-group">
                                        <input type="number" min="1" max="<?=$data['stock']?>" class="form-control" placeholder="Amount" name="jumlah">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary btn-md" name="beli"><i class="fas fa-shopping-cart"></i> Buy</button>
                                            </div>
                                     </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </form>
            <?php
            if (isset($_POST['beli'])){
                if (!isset($_SESSION["user"])) {
                    echo "<script>alert('Please Log in first')</script>";
                    echo "<script>location='login.php';</script>";
                };

            
                //Get jumlah input
                $jumlah=$_POST['jumlah'];
                //masukkan ke session keranjang
                $_SESSION['keranjang'][$id_cycle]=$jumlah;
           
           echo "<script>alert('Bike add to cart');</script>";
           echo "<script>location='index.php?page=cart';</script>";
            }

            ?>


