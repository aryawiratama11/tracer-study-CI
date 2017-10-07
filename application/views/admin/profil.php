 <section class="content">
  <div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header bg-deep-purple">
            <h2>
              Data Admin
              <small>Klik icon <code>+</code> Disamping kanan untuk menambah data</small>
            </h2>
            <div class="header-dropdown m-r--5">
              <a href="" data-toggle="modal" data-target="#tambah" class="btn bg-deep-orange waves-effect" data-toggle="modal" title="Tambah Data">
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
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>                                        
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($users as $user) { ?>
                  <tr>
                    <td><?php echo $i; $i++ ?></td>
                    <td><?php echo $user['nim']?></td>
                    <td><?php echo $user['nama']?></td>
                    <td><?php echo $user['email']?></td>
                    <td>
                      <a href="#" class="btn bg-green waves-effect waves-float" data-toggle="modal" 
                      data-target="#lihat-<?php echo strtr($user['nim'], array('.' => '-')); ?>">
                      <b>Lihat</b></a>

                      <a href="#" data-toggle="modal" data-target="#edit-<?php echo strtr($user['nim'], array('.' => '-')); ?>" class="btn btn-warning waves-effect waves-float">
                        <b>Edit</b></a>
                        <a href="<?php echo base_url().'admin/admin_kampus/delete_adm/'.$user['nim']; ?>" class="btn bg-red waves-effect waves-float">
                          <b>Hapus</b></a>
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
          <div class="modal-header bg-deep-purple">
            <h4 class="modal-title" id="defaultModalLabel">Tambah data</h4>
          </div>
          <form method="post" action="<?php echo base_url('dashboard/admin/tambahadmin'); ?>" enctype="multipart/form-data">
            <div class="modal-body">
             <table class="table table-bordered"> 
              <tr>
                <td>NIM</td>
                <td><input type="text" name='nim' id="nim" class="form-control" >
                </td>
              </tr>
              <tr>
                <td>NIK</td>
                <td><input type="text" name='nik' id="nik" class="form-control" >
                </td>
              </tr>
              <td>Nama</td>
              <div class="fg-line">
                <td><input type="text" name='nama' class="form-control" >
                </td>
              </div>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td><input type="text" name='tgllahir' id="tgllahir" class="form-control" >
              </td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><input type="text" name='gender' id="gender" class="form-control">
              </td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="text" name='email' id="email" class="form-control">
              </td>
            </tr>
            <tr>
              <td>Agama</td>
              <td><input type="text" name='agama' id="agama" class="form-control" >
              </td>
            </tr>
            <tr>
              <td>No HP</td>
              <td><input type="text" name='nohp' id="nohp" class="form-control">
              </td>
            </tr>
            <tr>
              <td>Telephone</td>
              <td><input type="text" name='telephon' id="telephon" class="form-control">
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><input type="textarea" name='alamat' id="alamat" class="form-control">
              </td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name='password' id="password" class="form-control" >
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
          <button type="submit" class="btn bg-green waves-effect">Simpan</button>
          <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END ADD --> 

<?php foreach ($users as $user){ ?> 
<div data-backdrop="static" id="lihat-<?php echo strtr($user['nim'], array('.' => '-')); ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-deep-purple">
      <h4 class="modal-title">Informasi Admin</h4>
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
                <td>NIM</td>
                <td><?php echo $user['nim']; ?></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><?php echo $user['nama']; ?></td>
              </tr>
              <tr>
                <td>NIK</td>
                <td><?php echo $user['nik']; ?></td>
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
                <td>gender</td>
                <td><?php echo $user['gender']; ?></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo $user['tgllahir']; ?></td>
              </tr>
              <tr>
                <td>No. HP</td>
                <td><?php echo $user['nohp']; ?></td>
              </tr>
              <tr>
                <td>Telp</td>
                <td><?php echo $user['telephon']; ?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td><?php echo $user['agama']; ?></td>
              </tr>

            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-red waves-effect" data-dismiss="modal" >
          <b>Keluar</b>
        </button>

      </div>

    </div>

  </div>

</div>
</div>

<div class="modal fade" id="edit-<?php echo strtr($user['nim'], array('.' => '-')); ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-deep-purple">
        <h4 class="modal-title" id="defaultModalLabel">Edit User Admin</h4>
      </div>
      <form method="post" action="<?php echo base_url('dashboard/admin/editadmin'); ?>" enctype="multipart/form-data">
        <div class="modal-body">
          <table class="table table-bordered">
            <!-- <input type="hidden" name='id' value="<?php echo $user['nim']; ?>"> -->
            <!-- <tr> -->
            <tr>
              <td>NIM</td>
              <td><input type="text" name='nim' id="nim" class="form-control" value="<?php echo $user['nim']; ?>">
              </td>
            </tr>
            <tr>
              <td>NIK</td>
              <td><input type="text" name='nik' id="nik" class="form-control" value="<?php echo $user['nik']; ?>">
              </td>
            </tr>
            <td>Nama</td>
            <td><input type="text" name='nama' class="form-control" 
              value="<?php echo $user['nama']; ?>" ></td>
              
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td><input type="text" name='tgllahir' id="tgllahir" class="form-control" value="<?php echo $user['tgllahir']; ?>">
              </td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><input type="text" name='gender' id="gender" class="form-control" value="<?php echo $user['gender']; ?>">
              </td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="text" name='email' id="email" class="form-control" value="<?php echo $user['email']; ?>">
              </td>
            </tr>
            <tr>
              <td>Agama</td>
              <td><input type="text" name='agama' id="agama" class="form-control" value="<?php echo $user['agama']; ?>">
              </td>
            </tr>

            <tr>
              <td>No HP</td>
              <td><input type="text" name='nohp' id="nohp" class="form-control" value="<?php echo $user['nohp']; ?>">
              </td>
            </tr>
            <tr>
              <td>Telephone</td>
              <td><input type="text" name='telephon' id="telephon" class="form-control" value="<?php echo $user['telephon']; ?>">
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><input type="textarea" name='alamat' id="alamat" class="form-control" value="<?php echo $user['alamat']; ?>">
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
          <button type="submit" class="btn bg-green waves-effect">Simpan</button>
          <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php } ?>