<script src="<?php echo base_url() ?>theme/plugins/jquery/jquery.min.js"></script>
<section class="content">
    <div class="card">
        <div class="header bg-deep-purple">
            <h2>
                Tracer Alumni
            </h2>
        </div>
        <div class="body">
            <?php foreach ($users as $user) { ?>

            <div class="card">
                <div class="body">
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

                           <h4><?php echo $user['nama']; ?></h4>
                           <h5><?php echo $user['nim']; ?></h5>
                           <p><?php echo $user['email']; ?></p>
                           <p><?php echo $user['jabatan']; ?></p>
                       </div>

                       <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
                          <table class="table table-hover">
                          <?php $i=1;$i; foreach ($soala as $soal) { ?>
                            <tr>
                                <td>
                                    <div class="irs-demo" style="margin-bottom: 0;">
                                        <b><?php echo $i++.". ".$soal['soal']; ?></b>
                                        <input type="text" id="ran-<?php echo $soal['id_soal']; ?>-<?php echo strtr($user['nim'], array('.' => '-')); ?>" value="" />
                                    </div>
                                </td>
                            </tr> 
                            <script type="text/javascript">
                                $(document).ready(function () {                                            
                                    $("#ran-<?php echo $soal['id_soal']; ?>-<?php echo strtr($user['nim'], array('.' => '-')); ?>").ionRangeSlider({
                                        grid: true,
                                        from: 1,
                                        values: [
                                        "<?php echo $soal['jawaban1']; ?>", 
                                        "<?php echo $soal['jawaban2']; ?>",
                                        "<?php echo $soal['jawaban3']; ?>", 
                                        "<?php echo $soal['jawaban4']; ?>"
                                        ]
                                    });                                    
                                });
                            </script>
                            <?php } ?>                       
                            <tr>
                                <td>

                                    <b>Masukan, Saran dan Kritik</b>
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                </td>
                            </tr>
                            
                            
                        </table>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>

                    </div>


                </div>
            </div>

        </div>
    </div>

    <?php } ?>
</div>

</div>
</section>
