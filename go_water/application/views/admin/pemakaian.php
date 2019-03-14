<div class="loader"></div>

            <!--  Traffic  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">  
    
                            <h4 class="box-title" style="text-align:center">Data Pemakaian Customer </h4>

                          <a href="<?php echo base_url().'print_pakai' ?>" style="text-salign:right; margin-left:22px"><img src="<?php echo base_url().'/assets/images/print.png'?>" style="width:40px" ></img></a>

                            <table class=" table table-striped " id="member">                             
                                        <thead class="thead-dark">
                                            <tr  class="text-center">
                                                <th>No</th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th> Bulan Lalu</th>
                                                <th> Bulan ini</th>                                                
                                                <th> Pembayaran</th>                                                
                                                <th>Update Data</th>
                                                <th>Bayar</th>
                                                <th>Hapus Data</th>
                                              
                                                
                                            </tr><br>
                                        </thead>
                                    <?php
                                    foreach ($member as $hasil) {
                                             
                                            ?>
                                            <tr class="text-center" >
                                        <td><?php echo $hasil->No; ?></td>
                                        <td><?php echo $hasil->Customer_ID; ?></td>
                                        <td><?php echo $hasil->nama; ?> </td>
                                        <td><?php echo $hasil->Tanggal; ?> </td>
                                        <td><?php echo $hasil->Pemakaian_Bulan_Lalu; ?> </td>
                                        <td><?php echo $hasil->Pemakaian_Bulan_Ini; ?> </td>
                                        

                                        
                                           
                                        <?php
                                             if ($hasil->status_bayar=='Lunas') {
                                                 ?>
                                               <td><a style="margin-left:1rem;" class="badge badge-success text-wight-bold "><?php echo $hasil->status_bayar?></a></td>
                                                <?php
                                             }else{
                                                 ?>
                                                 <td><a style="margin-left:1rem;color:white;"  class="btn btn-danger text-wight-bold "><?php echo $hasil->status_bayar?></a></td>
                                                 <?php 
                                             }   
                                        ?> 
                                      
                                        <td><a style="margin-left:1rem;" href="<?php echo base_url().'pakai/input_pakai/'.$hasil->No; ?>" class="btn btn-warning ">update</a></td>
                                        
                                        <td >
                                                
                                                <a style="margin-left:1rem;" onclick="return confirm('Pembayaran Nomor transaksi <?php echo $hasil->No;?> Pada <?php echo date('d-m-Y',strtotime($hasil->Tanggal))?> akan di lakukan..?')"  href="<?php echo base_url().'bayar/detail/'.$hasil->No ?>" class="btn btn-info text-wight-bold ">Bayar</a>
                                        </td>
                                        <td >
                                                
                                                <a style="margin-left:1rem;" onclick="return confirm('Anda yakin data Transaksi No  <?php echo $hasil->No;?> Pada <?php echo $hasil->Tanggal?> ingin dihapus..?')"  href="<?php echo base_url().'pakai/del_pakai/'.$hasil->No; ?>" class="ti-trash"></a>
                                        </td>


                                        
                                      
                                        
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                        <div class="row">                              
                                
                        </div> <!-- /.row --> 