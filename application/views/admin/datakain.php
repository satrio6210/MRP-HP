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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <h3><center>DATA HISTORY PESANAN</center></h3>
                        </div>
                            
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>kategori</th>
                                    <th>warna</th>
                                    <th>kode-warna</th>
                                    <th>motif</th>
                                    <th>qty (m)</th>
                                    <th>tanggal_pesan</th>                                
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php foreach ($datakain as $g) { ?>
                                <tr class="odd gradeX">
                                   <td><?php echo $g['id'] ?></td>
                                   <td><?php echo $g['kategori'] ?></td>
                                   <td><?php echo $g['warna'] ?></td>
                                   <td><?php echo $g['kode_warna'] ?></td>
                                   <td><?php echo $g['motif'] ?></td>
                                   <td><?php echo $g['qty'] ?></td>
                                   <td><?php echo $g['tanggal_pesan'] ?></td>
                                   <!--<td class="center"><img style="width: 200px" src="<?php echo $g['nota_pembayaran'] ?>"></td>-->
                                   <td><?php if($g['status']==0) {
                                           echo '<a class="btn btn-cancel" style="color: white; background: pink" href="'.base_url('admin/validasikain/'.$g['id']).'">Unsent</a>';
                                       }else{
                                            echo '<a class="btn btn-success btn-outline" style="color: white; background: green;" >Sent</a>';
                                       }
                                   ?></td>
                                   <td class="center">
<<<<<<< HEAD
                                    <a class="btn btn-primary btn-outline" href="<?php echo base_url()."index.php/admin/editDatakain/".$g['id']?>">ROP</a>
                                        <a class="btn btn-danger btn-outline" href="<?php echo base_url()."index.php/admin/deleteData/".$g['id']?>">Hapus</a>
=======
                                        <a class="btn btn-danger btn-outline" href="<?php echo base_url()."index.php/admin/deleteDatakain/".$g['id']?>">Hapus</a>
>>>>>>> 4f8ed8eb00d3406166dc6902df60d8b6713c569b
                                    </td>
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
            