<section class="content">
    <div class="card">
        <div class="header bg-deep-purple">
            <h2>Profil Alumni</h2>
            <ul class="header-dropdown m-r--5">
            </ul>
        </div>
        <div class="body">
          <div class="row">
            <div class="form-line">

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                <img class="img-responsive thumbnail" src="  
                <?php                  
                if ($profil_p == null) {
                 echo base_url().'photo/noimage.png';
             } else {
                 echo base_url().$profil_p;
             }?>">

         </div>

         <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
          <table class="table table-hover">
            <tr>
              <td>NPM</td>
              <td><?php echo $nim; ?></td>
          </tr>
          <tr>
              <td>Nama</td>
              <td><?php echo $username; ?></td>
          </tr>
          <tr>
              <td>Jurusan</td>
              <td><?php echo $jurusan; ?></td>
          </tr>
          <tr>
              <td>Email</td>
              <td><?php echo $email; ?></td>
          </tr>
          <tr>
              <td>Judul TA/Skripsi</td>
              <td><?php echo $judul_ta_sk; ?></td>
          </tr> 
          <tr>
              <td>Tahun Lulus</td>
              <td><?php echo $tahun_lulus; ?></td>
          </tr> 
      </table>
  </div>

  <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
      <table class="table table-hover">
        <tr>
          <td>NIK</td>
          <td><?php echo $nik; ?></td>
      </tr>
      <tr>
          <td>Tanggal Lahir</td>
          <td><?php echo $tgllahir; ?></td>
      </tr>
      <tr>
          <td>Gender</td>
          <td><?php echo $gender; ?></td>
      </tr>
      <tr>
          <td>Agama</td>
          <td><?php echo $agama; ?></td>
      </tr>
      <tr>
          <td>No HP</td>
          <td><?php echo $nohp; ?></td>
      </tr>
      <tr>
          <td>Telephone</td>
          <td><?php echo $telephon; ?></td>
      </tr> 
      <tr>
          <td>Warganegara</td>
          <td><?php echo $warganegara; ?></td>
      </tr>
      <tr>
          <td>Profinsi</td>
          <td><?php echo $profinsi; ?></td>
      </tr>
      <tr>
          <td>Kabupaten</td>
          <td><?php echo $kabupaten; ?></td>
      </tr>
      <tr>
          <td>Kode Pos</td>
          <td><?php echo $kodepos; ?></td>
      </tr>
      <tr>
          <td>Penguasaan Bahasa</td>
          <td><?php echo $penguasaan_bahasa; ?></td>
      </tr>
      <tr>
          <td>Level Bahasa</td>
          <td><?php echo $level_bahasa; ?></td>
      </tr>
  </table>
</div>

</div>
</div>
</div>
</div>
</section>