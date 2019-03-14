        <div class="loader"></div>
        <div class="content pb-0">

            <!--  Traffic  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        
                            <h4 class="box-title" style="text-align:center">Data Customer </h4>
            
                            <table class=" table table-bordered  table-hover " id="member">                             
                                        <thead class="">
                                            <tr>
                                                <th>id</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Telp</th>
                                                <th>Pembayaran</th>
                                                <th>Paket</th>
                                                <th>Edit</th>
                                                <th>Hapus</th>
                                                
                                            </tr><br>
                                        </thead>
                                    <?php
                                   
                                            foreach ($member as $hasil ) {
                                            
                                            ?>
                                            <tr>
                                        <td><?php echo $hasil->ID; ?></td>
                                        <td><?php echo $hasil->Nama; ?> </td>
                                        <td><?php echo $hasil->Alamat; ?> </td>
                                        <td><?php echo $hasil->Telp; ?> </td>
                                            
                                        <?php
                                                if ($hasil->Pembayaran== "Lunas") {
                                                    ?>
                                                <td class="badge badge-success"><?php echo $hasil->Pembayaran; ?> </td>
                                                <?php
                                                }else{
                                                    ?>
                                                  <td class="badge badge-dark"><?php echo $hasil->Pembayaran; ?> </td> 
                                                  <?php
                                                }
                                        ?>
                                        <td><?php echo $hasil->paket; ?> </td>
                                        <td><a style="margin-left:1rem;" href="<?php echo'Data_customer/edit_customer/'.$hasil->ID; ?>" class="ti-settings" ></a></td>
                                        
                                        <td >
                                                
                                                <a style="margin-left:1rem;" onclick="return confirm('Anda yakin data <?php echo $hasil->Nama;?> ingin menghapus..?')"  href="<?php echo'Data_customer/hapus_customer/'.$hasil->ID; ?>" class="ti-trash"></a>
                                        </td>
                                    </tr>
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

           

       





  
    