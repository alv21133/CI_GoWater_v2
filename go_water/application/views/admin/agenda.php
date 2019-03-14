           <div class="loader"></div>
                <div class="col-lg-12">
                    <div class="card">  
                       
                            <h4 class="box-title" style="text-align:center">Data Customer </h4>
            
                            <table class=" table table-striped " id="member">                             
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Pegawai</th>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                
                                                
                                                <th>Hapus</th>
                                                
                                                
                                            </tr><br>
                                        </thead>
                                    <?php
                                   foreach ($member as $hasil) { 
                                            ?>
                                            <tr>
                                        <td><?php echo $hasil->No ?></td>                                 
                                        <td><?php echo $hasil->pegawai_ID ?> </td>
                                         <td><?php echo $hasil->Tanggal ?> </td>
                                        <td><?php echo $hasil->Keterangan ?> </td>
                                            <td>    
                                                <a style="margin-left:1rem;" onclick="return confirm('Laporan <?php echo $hasil->No?> sudah di tangan dan akan menghapus..?')"  href="hapus_kerusakan.php?rq%=<?php echo $hasil->No ?>" class="ti-trash"></a>
                                        </td>                         
                                        
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                        <div class="row">   
                        </div>
                        <div class="card-body"></div>
                    </div> 
                </div><!-- /# column -->
            </div>

   