<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <br></br>
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" align="center">Pesanan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            Tambah Pesanan
                        </div>
                        <div class="panel-body" align="center">
                        <?php echo form_open_multipart(base_url('index.php/lapangan/createpesanan')); ?>
                                <p class="col-md-3"><input type="text" class="form-control" placeholder="nomer" name="no" required></p>
                                <p class="col-md-3"><input type="text" class="form-control" placeholder="type" name="type" required></p>
                                <!--<p class="col-md-3"><select class="form-control" id="type">
						        <option>Jaket</option>
						        <option>Kaos</option>
						        <option>Celana</option>
						        <option>Kemeja</option>
						        <option>Dress</option>
						        <option>Jas</option>
						      	</select></p>-->
                                <p class="col-md-3"><input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $this->session->userdata('nama')?>" readonly enabled></p>
                                <p class="col-md-3"><input type="text" class="form-control" placeholder="kategori" name="kategori" required></p>
                                <p class="col-md-3"><input type="text" class="form-control" placeholder="nomer_identitas" name="nomer_identitas" required></p>
                                <p class="col-md-3"><input type="text" class="form-control" placeholder="nama_pesanan" name="nama_pesanan" required></p>
                                <p class="col-md-3"><input type="text" class="form-control" placeholder="jenis_pesanan" name="jenis_pesanan" required></p>
                                <p class="col-md-3"><input type="text" class="form-control" placeholder="detail_pesanan" name="detail_pesanan" required></p>
                                	<!--<textarea class="form-control" rows="5" placeholder="detail_pesanan" id="detail_pesanan"></textarea></p>-->
                                <p class="col-md-3"><input type="date" class="form-control" placeholder="Tanggal_pesanan" name="tanggal_pesanan" value="<?php 
                          		 $date = date_default_timezone_set('Asia/Jakarta');
                              	echo date('Y-m-d');
                             	?>" readonly required></p>

                                <br>
                                <p class="col-lg-12"><input type="submit" value="Add" class="btn btn-warning" name=""></p>
                        <?php echo form_close(); ?>
                        <p class="col-lg-12"> <a href="<?php echo base_url().'index.php/lapangan/index'?>" class="btn btn-success btn-outline" name="Back" style="font-size: 15px; padding-top: 10px">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            
</div>

    </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/metisMenu/metisMenu.min.js') ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/raphael/raphael.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/morrisjs/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/data/morris-data.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/dist/js/sb-admin-2.js') ?>"></script>

</body>
</html>