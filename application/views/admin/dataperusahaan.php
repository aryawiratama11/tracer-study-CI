 <section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-deep-purple">
                        <h2>
                            Data Perusahaan
                            <small>Klik icon <code>+</code> Disamping kanan untuk menambah data</small>
                        </h2>
                        <div class="header-dropdown m-r--5">
                            <a href="#" data-target="#tambah" class="btn bg-deep-orange waves-effect" data-toggle="modal" title="Tambah Data">
                                <i class="material-icons">group_add</i>
                            </a>

                        </div>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i=1; foreach ($users as $user) { ?>
                                    <tr>
                                        <td><?php echo $i; $i++; ?></td>
                                        <td><?php echo $user['id']; ?></td>
                                        <td><?php echo $user['nama']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td>
                                            <a href="<?php echo $user['website']; ?>" target="_blank">
                                                <?php echo $user['website']; ?>
                                                <i class="material-icons" style="font-size: 12px; border:solid 1px;">call_made</i></a>

                                            </td>
                                            <td>
                                                <a href="#" class="btn bg-green waves-effect" data-toggle="modal" 
                                                data-target="#lihat-<?php echo strtr($user['id'], array('.' => '-')); ?>">
                                                <i class="material-icons">visibility</i></a>

                                                <a href="#" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#edit-<?php echo strtr($user['id'], array('.' => '-')); ?>">
                                                    <i class="material-icons">mode_edit</i></a>

                                                    <a class="btn bg-red waves-effect"
                                                    href="<?php echo base_url().'admin/admin_kampus/hapus_Company/'.$user['id']; ?>">
                                                    <i class="material-icons">delete_forever</i></a>


                                                </td>
                                            </tr>
                                            <?php } ?>
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


        <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Users</h4>
            </div>
            <form method="post" action="<?php echo base_url('dashboard/admin/tambahdataperusahaan'); ?>" enctype="multipart/form-data">
                <div class="modal-body">
                 <table class="table table-bordered"> 
                  <tr>
                    <td>NIM</td>
                    <td><input type="text" name='id' id="id" class="form-control" >
                    </td>
                </tr>
                <td>Nama</td>
                <div class="fg-line">
                    <td><input type="text" name='nama' class="form-control" >
                    </td>
                </div>
            </tr>
            <tr>
              <td>Tanggal Berdiri</td>
              <td><input type="text" name='tanggal_b' id="tanggal_b" class="form-control" >
              </td>
          </tr>
          <tr>
              <td>Alamat</td>
              <td>
                  <input type="text" name='alamat' id="alamat" class="form-control" >
              </td>
          </tr>
          <tr>
              <td>Email</td>
              <td>
                  <input type="text" name='email' id="email" class="form-control">
              </td>
          </tr>
          <tr>
              <td>Website</td>
              <td><input type="text" name='website' id="website" class="form-control">
              </td>
          </tr>
          <tr>
              <td>Photo</td>
              <td><input type="file" name="userfile">
              </td>
          </tr>
          <tr>
              <td>Password</td>
              <td><input type="password" name='password' id="password" class="form-control">
              </td>
          </tr>
      </table>
  </div>
  <div class="modal-footer">
      <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
      <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
  </div>
</form>
</div>
</div>
</div>
<!-- END ADD --> 

<?php foreach ($users as $user){ ?> 
<div data-backdrop="static" id="lihat-<?php echo strtr($user['id'], array('.' => '-')); ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-deep-purple">
        <h4 class="modal-title">User Information</h4>
    </div>
    <div class="modal-body">

        <div class="row">
          <div class="form-line">

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

              <img class="img-responsive thumbnail" src="  
              <?php                  
              if ($user['photo'] == null) {
               echo base_url().'photo/noimage.png';
           } else {
               echo base_url().$user['photo'];
           }?>">

       </div>

       <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
        <table class="table table-hover">
          <tr>
          <td>ID</td>
            <td><?php echo $user['id']; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $user['nama']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $user['email']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $user['alamat']; ?></td>
        </tr> 
        <tr>
            <td>Tanggal Berdiri</td>
            <td><?php echo $user['tanggal_b']; ?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td><?php echo $user['website']; ?></td>
        </tr>

    </table>
</div>
</div>
</div>
<div class="modal-footer">

  <button type="button" class="btn bg-red waves-effect" data-dismiss="modal" >
      <i class="material-icons">close</i> Close
  </button>

</div>

</div>

</div>

</div>
</div>

<div class="modal fade" id="edit-<?php echo strtr($user['id'], array('.' => '-')); ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="defaultModalLabel">Edit User</h4>
    </div>
    <form method="post" action="<?php echo base_url('dashboard/admin/updateperusahaan'); ?>" enctype="multipart/form-data">
        <div class="modal-body">
          <table class="table table-bordered">
            <!-- <input type="hidden" name='id' value="<?php echo $user['nim']; ?>"> -->
            <!-- <tr> -->
            <tr>
              <td>Id</td>
              <td><input type="text" name='id' id="id" class="form-control" 
              value="<?php echo $user['id']; ?>">
              </td>
          </tr>
          <td>Nama</td>
          <td><input type="text" name='nama' class="form-control" 
            value="<?php echo $user['nama']; ?>" ></td>

        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><input type="text" name='tanggal_b' id="tanggal_b" class="form-control" 
          value="<?php echo $user['tanggal_b']; ?>">
          </td>
      </tr>
      <tr>
          <td>Email</td>
          <td><input type="text" name='email' id="email" class="form-control" 
          value="<?php echo $user['email']; ?>">
          </td>
      </tr>
      <tr>
          <td>Website</td>
          <td><input type="text" name='website' id="website" class="form-control" 
          value="<?php echo $user['website']; ?>">
          </td>
      </tr>
      <tr>
          <td>Alamat</td>
          <td><input type="text" name='alamat' id="alamat" class="form-control" 
          value="<?php echo $user['alamat']; ?>">
          </td>
      </tr>
      <tr>
          <td>Photo</td>
          <td><input type="file" name="userfile">
          </td>
      </tr>
  </table>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
  <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
</div>
</form>
</div>
</div>
</div>

<?php } ?>