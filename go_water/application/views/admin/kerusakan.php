<div class="loader"></div>
<div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        
                            <h4 class="box-title" style="text-align:center">Data Customer </h4>
            
                            <table class=" table table-striped " id="member">                             
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Customer id</th>
                                                <th>Tanggal</th>
                                                <th>Kerusakan</th>
                                                <th>Lokasi</th>
                                                <th>Paket</th>
                                                <th>Edit</th>     
                                            </tr><br>
                                        </thead>
                                    <?php
                                   foreach ($member as $hasil) {
                                         ?>
                                            <tr>
                                        <td><?php echo $hasil->No ?></td>                                 
                                        <td><?php echo $hasil->Customer_ID ?> </td>
                                         <td><?php echo $hasil->Tanggal ?> </td>
                                        <td><?php echo $hasil->Keterangan ?> </td>
                                       
                                        <td><?php echo $hasil->lokasi ?> </td>
                                            
                                     
                                        <td><a style="margin-left:1rem;" href="edit_customer.php?%rwz%qr$=<?php echo $hasil->No ?>" class="ti-settings" ></a></td>
                                        
                                        <td >
                                                
                                                <a style="margin-left:1rem;" onclick="return confirm('Laporan <?php echo $hasil->Customer_ID?> sudah di tangan dan akan menghapus..?')"  href="hapus_kerusakan.php?rq%=<?php echo $hasil->Customer_ID ?>" class="ti-trash"></a>
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