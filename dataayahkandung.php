<!DOCTYPE html>
<html>
<head>
	<title> Data Ayah Kandung </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
" crossorigin="anonymous">
	<style>
		.warning {color:  #FF0000;}
	</style>
</head>
<body>

<?php
$error_nama_ayah_kandung = "";
$error_tahun_lahir = "";
$error_pendidikan = "";
$error_pekerjaan = "";
$error_penghasilan_bulanan = "";
$error_berkebutuhan_khusus = "";

$nama_ayah_kandung = "";
$tahun_lahir = "";
$pendidikan = "";
$pekerjaan = "";
$penghasilan_bulanan = "";
$berkebutuhan_khusus = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["nama_ayah_kandung"])) {
		$error_nama_ayah_kandung = "Nama tidak boleh kosong";
	} else {
		$nama_ayah_kandung = cek_input($_POST["nama_ayah_kandung"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nama_ayah_kandung)) {
			$nameErr = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["tahun_lahir"])) {
		$error_tahun_lahir = "Tahun lahir tidak boleh kosong";
	} else {
		$tahun_lahir = cek_input($_POST["tahun_lahir"]);

		if (!is_numeric($tahun_lahir)) {
			$error_tahun_lahir = 'Tahun lahir hanya boleh angka';
		}
	}

	if (empty($_POST["pendidikan"])) {
		$error_pendidikan = "Pendidikan tidak boleh kosong";
	} else {
		$pendidikan = cek_input($_POST["pendidikan"]);

		if (!is_numeric($pendidikan)) {
			$error_pendidikan = 'Pendidikan hanya boleh angka';
		}
	}

	if (empty($_POST["pekerjaan"])) {
		$error_pekerjaan = "Pekerjaan tidak boleh kosong";
	} else {
		$pekerjaan = cek_input($_POST["pekerjaan"]);

		if (!is_numeric($pekerjaan)) {
			$error_pekerjaan = 'Pekerjaan hanya boleh angka';
		}
	}

	if (empty($_POST["penghasilan_bulanan"])) {
		$error_penghasilan_bulanan = "Penghasilan bulanan tidak boleh kosong";
	} else {
		$penghasilan_bulanan = cek_input($_POST["penghasilan_bulanan"]);

		if (!is_numeric($penghasilan_bulanan)) {
			$error_penghasilan_bulanan = 'Penghasilan bulanan hanya boleh angka';
		}
	}

	if (empty($_POST["berkebutuhan_khusus"])) {
		$error_berkebutuhan_khusus = "Berkebutuhan khusus tidak boleh kosong";
	} else {
		$berkebutuhan_khusus = cek_input($_POST["berkebutuhan_khusus"]);

		if (!is_numeric($berkebutuhan_khusus)) {
			$error_berkebutuhan_khusus = 'Berkebutuhan khusus hanya boleh angka';
		}
	}

}

