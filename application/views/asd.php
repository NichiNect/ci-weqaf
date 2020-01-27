<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title><?= $title; ?></title>
</head>
<body>
	
	<div class="container mt-5">
		<?= form_open_multipart('Testing'); ?>
			
			<div class="form-group">
				<label for="file1">Name</label>
				<input name="nama" type="text" class="form-control-file" id="file1">
				<?= form_error('nama'); ?>
			</div>

			<div class="form-group">
				<label for="file1">Example file input 1</label>
				<input name="userfile1" type="file" class="form-control-file" id="file1">
				<?= form_error('userfile1'); ?>
			</div>

			<div class="form-group">
				<label for="file2">Example file input 2</label>
				<input name="userfile2" type="file" class="form-control-file" id="file2">
			</div>

			<div class="form-group">
				<label for="file3">Example file input 3</label>
				<input name="userfile3" type="file" class="form-control-file" id="file3">
			</div>

			<button type="submit" id="submit" class="btn btn-outline-primary">Submit</button>
		</form>
	</div>

<h1>Hasil</h1>
<?php 
	
	$data = $this->db->get('testing1')->result_array();

 ?>

 <?php foreach ($data as $d) : ?>
	<?php 
		echo $d['nama'] . '<br>';
		echo $d['ktp'] . '<br>';
		echo $d['tdp'] . '<br>';
		echo $d['npwp'] . '<br><br><br>';
	 ?>

	 <img src="<?= base_url('assets/data/ktp/') . $d['ktp'] ?>">
	 <img src="<?= base_url('assets/data/tdp/') . $d['tdp'] ?>">
	 <img src="<?= base_url('assets/data/npwp/') . $d['npwp'] ?>">
 <?php endforeach; ?>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>