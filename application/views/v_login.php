<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/readmore.css">
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
			<?php echo form_open("auth/cek_login"); ?>
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

				<!--
				<div class="input-group input-group-l">
					<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
					<div class="fg-line">
						<div class="g-recaptcha" data-sitekey="6LeZ8A8UAAAAAFveA2IdqSqGKy8617HV8J_7olgK">
							<div style="width: 304px; height: 78px;">
								<div>
									<iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LeZ8A8UAAAAAFveA2IdqSqGKy8617HV8J_7olgK&amp;co=aHR0cDovL2F1dGguYW1pa29tLmFjLmlkOjgw&amp;hl=in&amp;v=r20170717162708&amp;size=normal&amp;cb=yoikm930nle6" title="widget recaptcha" width="304" height="78" frameborder="0" scrolling="no" sandbox="allow-forms allow-modals allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation">
									</iframe>
								</div>
								<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
							</div>
						</div>
					</div>
				</div> -->
				<button type="submit" class="btn btn-login btn-warning"><i class="glyphicon glyphicon-arrow-right"></i></button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
	
</body>
</html>