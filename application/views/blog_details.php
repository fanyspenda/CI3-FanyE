<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Detail Data</title>

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
							<li><a href="#">Link</a></li>
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
			<!-- begin of Bs3-carousel-->
			<div class="container-fluid">
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="<?php echo base_url('/assets/img/gambar1.jpg');?>" style = "width: 100%; height: 50% "> 
							<div class="container">
								<div class="carousel-caption">
									<h1>Slide 1 Gambar</h1>
									<p>Percobaan Menggunakan Bootstrap Carousel</p>
								</div>
							</div>
						</div>
						<div class="item">
							<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="<?php echo base_url('/assets/img/gambar2.jpg');?>" style = "width: 100%; height: 50% ">
							<div class="container">
								<div class="carousel-caption">
									<h1>Slide 2 Gambar</h1>
									<p>Percobaan Menggunakan Bootstrap Carousel</p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>
		<!--end of bs3 Carousel-->
		
		<!--Beginning of Box-->
		<div class="container" style="margin-top: 20px;">
			<div class="row">
	    		<div class="col-sm-12">
		    		<div class="panel panel-primary">
		        		<div class="panel-heading"><?php echo $key->title; ?></div>
				        <div class="panel-body">
							<?php 
								$dirName = '/assets/imgDatabase/';
		        				$fileName = $key->image_file;
		        				$imageUrl = $dirName . $fileName; 
		        			?>
				        	<img src="<?php echo base_url($imageUrl) ?>" class="img-responsive" style='width:1920px; height: 750px' alt="Image">
				        </div>
				        <div class="panel-footer"><?php echo $key->author; ?></div>
				        <div class="panel-footer"><?php echo $key->content; ?></div>
				        <div class="panel-footer">Kategori : <?php echo $key->nama_kategori; ?></div>
		      		</div>
		    	</div>
			</div>
		</div><br>
		<!--end of box-->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>