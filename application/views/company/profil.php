<section class="content">
  <div class="card">
    <div class="header bg-deep-purple">
      <h2>Profil Perusahaan</h2>
      <ul class="header-dropdown m-r--5">
      </ul>
    </div>
    <div class="body">
      <div class="row">
        <div class="form-line">

          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

            <img class="img-responsive thumbnail" style="width: -webkit-fill-available;" src="  
            <?php                  
            if ($profil_p == null) {
             echo base_url().'photo/noimage.png';
           } else {
             echo $profil_p;
           }?>">

         </div>

         <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
          <table class="table table-hover">
            <tr>
              <td><b>ID</b></td>
              <td><?php echo $id; ?></td>
            </tr>
            <tr>
              <td><b>Nama</b></td>
              <td><?php echo $username; ?></td>
            </tr>
            <tr>
              <td><b>Alamat</b></td>
              <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
              <td><b>Email</b></td>
              <td><?php echo $email; ?></td>
            </tr>
            <tr>
              <td><b>Website</b></td>
              <td><?php echo $website; ?></td>
            </tr> 
            <tr>
              <td><b>Tanggal Berdiri</b></td>
              <td><?php echo $tanggal_b; ?></td>
            </tr> 
          </table>
          <a href="#" class="btn bg-green waves-effect" data-toggle="modal" 
          data-target="#edit-<?php echo strtr($id, array('.' => '-')); ?>">
          <b>Edit Data</b></a>

          <a href="<?php echo base_url('dashboard/company/dataalumni'); ?>" class="btn bg-blue waves-effect" >
          <b>Tambah Alumni</b></a>
        </div>



        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
          <h4>Alumni yang bekerja di <?php echo $username; ?></h4>
          <table class="table table-hover">
            <tr>
              <td><b>NIM</b></td>
              <td><b>Nama</b></td>
              <td><b>Jurusan</b></td>
              <td><b>Tahun Lulus</b></td>
              <td><b>Jabatan</b></td>
              <td></td>
            </tr>
            <?php foreach ($users as $user) { ?>
            <tr>
              <td><?php echo $user['nim']?></td>
              <td><?php echo $user['nama']?></td>                          
              <td><?php echo $user['jurusan']?></td>
              <td><?php echo $user['tahun_lulus']?></td>
              <td><?php echo $user['jabatan']?></td>
              <td>
                <a href="#" class="btn bg-green waves-effect" data-toggle="modal" 
                data-target="#lihat-<?php echo strtr($user['nim'], array('.' => '-')); ?>">
                <b>lihat</b></a>
                <a href="#" class="btn bg-red waves-effect" data-toggle="modal" data-target="#edit-<?php echo strtr($user['nim'], array('.' => '-')); ?>">
                        <b>Hapus</b></a>
              </td>
            </tr>
            <?php }?>   

          </table>
        </div>

      </div>
    </div>
  </div>
</div>
</section>
<?php foreach ($usersa as $user){ ?> 
<div class="modal fade" id="edit-<?php echo strtr($user['id'], array('.' => '-')); ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-deep-purple">
        <h4 class="modal-title" id="defaultModalLabel">Edit User</h4>
      </div>
      <form method="post" action="<?php echo base_url('dashboard/company/updateperusahaan'); ?>" enctype="multipart/form-data">
        <div class="modal-body">
          <table class="table table-bordered">
             <input type="hidden" name='id' value="<?php echo $user['id']; ?>">
            <!-- <tr> -->
            <tr>
              <td><b>ID</td>
              <td><b><?php echo $user['id']; ?></b>
              </td>
            </tr>
            <td><b>Nama</b></td>
            <td><input type="text" name='nama' class="form-control" 
              value="<?php echo $user['nama']; ?>" ></td>

            </tr>
            <tr>
              <td><b>Tanggal Berdiri</b></td>
              <td><input type="text" name='tanggal_b' id="tanggal_b" class="form-control" 
                value="<?php echo $user['tanggal_b']; ?>">
              </td>
            </tr>
            <tr>
              <td><b>Email</b></td>
              <td><input type="text" name='email' id="email" class="form-control" 
                value="<?php echo $user['email']; ?>">
              </td>
            </tr>
            <tr>
              <td><b>Website</b></td>
              <td><input type="text" name='website' id="website" class="form-control" 
                value="<?php echo $user['website']; ?>">
              </td>
            </tr>
            <tr>
              <td><b>Alamat</b></td>
              <td><input type="text" name='alamat' id="alamat" class="form-control" 
                value="<?php echo $user['alamat']; ?>">
              </td>
            </tr>
            <tr>
              <td><b>Photo</b></td>
              <td><input type="file" name="userfile">
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-green waves-effect"><b>Simpan</b></button>
          <button type="button" class="btn bg-red waves-effect" data-dismiss="modal"><b>Batal</b></button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>

<?php foreach ($users as $user){ ?> 
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
                  <td><b>Tanggal Lahir</b></td>
                  <td><?php echo $user['tgllahir']; ?></td>
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
                <tr>
                  <td><b>Jabatan</b></td>
                  <td><?php echo $user['jabatan']; ?></td>
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
        <h5>Benarkah anda ingin Menghapus <?php echo $user['nama']; ?> dari data perusahaan anda? </h5>
        <input type="hidden" name='id' value="<?php echo $user['nim']; ?>"> 
        <input type="hidden" name='id_perusahaan' value=""> 
        <input type="hidden" name='jabatan' value=""> 

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-green waves-effect">Oke</button>
          <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
 </div>

<?php } ?>