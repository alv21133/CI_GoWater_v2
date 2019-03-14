<div class="loader"></div>
<div class="row">
                <div class="col-lg-12">
                    <div class="card">  
                        
                            <h4 class="box-title" style="text-align:center">Data Customer </h4>
            
                            <table class=" table table-striped " id="member">                             
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Masuk</th>
                                                <th>Keluar</th>
                                                
                                                <th>Total pemasukan</th>
                                                
                                                <th>Total Pengeluaran</th>
                                                <th>Tangaal</th>
                                                <th>Total</th>
                                                <th>Atur</th>
                                                <th>Hapus</th>
                                                
                                                
                                            </tr><br>
                                        </thead>
                                    <?php
                                    foreach ($member as $hasil ) {
                                           ?>
                                            <tr>
                                        <td><?php echo $hasil->No; ?></td>                                 
                                        <td><?php echo $hasil->pemasukan_No; ?> </td>
                                        <td><?php echo $hasil->pengeluaran_No; ?> </td>
                                         <td><?php echo $hasil->Total_Pemasukan; ?> </td>
                                        <td><?php echo $hasil->Total_Pengeluaran; ?> </td>
                                        <td><?php echo $hasil->Tanggal; ?> </td>
                                       
                                        <td><?php echo $hasil->Total; ?> </td>
                                            
                                     
                                        <td><a style="margin-left:1rem;" href="edit_customer.php?%rwz%qr$=<?php ?>" class="ti-settings" ></a></td>
                                        
                                        <td >
                                                
                                                <a style="margin-left:1rem;" onclick="return confirm('Laporan <?php ?> sudah di tangan dan akan menghapus..?')"  href="hapus_kerusakan.php?rq%=<?php  ?>" class="ti-trash"></a>
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