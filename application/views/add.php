<!DOCTYPE html>
<html>
<head>
	<title>CRUD PESERTA</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
	  	    <div class="col-md-8">
	    	<h2>Form Input Peserta</h2>
		    <form method="POST" action="<?php echo site_url('admin/addProses');?>">
				<div class="form-group">
				    <label for="exampleInputEmail1">NIK</label>
				    <input type="text" class="form-control" name="nik" placeholder="Enter NIK">
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">NAMA</label>
				    <input type="text" class="form-control" name="nama" placeholder="Enter Name">
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">UMUR</label>
				    <input type="text" class="form-control" name="umur" placeholder="UMUR">
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Jenis Kelamin</label>
				    <input type="radio" name="jk" value="Pria">Pria</input>
				    <input type="radio" name="jk" value="Wanita">Wanita</input>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
	    	</div>
	  	</div>
	</div>
</body>
</html>
