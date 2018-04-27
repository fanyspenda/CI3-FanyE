<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daftar Kategori</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!--datatable link -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

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
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url('home/tambahKategori')?>">Tambah Kategori</a></li>
									<li><a href="<?php echo site_url('home/lihatKategori')?>"> Lihat Kategori</a></li>
								</ul>
							</li>
							
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
			<table class="table table-striped table-bordered data">
					<thead>
						<tr>			
							<th>ID Kategori</th>
							<th>Nama Kategori</th>
							<th>Deskripsi</th>
							<th>Waktu Dibuat</th>
							<th colspan="2" style="text-align: center;">Aksi</font></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($dataKategori as $key) {?>
						<tr>				
							<td><?php echo $key['cat_id']; ?></td>
							<td><?php echo $key['cat_name']; ?></td>
							<td><?php echo $key['cat_description']; ?></td>
							<td><?php echo $key['date_created']; ?></td>
							<td>
								<form action="<?php echo base_url('home/keEditKategori')?>" method="post">
									<input type="hidden" name= "edit" class="form-control" value="<?php echo $key['cat_id']; ?>">
									<button class="btn btn-warning">Edit</button>
								</form>
							</td>
							<td>
								<form action="<?php echo base_url('home/hapusKategori')?>" method="post">
									<input type="hidden" name= "delete" class="form-control" value="<?php echo $key['cat_id']; ?>">
									<input type="hidden" name= "cat_name" class="form-control" value="<?php echo $key['cat_name']; ?>">
									<button class="btn btn-danger" onclick="return confirm('yakin akan menghapus kategori <?php echo $key['cat_name']?> ?')">Delete</button>
								</form>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>