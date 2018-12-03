<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css">
<body>

	<div class="container isilogin">
		
		<h3 class="text-center login">Login To PEGAWAI</h3>
		<center><img src="<?php echo base_url();?>image/logo Helath.png"></center>
		<div class="col-md-5 mx-auto">
		<form method="post"	action="<?php echo base_url('C_Loginpgw/cek_login') ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="username">username</label>
			   <input class="form-control" type="text" name="username" placeholder="username" required/>
			  </div>
       		<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="password" />
        	</div>
			
			<button type="submit" class="btn btn-lg btn-warning">Login</button>
			</form>
			
			<p>Belum Punya Akun? 
           		<a href="<?php echo site_url('C_Regis/index') ?>">Daftar disini.</a><br>
				<a href="<?php echo site_url('C_Admin/index')?> ">admin</a>
          	</p>
			<br>
			
			
		</div>
		
	</div>