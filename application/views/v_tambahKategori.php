<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kategori</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<main role="main" class="container">
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">Tambah Kategori</h1>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">

						<?php echo form_open( 'home/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

						<div class="form-group">
							<label for="cat_name">Nama Kategori</label>
							<input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
						</div>
						<div class="form-group">
							<label for="text">Deskripsi</label>
							<input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description') ?>" required>
						</div>
						<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</section>
	</main>

	<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>