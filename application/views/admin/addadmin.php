<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-deep-purple">
                        <h2>
                            Tambah Data Admin
                            <small>
                                <a href="<?php echo base_url('dashboard/admin'); ?>" class="col-white">Home</a> > 
                                <a href="<?php echo base_url('dashboard/admin/dataadmin'); ?>" class="col-white">Data Admin</a> > 
                                <a href="<?php echo base_url('dashboard/admin/tambahadmin'); ?>" class="col-white">Tambah Data Admin</a>
                            </small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <a href="#" class="btn bg-cyan waves-effect" title="Simpan">
                                <i class="material-icons">save</i>
                            </a>
                            <a href="<?php echo base_url('dashboard/admin/dataadmin'); ?>" class="btn bg-red waves-effect" title="Batal">
                                <i class="material-icons">cancel</i>
                            </a>
                        </ul>
                    </div>
                    <div class="body">
                        <form>
                            <div class="row clearfix">                            
                                <div class="col-sm-6">
                                    <label for="npm">NPM</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="NPM">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="nama">Nama</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="ttl">Tanggal Lahir</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="Gender">Gender</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick">
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
                                            <select class="form-control show-tick">
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
                                         <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-6">
                                <label for="judul_ta">Judul Ta/Skripsi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="1" class="form-control no-resize auto-growth" placeholder="" style="overflow: hidden; word-wrap: break-word; height: 32px;"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="upload_foto">Upload Foto</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="file" type="file" single />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>                    
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                 <form>
                    <div class="row clearfix">                            
                        <div class="col-sm-6">
                            <label for="nik">NIK</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="NIK">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="id_perusahaan">ID Company</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Id Company">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="email_address">Email</label>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="agama">Agama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick">
                                        <option value="">-- Please select --</option>
                                        <option value="Laki - Laki">Islam</option>
                                        <option value="Perempuan">Hindu</option> 
                                        <option value="Laki - Laki">Budha</option>
                                        <option value="Perempuan">Kaholik</option>      
                                        <option value="Perempuan">Kristen</option>
                                        <option value="Perempuan">Konghucu</option>                
                                    </select>   
                                </div>
                            </div>   
                        </div>
                        <div class="col-sm-6">
                            <label for="no_hp">No HP</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="No Hp  Ex: 08xxxxx">
                                </div> 
                            </div>                             
                        </div>
                        <div class="col-sm-6">
                            <label for="telephone">Telephone</label>
                            <div class="form-group">
                                <div class="form-line">
                                 <input type="text" class="form-control" placeholder="Ex: 073xxxxx">
                             </div>
                         </div>
                     </div>

                     <div class="col-sm-6">
                        <label for="warga_negara">Warga Negara</label>
                        <div class="form-group">
                            <div class="form-line">
                               <input type="text" class="form-control" placeholder="Ex: ID">
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6">
                    <label for="profinsi">Profinsi</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Ex: Yogyakarta">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="kabupaten">Kabupaten</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Ex: Sleman">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="kodepos">Kode Pos</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Ex: 32181">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="penguasaan_bahasa">Penguasaan Bahasa</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Ex: Inggris, Sepanyol">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="level_bahasa">Level Bahasa</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Ex: Beginer, Medium, Advance">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="level_bahasa">Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>

            </div>
            
                <br>
                <button type="button" class="btn bg-cyan waves-effect">Simpan</button>
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