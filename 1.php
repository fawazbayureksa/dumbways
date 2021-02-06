<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Total Gaji</title>
	<style type="text/css">
		body {
			background: #FFFFFF;
			font-family: sans-serif;
			color: #797979;
			text-align: center;
		}

		.form{
			background-color: #FFFFFF;
			border: 1px solid #E3E3E3;
			border-radius: 6px;
			color: gray;
			padding: 7px 12px;
			height: 38px;
			width: 200px;
		}
		.btn {
			padding: 6px 12px;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.5;
			text-align: center;
			cursor: pointer;
			border: 1px solid transparent;
			border-radius: 4px;
			background-color: green ;
			color: #FFFFFF;
		}


		table {
			border: 1px solid #dee2e6;
		}

		table td, table th {
			padding: 10px;
			border: 1px solid #dee2e6;
			text-align: inherit;
		}
	</style>
</head>
<body>
	<h2>Menghitung Total Gaji Pegawa</h2>
	<hr>
	<form method="POST">
		<label><b>golongan Pegwai</b></label><br>
		<select name="golongan" class="form" >
			<option value="">--golongan--</option>
			<option value="golongan1">golongan 1</option>
			<option value="golongan2">golongan 2</option>
			<option value="golongan3">golongan 3</option>
			<option value="golongan4">golongan 4</option>
			
		</select>
		<br><br>
		<label><b>Jenis Kelamin</b></label><br>
		<select name="gender" class="form" >
			<option value="">Jenis Kelamin</option>
			<option value="pria">Pria</option>
			<option value="wanita">Wanita</option>
		</select>
		<br><br>
		<label><b>Status nikah</b></label><br>
		<select name="status" class="form" >
			<option value="">Status Nikah</option>
			<option value="lajang">Lajang</option>
			<option value="menikah">Menikah</option>
		</select>
		<br><br>
		<label><b>Jumlah Anak</b></label><br>
		<input type="number" class="form" name="anak">
		<br><br>
		<button type="submit" name="submit" class="btn">Hitung Gaji Karyawan</button>
	</form>
	<br>
	<hr>


	<?php	

		if (isset($_POST['submit'])){

			$golongan = $_POST['golongan'];
			$gender = $_POST['gender'];
			$status = $_POST['status'];
			$anak = $_POST['anak'];

			$gapok=0;
			$tun=0;
			$tunjis=0;
			$tunjanak=0;


			$pensiun = 200000;
			$bpjs = 150000;

			if ($golongan == 'golongan1') {
				
				$gapok = 1500000; 
				$tun = 200000;

				}
				elseif ($golongan == 'golongan2') {
					$gapok = 2000000;
					$tun = 400000;
				}
			
				elseif ($golongan == 'golongan3') {
					$gapok = 3000000;
					$tun = 600000;
				}
				elseif ($golongan == 'golongan4') {
					$gapok = 4000000;
					$tun = 1000000;
				}
			

			if ($gender == 'pria' && $status == 'menikah') {
				$tunjis = 200000;
			}else{
				$tunjis =0;
			}

			if ($gender == 'pria' && $status == 'menikah' && $anak >= 2) {
				$tunjanak = 200000;
			}
				elseif ($gender == 'pria' && $status == 'menikah' && $anak == 1) {
				$tunjanak = 100000;
			}
			
			else{
				$tunjanak = 0;
			
		}
			
			$bbpjs = 150000;
			$bpensiun = 200000;
			$total = $gapok + $tunjis + $tun + $tunjanak;
			$pajak = $total * 10 / 100;
			$gasem = $total- $pajak;
			$pensiun = $gasem - $bpensiun;
			$gaber = $pensiun - $bbpjs;
			?>
				<h1>HASIL PERHITUNGAN GAJI</h1>
		<p>==============================================</p>
				<h2>INFO PEGAWAI</h2>
		<p>==============================================</p>
		<h5>Pegawai yang bersangkutan</h5>
		<h5>golongan : <?=$golongan?></h5>
		<h5>Jenis Kelamin : <?=$gender?></h5>
		<h5>Jumlah anak : <?=$anak?></h5>
		<p>==============================================</p>
				<h2>GAJI & TUNJANGAN</h2>
		<p>==============================================</p>

		<h5>Gaji Pokok : Rp. <?=number_format($gapok)?></h5>
		<h5>Tunjangan : Rp. <?=number_format($tun)?></h5>
		<h5>Tunjangan Istri: Rp. <?=number_format($tunjis)?></h5>
		<h5>Tunjangan Anak : Rp. <?=number_format($tunjanak)?></h5>
		<h5>Total : Rp. <?=number_format($total)?></h5>
		<h5>Pajak 10%: Rp. <?=number_format($pajak)?> </h5>
		<h5>Gaji Sementara: Rp. <?=number_format($gasem)?> </h5>
		<p>==============================================</p>
				<h2>Gaji Bersih</h2>
		<p>==============================================</p>

		<h5>Potongan Pensiun : <?=number_format($bpensiun)?></h5>
		<h5>Potongan BPJS : <?=number_format($bbpjs)?></h5>
		<h5 style="font-weight: bold;">GAJI BERSIH <?=number_format($gaber)?></h5>

		<?php } ?>


</body>
</html>