<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog Fany</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!--datatable link -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	</head>
	<body>
		<?php $this->load->view('header'); ?>
		<h1 class="text-center">DATA ARTIKEL</h1>
		<div class="container">
			<table class="table table-striped table-bordered data">
				<thead>
					<tr>			
						<th>ID</th>
						<th>Judul Artikel</th>
						<th>Kategori</th>
						<th>Author</th>
						<th>tgl dibuat</th>
						<th>Detail</th>
						<th>Hapus</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($all_artikel as $key) { ?>

	    	    	<tr>
		    	    	<td><?php echo $key['id']?></td>
		    	    	<td><?php echo $key['title']?></td>
		    	    	<td><?php echo $key['nama_kategori']?></td>
		    	    	<td><?php echo $key['author']?></td>
		    	    	<td><?php echo $key['date']?></td>

				        <td>
				        	<form action="<?php echo site_url('Home/detail') ?>" method="post">
				        		<input type="hidden" name="id" value="<?php echo $key['id']?>">
				        		<button class="btn btn-primary" style="margin-bottom: 10px;">DETAIL</button>
				        	</form>
			        	</td>
			        	<td>
				        	<form action="<?php echo site_url('Home/hapus') ?>" method="post">
				        		<input type="hidden" name="id" value="<?php echo $key['id']?>">
				        		<input type="hidden" name="namaGambar" value="<?php echo $key['image_file']?>">
				        		<button class="btn btn-danger" onclick="return confirm('yakin akan menghapus data ini?')" style="margin-bottom: 10px;">HAPUS</button>
				        	</form>
			        	</td>
			        	<td>
				        	<form action="<?php echo site_url('Home/formEdit') ?>" method="post">
				        		<input type="hidden" name="id" value="<?php echo $key['id']?>">
				        		<button class="btn btn-success" style="margin-bottom: 10px;">EDIT</button>
				        	</form>
			        	</td>
			        </tr>
			        <?php } ?>
		        </tbody>
		    </table>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
			$('.data').DataTable();
		});
	</script>
	</body>
</html>