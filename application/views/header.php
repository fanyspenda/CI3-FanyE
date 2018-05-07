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