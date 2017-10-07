<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/readmore.css">
	<!-- <link href="<?php echo base_url();?>theme/css/style.css" rel="stylesheet"> -->
	   <!-- <script src="<?php echo base_url();?>theme/plugins/jquery/jquery.min.js"></script> -->
	   <!-- <script src="<?php echo base_url();?>theme/plugins/jquery-validation/jquery.validate.js"></script> -->
</head>
<body>


	<div class="col-md-6 col-md-offset-3">
		<div class="col-login">
			<div class="login-header">
				<img src="http://amikom.ac.id/theme/material/custom/images/logos/icon_text/icontext_amikom_100p.png" class="gambarlogin"></img>
			</div>
			<div class="texsmal">
				<small>Silahkan Login dengan NPM, Password AMIKOM dan Password Perusahaan anda</small>
			</div>
			<hr>
			<?php echo form_open("tracer/login"); ?>
			<div class="field-login">
				<div class="input-group input-group-l">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<div class="fg-line">
						<input type="text" name="user_id" class="form-control" placeholder="NPM AMIKOM">	                  
					</div>
				</div>

				<div class="input-group input-group-l">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<div class="fg-line">
						<input type="password" name="pass_id" class="form-control" placeholder="Password">		                    
					</div>
				</div>
				
<!-- 				<div class="input-group input-group-l">
					
					<div class="fg-line">
						<div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>
					</div>
				</div>  -->

				<button type="submit" class="btn btn-login btn-warning"><i class="glyphicon glyphicon-arrow-right"></i></button>
			</div>
			<a href="<?php echo base_url(); ?>" style="text-align: center;"><p style="margin-top: 20px">Daftar disini!<p></a>

		</div>

		<?php echo form_close(); ?>

	</div>
	
</body>
</html>