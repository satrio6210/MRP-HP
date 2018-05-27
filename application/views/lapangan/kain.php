<div class="container">
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h2>Status kain</h2>
                        </div>
                        <hr>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>kategori</th>
                                    <th>warna</th>
                                    <th>kode warna</th>
                                    <th>motif</th>
                                    <th>qty</th>
                                    <th>tanggal pesan</th>                                   
                                    <th>Status</th>
                                    <!--<th>Action</th>-->
                                </tr>
                            </thead>
                            <tbody>
                           <?php foreach ($kain as $g) { ?>
                                <tr class="odd gradeX">
                                   <td><?php echo $g['id'] ?></td>
                                   <td><?php echo $g['kategori'] ?></td>
                                   <td><?php echo $g['warna'] ?></td>
                                   <td><?php echo $g['kode_warna'] ?></td>
                                   <td><?php echo $g['motif'] ?></td>
                                   <td><?php echo $g['qty'] ?></td>
                                   <td><?php echo $g['tanggal_pesan'] ?></td>
                                   <td><?php if($g['status']==0) {
                                           echo '<a class="btn btn-secondary btn-outline" >Belum</a>';
                                       }else{
                                            echo '<a class="btn btn-success btn-outline" >Sudah</a>';
                                       }

                                   ?>
                                     
                                   <!--</td>
                                   <td><a class="btn btn-danger btn-outline" href="<?php echo base_url()."lapangan/uploadnota/".$g['id']?>">Upload</a></td>-->
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
            