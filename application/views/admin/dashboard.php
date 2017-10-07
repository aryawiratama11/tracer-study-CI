<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<div class="icon bg-deep-purple">
						<i class="material-icons">supervisor_account</i>
					</div>

					<div class="content">
						<div class="text">Total Responden</div>
						<div class="number count-to" data-from="0" data-to="1432" data-in="300" data-speed="1500" data-fresh-interval="20">700/1000</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<div class="icon bg-deep-purple">
						<i class="material-icons">favorite</i>
					</div>
					
					<div class="content">
						<div class="text">Alumni Bekerja</div>
						<div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20">
							<?php foreach ($users as $user) { 
								
								echo count($user['id_perusahaan']);
								echo " / "; 
								echo count($user['nim']); 

							} ?>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<div class="icon bg-deep-purple">
						<i class="material-icons">favorite</i>
					</div>
					<div class="content">
						<div class="text">LIKES</div>
						<div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<div class="icon bg-deep-purple">
						<i class="material-icons">favorite</i>
					</div>
					<div class="content">
						<div class="text">LIKES</div>
						<div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>