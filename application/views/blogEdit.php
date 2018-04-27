<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Data</title>

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
		<!-- Begin of Navbar -->
		<div class="container-fluid">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Fany E</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url('home')?>">Home</a></li>
							<li><a href="<?php echo site_url('home/news')?>">News</a></li>
							<li><a href="<?php echo site_url('home/about')?>">About</a></li>
							<li><a href="<?php echo site_url('home/contact')?>">Contact</a></li>
						</ul>
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo base_url('home/uploadBaru')?>">Upload Artikel Baru</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
							<li class="active"><a href="<?php echo site_url('home/blog')?>">Blog</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<!-- end of navbar-->
		<h1 class="text-center">Hello World</h1>
		<!--Beginning of Box-->
		<!--end of box-->
		<!--beginning of form-->
		
			<?php echo form_open_multipart('Home/edit'); ?>
			<legend>FORM EDIT DATA</legend>
		
			<label for="">ID</label>
			<input type="text" class="form-control" name="id" placeholder="ID Artikel" value="<?php echo $key->id ?>" readonly="readonly">

			<label for="">Judul Artikel</label>
			<input type="text" class="form-control" name="judul" value="<?php echo $key->title ?>" placeholder="Judul artikel" required="required">

			<label for="">Author</label>
			<input type="text" class="form-control" name="author" value="<?php echo $key->author ?>" placeholder="Author" required="required">

			<label for="text-center">Isi Artikel</label>
			<textarea class="form-control" name="isi" placeholder="isi" required="required"><?php echo $key->content ?></textarea>
			
			<label for="">Tanggal</label>
			<input type="date" class="form-control" name="tanggal"  value="<?php echo $key->date ?>" required="required">

			<label for="">Kategori Sekarang:</label>
			<input type="text" class="form-control" value="<?php echo $key->nama_kategori ?>" disabled>
			<br><br>
			

			<label>Kategori Baru: </label>
			<select name="kategori" required>
				<?php foreach ($Kategori as $key2) { ?>
				<option value="<?php echo $key2['cat_name']?>"><?php echo $key2['cat_name']?></option>
				<?php } ?>
			</select>
			<br>
			<br>

			<label for="">Ubah Gambar?</label>
			<input type="radio"  name="radioGambarBaru" value="ya" required="required">Ya
			<input type="radio"  name="radioGambarBaru" value="tidak">Tidak
			<br><br>

			<input type="hidden" name="gambarLama" value="<?php echo $key->image_file ?>">
			<label for="">Gambar</label>
			<input type="file" name="gambarBaru" size="20" />
					
			<button type="submit" class="btn btn-primary">Submit</button>
			 <?php echo form_close(); ?>
	<!-- 	</form> -->
		<!--end of form-->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>