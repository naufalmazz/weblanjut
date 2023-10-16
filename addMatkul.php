<!DOCTYPE html>
<html>
	<head>
		<title>Sistem Informasi Akademik::Tambah Data Matkul</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/styleku.css">
		<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
		<script src="bootstrap4/js/bootstrap.js"></script>
	</head>
	<body>
		<?php
			require "head.html";
		?>
		<div class="utama">		
			<br><br><br>		
			<h3>TAMBAH DATA MATA KULIAH</h3>
			<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			</div>	
			<form method="POST" action="sv_addMatkul.php" enctype="multipart/form-data">
				<div class="form-row">
					
					<div class="form-group col-md-2">
                        <label for="code">Kode</label>
                        <select class="form-control" name="code">
                            <option value="">-- PILIH --</option>
                            <option value="A11">A11</option>
                            <option value="A12">A12</option>
                            <option value="A14">A14</option>
                            <option value="A15">A15</option>
                            <option value="A16">A16</option>
                            <option value="A17">A17</option>
                            <option value="A22">A22</option>
                            <option value="A24">A24</option>
                            <option value="P31">P31</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="id"><br/></label>
                        <input class="form-control" type="text" name="id" id="id">
                    </div>
                    
				</div>
				<div class="form-group">
					<label for="nama">Nama Mata Kuliah</label>
					<input class="form-control" type="text" name="nama" id="nama">
				</div>
				<div class="form-group">
					<label for="sks">SKS</label>
                    <select class="form-control" name="sks">
                        <option value="">-- PILIH --</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
				</div>
                <div class="form-group">
					<label for="jenis">Jenis</label>
                    <select class="form-control" name="jenis">
                        <option value="">-- PILIH --</option>
                        <option value="P">P</option>
                        <option value="T">T</option>
                        <option value="P/T">P/T</option>
                    </select>
				</div>
                <div class="form-group">
					<label for="semester">Semester</label>
					<select class="form-control" name="semester">
                        <option value="">-- PILIH --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
				</div>
				<div>		
					<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
				</div>
			</form>
		</div>
	</body>
</html>