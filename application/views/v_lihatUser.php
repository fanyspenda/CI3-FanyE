<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daftar User</title>

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
		<!-- Begin of Navbar -->
		<div class="container-fluid">
		<?php $this->load->view('header.php');
		?>
			<!-- end of navbar-->
			<table class="table table-striped table-bordered data">
					<thead>
						<tr>			
							<th>ID user</th>
							<th>Nama</th>
							<th>Kode Pos</th>
							<th>E-Mail</th>
							<th>tanggal Daftar</th>
							<th>hapus</th>
							<th>edit</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($user as $key) {?>
						<tr>				
							<td><?php echo $key['user_id']; ?></td>
							<td><?php echo $key['nama']; ?></td>
							<td><?php echo $key['kodepos']; ?></td>
							<td><?php echo $key['email']; ?></td>
							<td><?php echo $key['register_date']; ?></td>
							<td>
								<form action="<?php echo base_url('User/keEditUser')?>" method="post">
									<input type="hidden" name= "edit" class="form-control" value="<?php echo $key['user_id']; ?>">
									<button class="btn btn-warning">Edit</button>
								</form>
							</td>
							<td>
								<form action="<?php echo base_url('User/hapusUser')?>" method="post">
									<input type="hidden" name= "id" class="form-control" value="<?php echo $key['user_id']; ?>">
									<button class="btn btn-danger" onclick="return confirm('yakin akan menghapus user <?php echo $key['nama']?> ?')">Delete</button>
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