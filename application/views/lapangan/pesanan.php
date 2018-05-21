<div class="container">
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h2>History Booking</h2>
                        </div>
                        <hr>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type</th>
                                    <th>Nama</th>
                                    <th>kategori</th>
                                    <th>Nomor Identitas</th>
                                    <th>Nama Pesanan</th>
                                    <th>Tanggal Pesanan</th>                                   
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php foreach ($pesanan as $g) { ?>
                                <tr class="odd gradeX">
                                   <td><?php echo $g['no'] ?></td>
                                   <td><?php echo $g['type'] ?></td>
                                   <td><?php echo $g['nama'] ?></td>
                                   <td><?php echo $g['kategori'] ?></td>
                                   <td><?php echo $g['nomor_identitas'] ?></td>
                                   <td><?php echo $g['nama_pesanan'] ?></td>
                                   <td><?php echo $g['tanggal_pesanan'] ?></td>
                                   <td><?php if($g['status']==0) {
                                           echo '<a class="btn btn-secondary btn-outline" >Belum Lunas</a>';
                                       }else{
                                            echo '<a class="btn btn-success btn-outline" >Lunas</a>';
                                       }

                                   ?></td>
                                   <td><a class="btn btn-danger btn-outline" href="<?php echo base_url()."lapangan/uploadnota/".$g['no']?>">Upload</a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>                        
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
            