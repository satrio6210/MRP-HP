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
                            <p class="col-md-6"><input type="text" class="form-control" placeholder="lt" name="lt" value="<?php echo $lt ?>" required></p>
                            <p class="col-md-6"><input type="text" class="form-control" placeholder="rr" name="rr" value="<?php echo $rr ?>" required></p>
                            <p class="col-md-6"><input type="text" class="form-control" placeholder="ss" name="safetystock" value="<?php echo $safetystock ?>" required></p>
                            <p class="col-md-6"><input type="text" class="form-control" placeholder="hasil" name="hasil" value="<?php echo $hasil ?>" required></p>

                            <a class="btn btn-primary btn-outline" href="<?php echo base_url()."index.php/admin/hitung"?>">Hitung ROP</a>
                            
                    </div>
                </div>
            </div>
    </div>
</div>
