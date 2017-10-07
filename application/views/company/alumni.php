 <section class="content">
 	<div class="container-fluid">
 		<!-- Basic Examples -->
 		<div class="row clearfix">
 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 				<div class="card">
 					<div class="header bg-deep-purple">
 						<h2>
 							Data Alumni
 							<small>Klik icon <code>+</code> Disamping kanan untuk menambah data</small>
 						</h2>
 					</div>

 					<div class="body">

 						<div class="table-responsive">
 							<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
 								<thead>
 									<tr>
 										<th>No</th>                                        
 										<th>Nim</th>
 										<th>Nama</th>
 										<th>Jurusan</th>
 										<th>Tahun Lulus</th>
 										<th>Action</th>

 									</tr>
 								</thead>
 								<tbody>                                
 									<?php $i=1; foreach ($users as $user) { ?>
 									<tr>
 										<td><?php echo $i; $i++; ?></td>
 										<td><?php echo $user['nim']?></td>
 										<td><?php echo $user['nama']?></td>                          
 										<td><?php echo $user['jurusan']?></td>
 										<td><?php echo $user['tahun_lulus']?></td>
 										<td>
 											<a href="#" class="btn bg-green waves-effect" data-toggle="modal" 
 											data-target="#lihat-<?php echo strtr($user['nim'], array('.' => '-')); ?>">
 											<b>lihat</b></a>
 											<?php if ($user['id_perusahaan'] == $id) { ?>
 											<b>Sudah bekerja</b>
 											<?php } else if ($user['id_perusahaan'] != null){ ?>
 											<b>Sudah bekerja</b>
 											<?php }elseif ($user['id_perusahaan'] == null) { ?>
 											<a href="#" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#edit-<?php echo strtr($user['nim'], array('.' => '-')); ?>">
 												<b>Tambahkan</b></a>

 												<?php } ?>
 											</td>
 										</tr> 

 										<?php }?>                          
 									</tbody>
 								</table>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 			<!-- #END# Basic Examples -->

 		</div>
 	</section>
 	<?php foreach ($users as $user){ ?> 
 	<div class="modal fade" id="edit-<?php echo strtr($user['nim'], array('.' => '-')); ?>" tabindex="-1" role="dialog">
 		<div class="modal-dialog modal-sm" role="document">
 			<div class="modal-content">
 			<!-- <div class="modal-header bg-deep-purple">
 				<h4 class="modal-title" id="defaultModalLabel">Benarkah </h4>
 			</div> -->
 			<form method="post" action="<?php echo base_url('dashboard/company/updatingdata'); ?>" enctype="multipart/form-data">
 				<div class="modal-body">
 					<div style="text-align: center;">
 						<i class="material-icons" style="font-size:50px;">help_outline</i>
 					</div>
 					<hr>
 					<h5>Benarkah anda ingin menambahkan <?php echo $user['nama']; ?> telah bekerja di perusahaan anda? </h5><br>
 					<input type="hidden" name='id' value="<?php echo $user['nim']; ?>"> 
 					<input type="hidden" name='id_perusahaan' value="<?php echo $id; ?>"> 
 					<b>Jabatan : </b>
 					<input type="text" name='jabatan' value="<?php echo $user['jabatan']; ?>" required> 

 				</div>
 				<div class="modal-footer">
 					<button type="submit" class="btn bg-green waves-effect">Oke</button>
 					<button type="button" class="btn bg-red waves-effect" data-dismiss="modal">Batal</button>
 				</div>
 			</form>
 		</div>
 	</div>
 </div>


 <div data-backdrop="static" id="lihat-<?php echo strtr($user['nim'], array('.' => '-')); ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
 	<div class="modal-dialog modal-lg">
 		<div class="modal-content">
 			<div class="modal-header bg-deep-purple">
 				<h4 class="modal-title">User Information</h4>
 			</div>
 			<div class="modal-body">

 				<div class="row">
 					<div class="form-line">

 						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

 							<img class="img-responsive thumbnail" style="width: -webkit-fill-available;" src="  
 							<?php                  
 							if ($user['photo'] == null) {
 								echo base_url().'photo/noimage.png';
 							} else {
 								echo $user['photo'];
 							}?>">

 						</div>

 						<div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
 							<table class="table table-hover">
 								<tr>
 									<td><b>NPM</b></td>
 									<td><?php echo $user['nim']; ?></td>
 								</tr>
 								<tr>
 									<td><b>Nama</b></td>
 									<td><?php echo $user['nama']; ?></td>
 								</tr>
 								<tr>
 									<td><b>Jurusan</b></td>
 									<td><?php echo $user['jurusan']; ?></td>
 								</tr>
 								<tr>
 									<td><b>Email</b></td>
 									<td><?php echo $user['email']; ?></td>
 								</tr>
 								<tr>
 									<td><b>Tahun Lulus</b></td>
 									<td><?php echo $user['tahun_lulus']; ?></td>
 								</tr> 
 								<tr>
 									<td><b>Judul Ta/Skripsi</b></td>
 									<td><?php echo $user['judul_ta_sk']; ?></td>
 								</tr> 
 								<tr>
 									<td><b>Alamat</b></td>
 									<td><?php echo $user['alamat']; ?></td>
 								</tr>
 							</table>
 						</div>

 					</div>
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn bg-red waves-effect" data-dismiss="modal" >
 						<b>close</b>
 					</button>
 				</div>
 			</div>

 		</div>

 	</div>
 </div>

 <?php } ?>