<!DOCTYPE html>
<html>
<head>
	<title> Registrasi Peserta Didik </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
" crossorigin="anonymous">
	<style>
		.warning {color:  #FF0000;}
	</style>
</head>
<body>

<?php
$error_jenis_pendaftaran = "";
$error_tanggal_masuk_sekolah = "";
$error_nis = "";
$error_nomor_peserta_ujian = "";
$error_apakah_pernah_paud = "";
$error_apakah_pernah_tk = "";
$error_nomor_seri_skhun_sebelumnya = "";
$error_nomor_seri_ijazah_sebelumnya = "";
$error_hobi = "";
$error_cita_cita = "";

$jenis_pendaftaran = "";
$tanggal_masuk_sekolah = "";
$nis = "";
$nomor_peserta_ujian = "";
$apakah_pernah_paud = "";
$apakah_pernah_tk = "";
$nomor_seri_skhun_sebelumnya = "";
$nomor_seri_ijazah_sebelumnya = "";
$hobi = "";
$cita_cita = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["jenis_pendaftaran"])) {
		$error_telp = "Jenis pendafataran tidak boleh kosong";
	} else {
		$jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);

		if (!is_numeric($jenis_pendaftaran)) {
			$error_jenis_pendaftaran = 'Jenis pendaftaran hanya boleh angka';
		}
	}

	if (empty($_POST["tanggal_masuk_sekolah"])) {
		$error_tanggal_masuk_sekolah = "Tanggal masuk sekolah tidak boleh kosong";
	} else {
		$tanggal_masuk_sekolah = cek_input($_POST["tanggal_masuk_sekolah"]);
	}

	if (empty($_POST["nis"])) {
		$error_nis = "NIS tidak boleh kosong";
	} else {
		$nis = cek_input($_POST["nis"]);

		if (!is_numeric($nis)) {
			$error_nis = 'Jenis pendaftaran hanya boleh angka';
		}
	}

	if (empty($_POST["nomor_peserta_ujian"])) {
		$error_nomor_peserta_ujian = "Nomor peserta ujian tidak boleh kosong";
	} else {
		$nomor_peserta_ujian = cek_input($_POST["nomor_peserta_ujian"]);

		if (!is_numeric($nomor_peserta_ujian)) {
			$error_nomor_peserta_ujian = 'Jenis pendaftaran hanya boleh angka';
		}
	}

	if (empty($_POST["apakah_pernah_paud"])) {
		$error_apakah_pernah_paud = "Apakah pernah PAUD tidak boleh kosong";
	} else {
		$apakah_pernah_paud = cek_input($_POST["apakah_pernah_paud"]);
	}

	if (empty($_POST["apakah_pernah_tk"])) {
		$error_apakah_pernah_tk = "Apakah pernah TK tidak boleh kosong";
	} else {
		$apakah_pernah_tk = cek_input($_POST["apakah_pernah_tk"]);
	}

	if (empty($_POST["nomor_seri_skhun_sebelumnya"])) {
		$error_nomor_seri_skhun_sebelumnya = "Nomor seri SKHUN sebelumnya tidak boleh kosong";
	} else {
		$nomor_seri_skhun_sebelumnya = cek_input($_POST["nomor_seri_skhun_sebelumnya"]);

		if (!is_numeric($nomor_seri_skhun_sebelumnya)) {
			$error_nomor_seri_skhun_sebelumnya = 'Nomor seri SKHUN sebelumnya hanya boleh angka';
		}
	}

	if (empty($_POST["nomor_seri_ijazah_sebelumnya"])) {
		$error_nomor_seri_ijazah_sebelumnya = "Nomor seri Ijazah sebelumnya tidak boleh kosong";
	} else {
		$nomor_seri_ijazah_sebelumnya = cek_input($_POST["nomor_seri_ijazah_sebelumnya"]);

		if (!is_numeric($nomor_seri_ijazah_sebelumnya)) {
			$error_nomor_seri_ijazah_sebelumnya = 'Nomor seri Ijazah sebelumnya hanya boleh angka';
		}
	}

	if (empty($_POST["hobi"])) {
		$error_hobi = "Hobi tidak boleh kosong";
	} else {
		$hobi = cek_input($_POST["hobi"]);

		if (!is_numeric($hobi)) {
			$error_nomor_seri_ijazah_sebelumnya = 'Hobi hanya boleh angka';
		}
	}

	if (empty($_POST["cita_cita"])) {
		$error_cita_cita = "Cita-cita tidak boleh kosong";
	} else {
		$cita_cita = cek_input($_POST["cita_cita"]);

		if (!is_numeric($cita_cita)) {
			$error_cita_cita = 'Cita-cita hanya boleh angka';
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
			<div class="card-header"> REGISTRASI PESERTA DIDIK </div>
			<div class="card-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group row">
						<label for="jenis_pendaftaran" class="col-sm-2 col-form-label"> Jenis Pendaftaran </label>
						<div class="col-sm-10">
							<input type="text" name="jenis_pendaftaran" class="form-control <?php echo ($error_jenis_pendaftaran !="" ? "is-invalid" : ""); ?>" id="jenis_pendaftaran" placeholder="Jenis Pendaftaran" value="<?php echo $jenis_pendaftaran; ?>">
							<span class="warning"><?php echo $error_jenis_pendaftaran; ?></span>
						</div>
						<p> <center> 1. Siswa Baru 2. Pindahan </center> </p>
					</div>

					<div class="form-group row">
						<label for="tanggal_masuk_sekolah" class="col-sm-2 col-form-label"> Tanggal Masuk Sekolah </label>
						<div class="col-sm-10">
							<input type="text" name="tanggal_masuk_sekolah" class="form-control <?php echo ($error_tanggal_masuk_sekolah !="" ? "is-invalid" : ""); ?>" id="tanggal_masuk_sekolah" placeholder="Tanggal Masuk Sekolah" value="<?php echo $tanggal_masuk_sekolah; ?>">
							<span class="warning"><?php echo $error_tanggal_masuk_sekolah; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nis" class="col-sm-2 col-form-label"> NIS </label>
						<div class="col-sm-10">
							<input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" id="nis" placeholder="nis" value="<?php echo $nis; ?>">
							<span class="warning"><?php echo $error_nis; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nomor_peserta_ujian" class="col-sm-2 col-form-label"> Nomor Peserta Ujian </label>
						<div class="col-sm-10">
							<input type="text" name="nomor_peserta_ujian" class="form-control <?php echo ($error_nomor_peserta_ujian !="" ? "is-invalid" : ""); ?>" id="nomor_peserta_ujian" placeholder="Nomor Peserta Ujian" value="<?php echo $nomor_peserta_ujian; ?>">
							<span class="warning"><?php echo $error_nomor_peserta_ujian; ?></span>
						</div>
						<p> <center> * Nomor peserta Ujian adalah 20 digit yang tertera dalam Sertifikat SKHUN SD, diisi bagi peserta didik jenjang SMP </center> </p>
					</div>

					<div class="form-group row">
						<label for="apakah_pernah_paud" class="col-sm-2 col-form-label"> Apakah pernah PAUD </label>
						<div class="col-sm-10">
							<input type="text" name="apakah_pernah_paud" class="form-control <?php echo ($error_apakah_pernah_paud !="" ? "is-invalid" : ""); ?>" id="apakah_pernah_paud" placeholder="Apakah pernah PAUD" value="<?php echo $apakah_pernah_paud; ?>">
							<span class="warning"><?php echo $error_apakah_pernah_paud; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="apakah_pernah_tk" class="col-sm-2 col-form-label"> Apakah pernah TK </label>
						<div class="col-sm-10">
							<input type="text" name="apakah_pernah_tk" class="form-control <?php echo ($error_apakah_pernah_tk !="" ? "is-invalid" : ""); ?>" id="apakah_pernah_tk" placeholder="Apakah pernah TK" value="<?php echo $apakah_pernah_tk; ?>">
							<span class="warning"><?php echo $error_apakah_pernah_tk; ?></span>
						</div>
					</div>

					<div class="form-group row">
						<label for="nomor_seri_skhun_sebelumnya" class="col-sm-2 col-form-label"> Nomor Seri SKHUN Sebelumnya </label>
						<div class="col-sm-10">
							<input type="text" name="nomor_seri_skhun_sebelumnya" class="form-control <?php echo ($error_nomor_seri_skhun_sebelumnya !="" ? "is-invalid" : ""); ?>" id="nomor_seri_skhun_sebelumnya" placeholder="Nomor Seri SKHUN Sebelumnya" value="<?php echo $nomor_seri_skhun_sebelumnya; ?>">
							<span class="warning"><?php echo $error_nomor_seri_skhun_sebelumnya; ?></span>
						</div>
						<p> <center> Diisi 16 digit yang tertera di SKHUN SD - diisi bagi PD jenjang SMP </center> </p>
					</div>

					<div class="form-group row">
						<label for="nomor_seri_ijazah_sebelumnya" class="col-sm-2 col-form-label"> Nomor Seri Ijazah Sebelumnya </label>
						<div class="col-sm-10">
							<input type="text" name="nomor_seri_ijazah_sebelumnya" class="form-control <?php echo ($error_nomor_seri_ijazah_sebelumnya !="" ? "is-invalid" : ""); ?>" id="nomor_seri_ijazah_sebelumnya" placeholder="Nomor Seri Ijazah Sebelumnya" value="<?php echo $nomor_seri_ijazah_sebelumnya; ?>">
							<span class="warning"><?php echo $error_nomor_seri_ijazah_sebelumnya; ?></span>
						</div>
						<p> <center> Diisi 16 digit yang tertera di Ijazah SD - diisi bagi PD jenjang SMP </center> </p>
					</div>

					<div class="form-group row">
						<label for="hobi" class="col-sm-2 col-form-label"> Hobi </label>
						<div class="col-sm-10">
							<input type="text" name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is-invalid" : ""); ?>" id="hobi" placeholder="Hobi" value="<?php echo $hobi; ?>">
							<span class="warning"><?php echo $error_hobi; ?></span>
						</div>
						<p> <center> 1. Olahraga 2. Kesenian 3. Membaca 4. Menulis 5. Travelling 6. Lainnya </center> </p>
					</div>

					<div class="form-group row">
						<label for="cita_cita" class="col-sm-2 col-form-label"> Cita-cita </label>
						<div class="col-sm-10">
							<input type="text" name="cita_cita" class="form-control <?php echo ($error_cita_cita !="" ? "is-invalid" : ""); ?>" id="cita_cita" placeholder="Cita-cita" value="<?php echo $cita_cita; ?>">
							<span class="warning"><?php echo $error_cita_cita; ?></span>
						</div>
						<p> <center> 1. PNS 2. TNI/polri 3. Guru/Dosen 4. Dokter 5. Politikus 6. Wiraswasta 7. Seni/Lukis/Artis/Sejenis 8. Lainnya </center> </p>
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
echo "Jenis Pendaftaran = ".$jenis_pendaftaran;
echo "<br>";
echo "Tanggal Masuk Sekolah = ".$tanggal_masuk_sekolah;
echo "<br>";
echo "NIS = ".$nis;
echo "<br>";
echo "Nomor Peserta Ujian = ".$nomor_peserta_ujian;
echo "<br>";
echo "Apakah pernah PAUD = ".$apakah_pernah_paud;
echo "<br>";
echo "Apakah pernah TK = ".$apakah_pernah_tk;
echo "<br>";
echo "Nomor Seri SKHUN Sebelumnya = ".$nomor_seri_skhun_sebelumnya;
echo "<br>";
echo "Nomor Seri Ijazah Sebelumnya = ".$nomor_seri_ijazah_sebelumnya;
echo "<br>";
echo "Hobi = ".$hobi;
echo "<br>";
echo "Cita-cita = ".$cita_cita;
?>

</body>
</html>