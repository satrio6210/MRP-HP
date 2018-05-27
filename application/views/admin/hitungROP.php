<div class="container">

    <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header"><br></h1>
                </div>
                <!-- /.col-lg-12 -->
    </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3><center>HITUNG REORDER POINT SEKARANG</center></h3>
                            <?php echo form_open_multipart(base_url('index.php/admin/hitung')); ?>
                                <p class="col-md-6"><input type="text" class="form-control" placeholder="lt" name="lt" required></p>
                                <p class="col-md-6"><input type="text" class="form-control" placeholder="rr" name="rr" required></p>
                                <p class="col-md-6"><input type="text" class="form-control" placeholder="ss" name="safetystock" value="<?php echo $safetystock ?>" required></p>
                                <!--<p class="col-md-6"><input type="text" class="form-control" placeholder="hasil" name="hasil" value="<?php echo $hasil ?>" required></p>-->
                                <br>
                                <p class="col-lg-12"><input type="submit" value="Hitung" class="btn btn-warning" name=""></p>
                        <?php echo form_close(); ?>
                            
                    </div>
                </div>
            </div>
    </div>
</div>