function cek_input($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header"> DATA AYAH KANDUNG </div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group row">
						<label for="nama_ayah_kandung" class="col-sm-2 col-form-label"> Nama Ayah Kandung </label>
						<div class="col-sm-10">
							<input type="text" name="nama_ayah_kandung" class="form-control <?php echo ($error_nama_ayah_kandung !="" ? "is-invalid" : ""); ?>" id="nama_ayah_kandung" placeholder="Nama Ayah Kandung" value="<?php echo $nama_ayah_kandung; ?>">
							<span class="warning"><?php echo $error_nama_ayah_kandung; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tahun_lahir" class="col-sm-2 col-form-label"> Tahun Lahir </label>
						<div class="col-sm-10">
							<input type="text" name="tahun_lahir" class="form-control <?php echo ($error_tahun_lahir !="" ? "is-invalid" : ""); ?>" id="tahun_lahir" placeholder="Tahun Lahir" value="<?php echo $tahun_lahir; ?>">
							<span class="warning"><?php echo $error_tahun_lahir; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="pendidikan" class="col-sm-2 col-form-label"> Pendidikan </label>
						<div class="col-sm-10">
							<input type="text" name="pendidikan" class="form-control <?php echo ($error_pendidikan !="" ? "is-invalid" : ""); ?>" id="pendidikan" placeholder="Pendidikan" value="<?php echo $pendidikan; ?>">
							<span class="warning"><?php echo $error_pendidikan; ?></span>
						</div>
						<p> <center> 1. Tidak sekolah 2. Putus 3. SD/Sederajat 4. SMP/Sederajat 5. SMA/Sederajat 6. D1 7. D2 8. D3 9. D4/S1 10. S2 11. S3 </center> </p>
					</div>

					<div class="form-group row">
						<label for="pekerjaan" class="col-sm-2 col-form-label"> Pekerjaan </label>
						<div class="col-sm-10">
							<input type="text" name="pekerjaan" class="form-control <?php echo ($error_pekerjaan !="" ? "is-invalid" : ""); ?>" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>">
							<span class="warning"><?php echo $error_pekerjaan; ?></span>
						</div>
						<p> <center> 1. Tidak bekerja 2. Nelayan 3. Petani 4. Peternak 5. PNS/TNI/Polri 6. Karyawan Swasta 7. Pedagang Kecil 8. Pedagang Besar 9. Wiraswasta 10. Wirausaha 11. Buruh 12. Pensiunan 99. Lain-lain </center> </p>
					</div>

					<div class="form-group row">
						<label for="penghasilan_bulanan" class="col-sm-2 col-form-label"> Penghasilan Bulanan </label>
						<div class="col-sm-10">
							<input type="text" name="penghasilan_bulanan" class="form-control <?php echo ($error_penghasilan_bulanan !="" ? "is-invalid" : ""); ?>" id="penghasilan_bulanan" placeholder="Penghasilan Bulanan" value="<?php echo $penghasilan_bulanan; ?>">
							<span class="warning"><?php echo $error_penghasilan_bulanan; ?></span>
						</div>
						<p> <center> 1. < Rp500.000 2. Rp500.000-Rp999.000 3. Rp1000.000-Rp1.999.000 4. Rp2.000.000-Rp4.999.000 5. Rp5.000.000-Rp20.000.000 6. > Rp20.000.000 </center> </p>
					</div>

					<div class="form-group row">
						<label for="berkebutuhan_khusus" class="col-sm-2 col-form-label"> Berkebutuhan Khusus </label>
						<div class="col-sm-10">
							<input type="text" name="berkebutuhan_khusus" class="form-control <?php echo ($error_berkebutuhan_khusus !="" ? "is-invalid" : ""); ?>" id="berkebutuhan_khusus" placeholder="Berkebutuhan Khusus" value="<?php echo $berkebutuhan_khusus; ?>">
							<span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
						</div>
						<p> <center> 1. Tidak 2. Netra 3. Rungu 4. Grahita Ringan 5. Grahita Sedang 6. Daksa Ringan 7. Daksa Sedang 8. Laras 9. Wicara 10. Tuna ganda 11. Hiperaktif 12. Cerdas istimewa 13. Bakat istimewa 14. Kesulitan belajar 15. Narkoba 16. Indigo 17. Down Sindrome 18. Autis </center> </p>
					</div>

					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary"> Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo "Nama Ayah Kandung = ".$nama_ayah_kandung;
echo "<br>";
echo "Tahun Lahir = ".$tahun_lahir;
echo "<br>";
echo "Pendidikan = ".$pendidikan;
echo "<br>";
echo "Pekerjaan = ".$pekerjaan;
echo "<br>";
echo "Penghasilan Bulanan = ".$penghasilan_bulanan;
echo "<br>";
echo "Berkebutuhan Khusus = ".$berkebutuhan_khusus;
?>

</body>
</html>