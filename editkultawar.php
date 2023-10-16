<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Edit Data Matkul</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<?php
	require "fungsi.php";
	require "head.html";
	$idkultawar=decrypturl($_GET['kode']);
	$sql="select * from kultawar where idkultawar='$idkultawar'";
	$qry=mysqli_query($koneksi,$sql);
	$row=mysqli_fetch_assoc($qry);
?>
	<div class="utama">
		<h2 class="mb-3 text-center">EDIT DATA MATKUL</h2>	
		<div class="row">
		<div class="col-sm-9">
			<form enctype="multipart/form-data" method="post" action="sv_editkultawar.php">
				<div class="form-group">
					<label for="idmatkul">Id Matkul:</label>
					<input class="form-control" type="text" name="idmatkul" id="idmatkul" value="<?php echo $row['idmatkul']?>" readonly>
				</div>
				<div class="form-group">
					<label for="npp">NPP:</label>
					<input class="form-control" type="text" name="npp" id="npp" value="<?php echo $row['npp']?>">
				</div>
				<div class="form-group">
					<label for="klp">Kelompok:</label>
					<input class="form-control" type="text" name="klp" id="klp" value="<?php echo $row['klp']?>">
				</div>	
                <div class="form-group">
					<label for="hari">Hari:</label>
					<input class="form-control" type="text" name="hari" id="hari" value="<?php echo $row['hari']?>">
				</div>
                <div class="form-group">
					<label for="ruang">Ruang:</label>
					<input class="form-control" type="text" name="ruang" id="ruang" value="<?php echo $row['ruang']?>">
				</div>			
				<div>		
					<button class="btn btn-primary" type="submit" id="submit">Simpan</button>
				</div>
				<input type="hidden" name="id" id="id" value="<?php echo $idmatkul?>">
			</form>
		</div>
		</div>
	</div>
	<!-- script>
		$('#submit').on('click',function(){
			var id 		= $('#id').val();
			var nama	= $('#nama').val();
			var email 	= $('#email').val();
			$.ajax({
				method	: "POST",
				url		: "sv_editMhs.php",
				data	: {id:id, nama:nama, email:email}
			});
		});
	</script -->
</body>
</html>