
<div class="loader"></div>
<div class="content pb-0">


            <div class="clearfix"></div>



            <!-- tabel data -->
            <!--  Traffic  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        
                            <h4 class="box-title" style="text-align:center">Kelola akun Customer</h4>
            
                            <table class=" table table-striped " id="member">                             
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>id Pelanggan</th>
                                                <th>nama </th>
                                                <th>Alamat</th>                                            
                                                <th>Status</th>
                                                <th>Password</th>
                                                <th>Ubah Pasword</th>                                               
                                            </tr><br>
                                        </thead>
                                    <?php
                                    foreach ($member as $hasil) {
                                        
                                    
                                            ?>
                                            <tr>
                                        <td><?php echo $hasil->ID; ?> </td>
                                        <td><?php echo $hasil->Nama; ?> </td>
                                        <td><?php echo $hasil->Alamat; ?> </td>
                                        
                                            
                                        <?php
                                                if ($hasil->Status=='Verifikasi') {
                                                    ?>
                                                <td class="badge badge-info"><?php echo $hasil->Status; ?> </td>
                                                <td><?php echo $hasil->Password; ?> </td>
                                                <td>
                                                <a style="margin-left:4rem;" href="<?php echo base_url().'Tambah_akun/kelola_akun/'.$hasil->ID;?>" class="ti-settings"></a> 
                                                </td>
                                                                                                                        
                                            </tr>
                                                <?php
                                                }else{
                                                    ?>
                                                  <td class="badge badge-warning"><?php echo $hasil->Status; ?> </td> 
                                                  <td></td>
                                                <td>
                                                <a style="margin-left:4rem;" class="ti-close"></a> 
                                                </td>
                                                  <?php
                                                }
                                        ?>
                                        
                                    <?php
                                    }
                                    ?>
                                </table>
                        <div class="row">                              
                                
                        </div> <!-- /.row --> 
                        
                        <div class="card-body"></div>
                    </div> 
                </div><!-- /# column -->
            </div>
            <!--  Traffic  End -->
        <!-- tabel2 -->
                                       <!-- Modal -->
                <div class="modal fade" id="hapus_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda yakin untuk menghapus data ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <?php echo $t_id?>
                    </div>
                    <div class="modal-footer">
                        <a href="konfirmasi.php"><button type="button" class="btn btn-primary">Hapus</button></a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>       
                    </div>
                    </div>
                </div>
                </div>
        </div> <!-- .content -->
