<?php


include 'koneksi.php';
if (!isset($_SESSION["keranjang"])) {
    echo "<script>alert('No items have been selected yet')</script>";
    echo "<script>location='index.php?page=home';</script>";
}

if (empty($_SESSION["user"])) {
    echo "<script>alert('Please Log in first')</script>";
    echo "<script>location='login.php';</script>";
}
?>
      <h1>Order list</h1>
       <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Total cost</th>
                    <th><i class="fas fa-cog"></i></th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                // foreach ($_SESSION["keranjang"] as $id=>$value):
                foreach ($_SESSION["keranjang"] as $id_cycle => $jumlah) :
                    // Menampilkan produk yang sedang diperulangkan berdasarkan id produk
                    $query = mysqli_query($db, "SELECT * FROM cycle 
                    where id_cycle='$id_cycle'");
                    $data = mysqli_fetch_assoc($query);
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td> Rp. <?php echo number_format($data['price']); ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>Rp. <?php echo number_format($data['price'] * $jumlah); ?></td>
                        <td>
                            <a href="delcart.php?id=<?=$data['id_cycle']?>" class="btn btn-danger">Cancel</a>
                        </td>
                    </tr>
                <?php $no++;
                endforeach ?>
            </tbody>
        </table>
        <a href="index.php?page=home" class="btn btn-primary">Continue shopping</a>
        </div>

