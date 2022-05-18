<!DOCTYPE html>
<html>
<head>
	<title> Data Pribadi </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
" crossorigin="anonymous">
	<style>
		.warning {color:  #FF0000;}
	</style>
</head>
<body>

<?php
$error_nama_lengkap = "";
$error_jenis_kelamin = "";
$error_nisn = "";
$error_nik = "";
$error_tempat_lahir = "";
$error_tanggal_lahir = "";
$error_agama = "";
$error_berkebutuhan_khusus = "";
$error_alamat_jalan = "";
$error_rt = "";
$error_rw = "";
$error_nama_dusun = "";
$error_nama_kelurahan = "";
$error_kecamatan = "";
$error_kode_pos = "";
$error_tempat_tinggal = "";
$error_mode_transportasi = "";
$error_nomor_hp = "";
$error_nomor_telepon = "";
$error_email = "";
$error_penerima_kps = "";
$error_nomor_kps = "";
$error_kewarganegaraan = "";

$nama_lengkap = "";
$jenis_kelamin = "";
$nisn = "";
$nik = "";
$tempat_lahir = "";
$tanggal_lahir = "";
$agama = "";
$berkebutuhan_khusus = "";
$alamat_jalan = "";
$rt = "";
$rw = "";
$nama_dusun = "";
$nama_kelurahan = "";
$kecamatan = "";
$kode_pos = "";
$tempat_tinggal = "";
$mode_transportasi = "";
$nomor_hp = "";
$nomor_telepon = "";
$email = "";
$penerima_kps = "";
$nomor_kps = "";
$kewarganegaraan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["nama_lengkap"])) {
		$error_nama_lengkap = "Nama lengkap tidak boleh kosong";
	} else {
		$nama_lengkap = cek_input($_POST["nama_lengkap"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nama_lengkap)) {
			$nameErr = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["jenis_kelamin"])) {
		$error_pesan = "Jenis kelamin tidak boleh kosong";
	} else {
		$jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
	}

	if (empty($_POST["nisn"])) {
		$error_nisn = "NISN tidak boleh kosong";
	} else {
		$nisn = cek_input($_POST["nisn"]);

		if (!is_numeric($nisn)) {
			$error_nisn = 'NISN hanya boleh angka';
		}
	}

	if (empty($_POST["nik"])) {
		$error_nik = "NIK tidak boleh kosong";
	} else {
		$nik = cek_input($_POST["nik"]);

		if (!is_numeric($nik)) {
			$error_nik = 'NIK hanya boleh angka';
		}
	}

	if (empty($_POST["tempat_lahir"])) {
		$error_tempat_lahir = "Tempat lahir tidak boleh kosong";
	} else {
		$tempat_lahir = cek_input($_POST["tempat_lahir"]);
	}

	if (empty($_POST["tanggal_lahir"])) {
		$error_tanggal_lahir = "Tanggal lahir tidak boleh kosong";
	} else {
		$tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
	}

	if (empty($_POST["agama"])) {
		$error_agama = "Agama tidak boleh kosong";
	} else {
		$agama = cek_input($_POST["agama"]);

		if (!is_numeric($agama)) {
			$error_agama = 'Agama hanya boleh angka';
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

	if (empty($_POST["alamat_jalan"])) {
		$error_alamat_jalan = "Alamat jalan tidak boleh kosong";
	} else {
		$alamat_jalan = cek_input($_POST["alamat_jalan"]);
	}

	if (empty($_POST["rt"])) {
		$error_rt = "RT tidak boleh kosong";
	} else {
		$rt = cek_input($_POST["rt"]);

		if (!is_numeric($rt)) {
			$error_rt = 'RT hanya boleh angka';
		}
	}

	if (empty($_POST["rw"])) {
		$error_rw = "RW tidak boleh kosong";
	} else {
		$rw = cek_input($_POST["rw"]);

		if (!is_numeric($rw)) {
			$error_rw = 'RW hanya boleh angka';
		}
	}

	if (empty($_POST["nama_dusun"])) {
		$error_nama_dusun = "Nama dusun tidak boleh kosong";
	} else {
		$nama_dusun = cek_input($_POST["nama_dusun"]);
	}

	if (empty($_POST["nama_kelurahan"])) {
		$error_nama_kelurahan = "Nama kelurahan tidak boleh kosong";
	} else {
		$nama_kelurahan = cek_input($_POST["nama_kelurahan"]);
	}

	if (empty($_POST["kecamatan"])) {
		$error_kecamatan = "Kecamatan tidak boleh kosong";
	} else {
		$kecamatan = cek_input($_POST["kecamatan"]);
	}

	if (empty($_POST["kode_pos"])) {
		$error_kode_pos = "Kode pos tidak boleh kosong";
	} else {
		$kode_pos = cek_input($_POST["kode_pos"]);

		if (!is_numeric($kode_pos)) {
			$error_kode_pos = 'Kode pos hanya boleh angka';
		}
	}

	if (empty($_POST["tempat_tinggal"])) {
		$error_tempat_tinggal = "Tempat tinggal tidak boleh kosong";
	} else {
		$tempat_tinggal = cek_input($_POST["tempat_tinggal"]);

		if (!is_numeric($tempat_tinggal)) {
			$error_tempat_tinggal = 'Tempat tinggal hanya boleh angka';
		}
	}

	if (empty($_POST["mode_transportasi"])) {
		$error_mode_transportasi = "Mode transportasi tidak boleh kosong";
	} else {
		$mode_transportasi = cek_input($_POST["mode_transportasi"]);

		if (!is_numeric($mode_transportasi)) {
			$error_mode_transportasi = 'Mode transportasi hanya boleh angka';
		}
	}

	if (empty($_POST["nomor_hp"])) {
		$error_nomor_hp = "Nomor HP tidak boleh kosong";
	} else {
		$nomor_hp = cek_input($_POST["nomor_hp"]);

		if (!is_numeric($nomor_hp)) {
			$error_nomor_hp = 'Nomor HP hanya boleh angka';
		}
	}

	if (empty($_POST["nomor_telepon"])) {
		$error_nomor_telepon = "Nomor telepon tidak boleh kosong";
	} else {
		$nomor_telepon = cek_input($_POST["nomor_telepon"]);
	}

	if (empty($_POST["email"])) {
		$error_email = "Email tidak boleh kosong";
	} else {
		$email = cek_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error_email = "Format email Invalid";
		}
	}

	if (empty($_POST["penerima_kps"])) {
		$error_penerima_kps = "Penerima KPS/PKH/KIP tidak boleh kosong";
	} else {
		$penerima_kps = cek_input($_POST["penerima_kps"]);
	}

	if (empty($_POST["nomor_kps"])) {
		$error_nomor_kps = "Nomor KPS/KKS/PKH/KIP tidak boleh kosong";
	} else {
		$nomor_kps = cek_input($_POST["nomor_kps"]);
	}

	if (empty($_POST["kewarganegaraan"])) {
		$error_kewarganegaraan = "Kewarganegaraan tidak boleh kosong";
	} else {
		$kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
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
			<div class="card-header"> DATA PRIBADI </div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group row">
						<label for="nama_lengkap" class="col-sm-2 col-form-label"> Nama Lengkap </label>
						<div class="col-sm-10">
							<input type="text" name="nama_lengkap" class="form-control <?php echo ($error_nama_lengkap !="" ? "is-invalid" : ""); ?>" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>">
							<span class="warning"><?php echo $error_nama_lengkap; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenis_kelamin" class="col-sm-2 col-form-label"> Jenis Kelamin </label>
						<div class="col-sm-10">
							<input type="text" name="jenis_kelamin" class="form-control <?php echo ($error_jenis_kelamin !="" ? "is-invalid" : ""); ?>" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>">
							<span class="warning"><?php echo $error_jenis_kelamin; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nisn" class="col-sm-2 col-form-label"> NISN </label>
						<div class="col-sm-10">
							<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>">
							<span class="warning"><?php echo $error_nisn; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nik" class="col-sm-2 col-form-label"> NIK </label>
						<div class="col-sm-10">
							<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>">
							<span class="warning"><?php echo $error_nik; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tempat_lahir" class="col-sm-2 col-form-label"> Tempat Lahir </label>
						<div class="col-sm-10">
							<input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir !="" ? "is-invalid" : ""); ?>" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>">
							<span class="warning"><?php echo $error_tempat_lahir; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tanggal_lahir" class="col-sm-2 col-form-label"> Tanggal Lahir </label>
						<div class="col-sm-10">
							<input type="text" name="tanggal_lahir" class="form-control <?php echo ($error_tanggal_lahir !="" ? "is-invalid" : ""); ?>" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>">
							<span class="warning"><?php echo $error_tanggal_lahir; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="agama" class="col-sm-2 col-form-label"> Agama </label>
						<div class="col-sm-10">
							<input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="Agama" value="<?php echo $agama; ?>">
							<span class="warning"><?php echo $error_agama; ?></span>
						</div>
						<p> <center> 1. Islam 2. Kristen Protestan 3. Katholik 4. Hindu 5. Budha 6. Khonghucu 99. Lainnya </center> </p>
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
						<label for="alamat_jalan" class="col-sm-2 col-form-label"> Alamat Jalan </label>
						<div class="col-sm-10">
							<input type="text" name="alamat_jalan" class="form-control <?php echo ($error_alamat_jalan !="" ? "is-invalid" : ""); ?>" id="alamat_jalan" placeholder="Alamat Jalan" value="<?php echo $alamat_jalan; ?>">
							<span class="warning"><?php echo $error_alamat_jalan; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="rt" class="col-sm-2 col-form-label"> RT </label>
						<div class="col-sm-10">
							<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>">
							<span class="warning"><?php echo $error_rt; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="rw" class="col-sm-2 col-form-label"> RW </label>
						<div class="col-sm-10">
							<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>">
							<span class="warning"><?php echo $error_rw; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nama_dusun" class="col-sm-2 col-form-label"> Nama Dusun </label>
						<div class="col-sm-10">
							<input type="text" name="nama_dusun" class="form-control <?php echo ($error_nama_dusun !="" ? "is-invalid" : ""); ?>" id="nama_dusun" placeholder="Nama Dusun" value="<?php echo $nama_dusun; ?>">
							<span class="warning"><?php echo $error_nama_dusun; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nama_kelurahan" class="col-sm-2 col-form-label"> Nama Kelurahan/Desa </label>
						<div class="col-sm-10">
							<input type="text" name="nama_kelurahan" class="form-control <?php echo ($error_nama_kelurahan !="" ? "is-invalid" : ""); ?>" id="nama_kelurahan" placeholder="Nama Kelurahan/Desa" value="<?php echo $nama_kelurahan; ?>">
							<span class="warning"><?php echo $error_nama_kelurahan; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kecamatan" class="col-sm-2 col-form-label"> Kecamatan </label>
						<div class="col-sm-10">
							<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
							<span class="warning"><?php echo $error_kecamatan; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="kode_pos" class="col-sm-2 col-form-label"> Kode Pos </label>
						<div class="col-sm-10">
							<input type="text" name="kode_pos" class="form-control <?php echo ($error_kode_pos !="" ? "is-invalid" : ""); ?>" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>">
							<span class="warning"><?php echo $error_kode_pos; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="tempat_tinggal" class="col-sm-2 col-form-label"> Tempat Tinggal </label>
						<div class="col-sm-10">
							<input type="text" name="tempat_tinggal" class="form-control <?php echo ($tempat_tinggal !="" ? "is-invalid" : ""); ?>" id="tempat_tinggal" placeholder="Tempat Tinggal" value="<?php echo $tempat_tinggal; ?>">
							<span class="warning"><?php echo $tempat_tinggal; ?></span>
						</div>
						<p> <center> 1. Bersama orang tua 2. Wali 3. Kos 4. Asrama 5. Panti Asuhan 6. Lainnya </center> </p>
					</div>

					<div class="form-group row">
						<label for="mode_transportasi" class="col-sm-2 col-form-label"> Mode Transportasi </label>
						<div class="col-sm-10">
							<input type="text" name="mode_transportasi" class="form-control <?php echo ($error_mode_transportasi !="" ? "is-invalid" : ""); ?>" id="mode_transportasi" placeholder="Mode Transportasi" value="<?php echo $mode_transportasi; ?>">
							<span class="warning"><?php echo $error_mode_transportasi; ?></span>
						</div>
						<p> <center> 1. Jalan kaki 2. Kendaraan pribadi 3. Kendaraan umum/angkot/pete-pete 4. Jemputan sekolah 5. Kereta api 6. Ojek 7. Andong/Bendi/Sado/Dokar/Delman/Beca 8. Perahu penyeberangan/rakit/getek 99. Lainnya </center> </p>
					</div>

					<div class="form-group row">
						<label for="nomor_hp" class="col-sm-2 col-form-label"> Nomor HP </label>
						<div class="col-sm-10">
							<input type="text" name="nomor_hp" class="form-control <?php echo ($error_nomor_hp !="" ? "is-invalid" : ""); ?>" id="nomor_hp" placeholder="Nomor HP" value="<?php echo $nomor_hp; ?>">
							<span class="warning"><?php echo $error_nomor_hp; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nomor_telepon" class="col-sm-2 col-form-label"> Nomor Telepon </label>
						<div class="col-sm-10">
							<input type="text" name="nomor_telepon" class="form-control <?php echo ($error_nomor_telepon !="" ? "is-invalid" : ""); ?>" id="nomor_telepon" placeholder="Nomor Telepon" value="<?php echo $nomor_telepon; ?>">
							<span class="warning"><?php echo $error_nomor_telepon; ?></span>
						</div>
					</div>


					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label"> E-mail Pribadi </label>
						<div class="col-sm-10">
							<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="E-mail Pribadi" value="<?php echo $email; ?>">
							<span class="warning"><?php echo $error_email; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="penerima_kps" class="col-sm-2 col-form-label"> Penerima KPS/PKH/KIP </label>
						<div class="col-sm-10">
							<input type="text" name="penerima_kps" class="form-control <?php echo ($error_penerima_kps !="" ? "is-invalid" : ""); ?>" id="penerima_kps" placeholder="Penerima KPS/KKS/PKH/KIP" value="<?php echo $penerima_kps; ?>">
							<span class="warning"><?php echo $error_penerima_kps; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nomor_kps" class="col-sm-2 col-form-label"> Nomor KPS/KKS/PKH/KIP </label>
						<div class="col-sm-10">
							<input type="text" name="nomor_kps" class="form-control <?php echo ($error_nomor_kps !="" ? "is-invalid" : ""); ?>" id="nomor_kps" placeholder="Nomor KPS/KKS/PKH/KIP" value="<?php echo $nomor_kps; ?>">
							<span class="warning"><?php echo $error_nomor_kps; ?></span>
						</div>
						<p> <center> *) Apabila menerima </center> </p>
					</div>

					<div class="form-group row">
						<label for="kewarganegaraan" class="col-sm-2 col-form-label"> Kewarganegaraan </label>
						<div class="col-sm-10">
							<input type="text" name="kewarganegaraan" class="form-control <?php echo ($error_kewarganegaraan !="" ? "is-invalid" : ""); ?>" id="kewarganegaraan" placeholder="Kewarganegaraan" value="<?php echo $kewarganegaraan; ?>">
							<span class="warning"><?php echo $error_kewarganegaraan; ?></span>
						</div>
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
echo "Nama Lengkap = ".$nama_lengkap;
echo "<br>";
echo "Jenis Kelamin = ".$jenis_kelamin;
echo "<br>";
echo "NISN = ".$nisn;
echo "<br>";
echo "NIK = ".$nik;
echo "<br>";
echo "Tempat Lahir = ".$tempat_lahir;
echo "<br>";
echo "Tanggal Lahir = ".$tanggal_lahir;
echo "<br>";
echo "Agama = ".$agama;
echo "<br>";
echo "Berkebutuhan Khusus = ".$berkebutuhan_khusus;
echo "<br>";
echo "Alamat Jalan = ".$alamat_jalan;
echo "<br>";
echo "RT = ".$rt;
echo "<br>";
echo "RW = ".$rw;
echo "<br>";
echo "Nama Dusun = ".$nama_dusun;
echo "<br>";
echo "Nama Kelurahan/Desa = ".$nama_kelurahan;
echo "<br>";
echo "Kecamatan = ".$kecamatan;
echo "<br>";
echo "Kode Pos = ".$kode_pos;
echo "<br>";
echo "Tempat Tinggal = ".$tempat_tinggal;
echo "<br>";
echo "Mode Transportasi = ".$mode_transportasi;
echo "<br>";
echo "Nomor HP = ".$nomor_hp;
echo "<br>";
echo "Nomor Telepon = ".$nomor_telepon;
echo "<br>";
echo "E-mail Pribadi = ".$email;
echo "<br>";
echo "Penerima KPS/PKH/KIP = ".$penerima_kps;
echo "<br>";
echo "Penerima KPS/KKS/PKH/KIP = ".$nomor_kps;
echo "<br>";
echo "Kewarganegaraan = ".$kewarganegaraan;
?>

</body>
</html>