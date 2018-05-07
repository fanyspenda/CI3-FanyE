<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog Fany</title>

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
		<?php $this->load->view('header'); ?>
			<!-- end of navbar-->
			<!-- begin of Bs3-carousel-->
			<!--end of bs3 Carousel-->
		<h1 class="text-center">Hello World</h1>
		<!--Beginning of Box-->
		<div class="container">
			<div class="row">
		<?php foreach ($all_artikel as $key) {
			$increment = 3;
				if($increment%3==0){ ?>
					<div class="container">
					<div class="row">
	    			<div class="col-sm-4">
		    
		<?php 	} ?>
					<div class="panel panel-primary">
		    	    	<div class="panel-heading"><?php echo $key['title']?></div>
		        		<?php $dirName = '/assets/imgDatabase/';
		        		$fileName = $key["image_file"];
		        		$imageUrl = $dirName . $fileName; ?>
		        		<div class="panel-body"><img src="<?php echo base_url($imageUrl); ?>" class="img-responsive" style='width:100%; height: 200px' alt="Image"></div>
		        		<div class="panel-footer">Author : <?php echo $key['author'];?></div>
		        		<HR>
		        		<center>
		        			<form action="<?php echo site_url('Home/detail') ?>" method="post">
		        			<input type="hidden" name="id" value="<?php echo $key['id']?>">
		        			<button class="btn btn-primary" style="margin-bottom: 10px;">DETAIL</button>
		        		</form>
		        		<form action="<?php echo site_url('Home/hapus') ?>" method="post">
		        			<input type="hidden" name="id" value="<?php echo $key['id']?>">
		        			<input type="hidden" name="namaGambar" value="<?php echo $key['image_file']?>">
		        			<button class="btn btn-danger" onclick="return confirm('yakin akan menghapus data ini?')" style="margin-bottom: 10px;">HAPUS</button>
		        		</form>
		        		<form action="<?php echo site_url('Home/formEdit') ?>" method="post">
		        			<input type="hidden" name="id" value="<?php echo $key['id']?>">
		        			<button class="btn btn-success" style="margin-bottom: 10px;">EDIT</button>
		        		</form>
		        		</center>
		    		</div>
		    		</div>
				<?php $increment = $increment + 1;
			    if($increment%3==0){ ?>
		    		</div>
		    		</div>
			    	<br>
				<?php } ?>
			<?php } ?>
			</div>
			</div>
		<!--end of box-->
		<?php $this->load->view('footer.php'); ?>
		<center>
			<?php if (isset($links)) {
	            	echo $links;
	        	}
	        ?>
        </center>

	</body>
</html>