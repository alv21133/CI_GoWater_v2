  <div class="loader"></div>
  <div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        
                            <h4 class="box-title" style="text-align:center">Data Customer Baru</h4>
            
                            <table class=" table table-striped " id="member">                             
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>id Pelanggan</th>
                                                <th>nama </th>
                                                <th>Alamat</th>
                                                <th>Telp</th>
                                                <th>Status</th>
                                                <th>Paket</th>
                                                <th>Terima</th>
                                                <th>Hapus</th>
                                                
                                            </tr><br>
                                        </thead>
                                    <?php
                                    foreach ($member as $hasil) {
                                        
                                            
                                            ?>
                                            <tr>
                                        <td><?php echo $hasil->ID; ?> </td>
                                        <td><?php echo $hasil->Nama; ?> </td>
                                        <td><?php echo $hasil->Alamat; ?> </td>
                                        <td><?php echo $hasil->Telp; ?> </td>
                                            
                                        <?php
                                                if ($hasil->Status== "Lunas") {
                                                    ?>
                                                <td class="badge badge-success"><?php echo $hasil->Status; ?> </td>
                                                <?php
                                                }else{
                                                    ?>
                                                  <td class="badge badge-danger"><?php echo $hasil->Status; ?> </td> 
                                                  <?php
                                                }
                                        ?>
                                        <td><?php echo $hasil->paket; ?> </td>
                                        <td>
                                        <a style="margin-left:2rem;" href="<?php echo base_url().'Konfirmasi/member/'.$hasil->ID;?>" class="btn btn-info" onclick="return confirm('Data <?php echo $hasil->Nama;?> Akan di Konfirmasi..?')"  value="" >Terima</a> 
                                        </td>
                                        <td >
                                                    <script>
                                                        function show() {
                                                         $('#button1').on('click', function() {
                                                            $('#hapus_modal').show();
                                                        });

                                                        }
                                                    
                                                    </script>
                                                                           
                                            <a href="<?php echo base_url().'Konfirmasi/del_konfirmasi/'.$hasil->ID;?>" class="ti-trash"onclick="return confirm('Data [  <?php echo $hasil->Nama;?> ] Akan di Hapus..?')"></a>                                       
                                      </td>                                                                             
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                        <div class="row">                              
                                
                        </div>

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