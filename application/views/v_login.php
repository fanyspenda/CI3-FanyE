<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

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
		<?php echo form_open('user/login', array('class' => 'needs_validation', 'novalidate' => '')); ?>
		<div class="col-md-4 col-md-offset-4">
			
			<center><legend>LOGIN</legend></center>
		
			<div class="form-group">
				<label for= 'Username'>Username</label>
				<input type="text" class="form-control" name="username" value="<?php echo set_value('username');?>" placeholder="Username" autofocus>
			</div>
			<div class="form-group">
				<label for='Password'>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>

			<center><button type="submit" class="btn btn-primary" style="padding: 12px 48px">Login</button></center>
		
			<?php echo form_close();?>
		</div>
		<?php $this->load->view('footer.php'); ?>
	</body>
</html>