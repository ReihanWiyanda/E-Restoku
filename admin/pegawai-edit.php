<?php
include "../koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Data Pegawai</title>
  </head>
  <body>
	<div class="container" style="margin-top:20px">
		<h2>Edit Data Pegawai</h2>
		
		<hr>
		
			<?php
			if ( isset($_GET["id_pegawai"])) {
			$id_pegawai = $_GET["id_pegawai"];
				if ($ambil_data = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'")) {
					$data_pegawai = $ambil_data->fetch_assoc();
			?>

			<form action="" method="GET">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-10">
					<input type="text" value="<?php echo $data_pegawai["nama_pegawai"];?>" name="nama_pegawai" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="text" value="<?php echo $data_pegawai["password"];?>" name="password" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis_Kelamin</label>
				<div class="col-sm-10">
					<input type="text" value="<?php echo $data_pegawai["jenis_kelamin"];?>" name="jenis_kelamin" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" value="<?php echo $data_pegawai["alamat"];?>" name="alamat" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No HP</label>
				<div class="col-sm-10">
					<input type="text" value="<?php echo $data_pegawai["no_hp"];?>" name="no_hp" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Posisi</label>
				<div class="col-sm-10">
					<input type="text" value="<?php echo $data_pegawai["posisi"];?>" name="posisi" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="update" class="btn btn-primary" value="Update">
					<input type="button" onClick="javascript:history.back()" class="btn btn-primary" value="Kembali">
				</div>
			</div>
		</form>
			<?php
			} else
				echo "Menu dengan Kode : $id_pegawai tidak ada. Edit data dibatalkan!";
			?>

		<?php
		} else
			echo "Id pegawai tidak valid, Edit dibatalkan!";
		?>
	</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>