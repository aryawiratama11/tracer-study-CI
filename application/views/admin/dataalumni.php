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
            <div class="header-dropdown m-r--5">
              <a href="<?php echo base_url('dashboard/admin/tambahdataalumni'); ?>" class="btn bg-deep-orange waves-effect" data-toggle="modal" title="Tambah Data">
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
                    <th>Jurusan</th>
                    <th>Tahun Lulus</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Tahun Lulus</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
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
                      <i class="material-icons">visibility</i></a>

                      <a href="#" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#edit-<?php echo strtr($user['nim'], array('.' => '-')); ?>">
                        <i class="material-icons">mode_edit</i></a>

                        <a class="btn bg-red waves-effect"
                        href="<?php echo base_url().'admin/admin_kampus/destroy_alumni/'.$user['nim']; ?>">
                        <i class="material-icons">delete_forever</i></a>

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
                  <td>NPM</td>
                  <td><?php echo $user['nim']; ?></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><?php echo $user['nama']; ?></td>
                </tr>
                <tr>
                  <td>Jurusan</td>
                  <td><?php echo $user['jurusan']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo $user['email']; ?></td>
                </tr>
                <tr>
                  <td>Tahun Lulus</td>
                  <td><?php echo $user['tahun_lulus']; ?></td>
                </tr> 
                <tr>
                  <td>Alamat</td>
                  <td><?php echo $user['alamat']; ?></td>
                </tr>
              </table>
            </div>
            
          </div>
        </div>
        <button type="button" class="btn bg-red waves-effect" data-dismiss="modal" >
          <i class="material-icons">close</i>
        </button>
        <a href="#" class="btn bg-orange waves-effect" >
          <i class="material-icons">mode_edit</i>
        </a>

      </div>

    </div>

  </div>
</div>

<div class="modal fade" id="edit-<?php echo strtr($user['nim'], array('.' => '-')); ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="defaultModalLabel">Edit User</h4>
      </div>
      <form method="post" action="<?php echo base_url('dashboard/admin/updating'); ?>" enctype="multipart/form-data">
        <div class="modal-body">
          <table class="table table-bordered">
            <!-- <input type="hidden" name='id' value="<?php echo $user['nim']; ?>"> -->
            <tr>
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
              <div class="fg-line">
                <td><input type="text" name='nama' class="form-control" 
                  value="<?php echo $user['nama']; ?>" readonly></td>
                </div>
              </tr>
              <tr>
                <td>Program Study</td>
                <td><input type="text" name='jurusan' id="jurusan" class="form-control" value="<?php echo $user['jurusan']; ?>">
                </td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name='tgllahir' id="tgllahir" class="form-control" value="<?php echo $user['tgllahir']; ?>">
                </td>
              </tr>
              <tr>
                <td>Tahun Lulus</td>
                <td><input type="text" name='tahun_lulus' id="tahun_lulus" class="form-control">
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
                <td><input type="text" name='agama' id="agama" class="form-control" value="<?php echo $user['nama']; ?>">
                </td>
              </tr>
                                <!-- <tr>
                                  <td>Status</td>
                                  <td>
                                  <div class="controls">
                                    <select name="status" tabindex="1" class="form-control">
                                      <?php if($user['status'] != 0){ ?>
                                      <option value="1" selected>Active</option>
                                      <option value="0">Inactive</option>
                                      <?php }else{?>
                                      <option value="1">Active</option>
                                      <option value="0" selected>Inactive</option>
                                      <?php }?>
                                    </select>
                                  </div>
                                  </td>
                                </tr> -->
                                <tr>
                                  <td>Id Perusahaan</td>
                                  <td><input type="text" name='id_perusahaan' id="id_perusahaan" class="form-control" value="<?php echo $user['id_perusahaan']; ?>">
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
                                  <td>Warganegara</td>
                                  <td><input type="text" name='warganegara' id="warganegara" class="form-control" value="<?php echo $user['warganegara']; ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td><input type="textarea" name='alamat' id="alamat" class="form-control" value="<?php echo $user['alamat']; ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Profinsi</td>
                                  <td><input type="text" name='profinsi' id="profinsi" class="form-control" value="<?php echo $user['profinsi']; ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Kabupaten</td>
                                  <td><input type="text" name='kabupaten' id="kabupaten" class="form-control" value="<?php echo $user['kabupaten']; ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Kode Pos</td>
                                  <td><input type="text" name='kodepos' id="kodepos" class="form-control" value="<?php echo $user['kodepos']; ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Penguasaan Bahas</td>
                                  <td><input type="text" name='name' id="name" class="form-control" value="<?php echo $user['nama']; ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Level Bahasa</td>
                                  <td><input type="text" name='penguasaan_bahasa' id="penguasaan_bahasa" class="form-control" value="<?php echo $user['penguasaan_bahasa']; ?>">
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