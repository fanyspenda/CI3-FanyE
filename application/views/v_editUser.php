<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit User</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php $this->load->view('header'); ?>

		<?php echo validation_errors('<div class = "alert alert-danger">', '</div>');?>
		<?php echo form_open('user/edituser', array('class' => 'needs_validation', 'novalidate' => '')); ?>
			
		<?php foreach ($detailUser as $key): ?>
			<center><legend>Edit User</legend></center>

			<input type="hidden" class="form-control" name="id" value="<?php echo $key['user_id'];?>" placeholder="Nama Lengkap">

			<div class="form-group">
				<label for='Nama'>Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $key['nama']);?>" placeholder="Nama Lengkap">
			</div>
			<div class="form-group">
				<label for='KodePos'>Kode Pos</label>
				<input type="text" class="form-control" name="kodepos" value="<?php echo set_value('kodepos', $key['kodepos']);?>" placeholder="kode pos">
			</div>
			<div class="form-group">
				<label for='Email'>Email</label>
				<input type="text" class="form-control" name="email" value="<?php echo set_value('email', $key['email']);?>" placeholder="E-Mail">
			</div>
			<div class="form-group">
				<label for= 'Username'>Username</label>
				<input type="text" class="form-control" name="username" value="<?php echo set_value('username', $key['username']);?>" placeholder="Username">
			</div>

			<button type="submit" class="btn btn-warning">Edit Data</button>
			<?php echo form_close();?>

		<?php endforeach ?>

		<?php $this->load->view('footer.php'); ?>
	</body>
</html>