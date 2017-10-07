<section class="content">
 	<div class="container-fluid">
 		<!-- Basic Examples -->
 		<div class="row clearfix">
 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 				<div class="card">
 					<div class="header bg-deep-purple">
 						<h2>
 							Data Alumni
 							
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
 										<th>Judul TA/Skripsi</th>

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
 										<td><?php echo $user['judul_ta_sk']?></td>
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