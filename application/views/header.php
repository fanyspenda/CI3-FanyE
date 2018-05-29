		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
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
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('user/keadduser')?>">Register User</a></li>
								<li><a href="<?php echo site_url('user/keviewusers')?>"> Lihat Users</a></li>
							</ul>
						</li>							
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url('home/uploadBaru')?>">Upload Artikel Baru</a></li>
						<li class="active"><a href="<?php echo site_url('home/blogdatatable')?>">Blog</a></li>

						<?php $data_user = $this->session->userdata('datauser');
						if($data_user['username']!=''){
						?>
							<li><a href="<?php echo site_url('user/logout')?>">Logout</a></li>
						<?php } else {?>
							<li><a href="<?php echo site_url('user/kelogin')?>">Login</a></li>
						<?php } ?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('tidakBerhak')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('tidakBerhak').'</p>'; ?>
       <?php endif; ?>