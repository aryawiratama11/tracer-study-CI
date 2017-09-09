<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-deep-purple">
                        <h2>
                            Tambah Data Alumni
                            <small>
                                <a href="<?php echo base_url('dashboard/admin'); ?>" class="col-white">Home</a> > 
                                <a href="<?php echo base_url('dashboard/admin/dataalumni'); ?>" class="col-white">Data Alumni</a> > 
                                <a href="<?php echo base_url('dashboard/admin/tambahdataalumni'); ?>" class="col-white">Tambah Data Alumni</a>
                            </small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <a href="<?php echo base_url('dashboard/admin/generating'); ?>" class="btn bg-cyan waves-effect" title="Simpan">
                                <i class="material-icons">save</i>
                            </a>
                            <a href="<?php echo base_url('dashboard/admin/dataalumni'); ?>" class="btn bg-red waves-effect" title="Batal">
                                <i class="material-icons">cancel</i>
                            </a>
                        </ul>
                    </div>
                    <div class="body">
                        <form method="post" action="<?php echo base_url('dashboard/admin/generating'); ?>" enctype="multipart/form-data">
                            <div class="row clearfix">                            
                                <div class="col-sm-6">
                                    <label for="npm">NPM</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nim" class="form-control" placeholder="NPM" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="nama">Nama</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="ttl">Tanggal Lahir</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="tgllahir" class="form-control date" placeholder="Ex: 30/07/2016" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="Gender">Gender</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="gender" value="<?php echo set_value('gender'); ?>" required>
                                                <option value="">-- Please select --</option>
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>                    
                                            </select>   
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-sm-6">
                                    <label for="prodi">Program Studi</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="jurusan" value="<?php echo set_value('jurusan'); ?>" required>
                                                <option value="">-- Please select --</option>
                                                <option value="Informatika">Informatika</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                                                <option value="Teknik Komputer">Teknik Komputer</option>
                                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                                            </select>  
                                        </div> 
                                    </div>                             
                                </div>
                                <div class="col-sm-6">
                                    <label for="tgl_lulus">Tangggal Lulus</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                           <input type="text" name="tahun_lulus" class="form-control date" placeholder="Ex: 30/07/2016" required>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-sm-6">
                                <label for="judul_ta">Judul Ta/Skripsi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="1" name="judul_ta_sk" class="form-control no-resize auto-growth" placeholder="" style="overflow: hidden; word-wrap: break-word; height: 32px;"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="religion">Agama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="agama" 
                                        value="<?php echo set_value('agama'); ?>" required>
                                        <option value="">-- Please select --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option> 
                                        <option value="Budha">Budha</option>
                                        <option value="Kaholik">Kaholik</option>      
                                        <option value="Kristen">Kristen</option>
                                        <option value="Konghucu">Konghucu</option>                
                                    </select>   
                                </div>
                            </div>   
                        </div>
                        <div class="col-sm-6">
                            <label for="upload_foto">Upload Foto</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="file" name="userfile">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">

                    <div class="row clearfix">                            
                        <div class="col-sm-6">
                            <label for="nik">NIK</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nik" class="form-control" placeholder="NIK">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="id_perusahaan">ID Company</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="id_perusahaan" class="form-control" placeholder="Id Company">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="email_address">Email</label>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email" class="form-control" placeholder="email">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="no_hp">No HP</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nohp" class="form-control" placeholder="No Hp  Ex: 08xxxxx">
                                </div> 
                            </div>                             
                        </div>
                        <div class="col-sm-6">
                            <label for="telephone">Telephone</label>
                            <div class="form-group">
                                <div class="form-line">
                                   <input type="text" name="telephon" class="form-control" placeholder="Ex: 073xxxxx">
                               </div>
                           </div>
                       </div>

                       <div class="col-sm-6">
                        <label for="warga_negara">Warga Negara</label>
                        <div class="form-group">
                            <div class="form-line">
                             <input type="text" name="warganegara" class="form-control" placeholder="Ex: ID">
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6">
                    <label for="profinsi">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="textarea" name="alamat" class="form-control" placeholder="Ex: jl" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="profinsi">Profinsi</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="profinsi" class="form-control" placeholder="Ex: Yogyakarta">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="kabupaten">Kabupaten</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="kabupaten" class="form-control" placeholder="Ex: Sleman">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="kodepos">Kode Pos</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="kodepos" class="form-control" placeholder="Ex: 32181">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="penguasaan_bahasa">Penguasaan Bahasa</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="penguasaan_bahasa" class="form-control" placeholder="Ex: Inggris, Sepanyol">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="level_bahasa">Level Bahasa</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="level_bahasa" class="form-control" placeholder="Ex: Beginer, Medium, Advance">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="level_bahasa">Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                    </div>
                </div>

            </div>
            
            <br>
            <button type="submit" class="btn bg-cyan waves-effect">Simpan</button>
            <button type="button" class="btn bg-red waves-effect">Batal</button>
        </div>
    </div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>