 <div class="loader"></div>
 <div class="row">
            <?php 
                        foreach ($member as $data) {                                   
                             ?>
                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-7 font-weight-bold" >ID : <?php echo $data->Customer_ID;?> <h4 class="mb-7 font-weight-bold" style="text-align:center"><?php echo $data->nama;?></h4></h4>                                    
                                    <?php echo 
                                    form_open(base_url().'pakai/simpan_pakai/');
                                       ?>  
                                            <div class="row"> 
                                                <div class="col-md-4">
                                                    <img   src="<?php echo base_url() ?>assets/images/tulis.png" style=" width:150px; margin-left:7rem" ></img>
                                                    </div>
                                                

                                                 <div class="col-md-8">
                                                        <div class="form-row ">

                                                               <input hidden name="id" value="<?php echo $data->Customer_ID;?>"></input>    
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="validationServer01">Nama</label>
                                                                    <input type="text" name="nama" class="form-control is-valid font-weight-bold" id="validationServer01"   readonly value="<?php echo $data->nama;?>" required>
                                                                        <div class="valid-feedback">
                                                                                GoWater Data !
                                                                    </div>
                                                                </div>
                                                                    
                                                            <div class="col-md-6 mb-3">
                                                                    <label for="validationServer02">Tanggal Input </label>
                                                                    <input type="text" name="tanggal"class="form-control is-valid font-weight-bold" id="validationServer02"  readonly value="<?php  $today = date("d/m/Y"); echo $today ?>" required>
                                                                            <div class="valid-feedback">
                                                                                GoWater Data ! 
                                                                     </div>
                                                            </div>
                                                            
                                                        </div>
                                                <!-- row2 -->
                                                <div class="form-row">
                                                  
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationServer01">Pemakaian Bulan Lalu</label>
                                                        <input type="text" name="bulan_lama" class="form-control is-valid font-weight-bold" id="validationServer01"  readonly  value="<?php echo $data->Pemakaian_Bulan_Ini;?>" required>
                                                                <div class="valid-feedback">
                                                                     GoWater Data !
                                                                </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationServer02">Pemakaian Bulan Ini</label>
                                                            <input type="text" name="bulan_baru" class="form-control is-valid" id="validationServer02" placeholder="Jumlah meter Pemakaian ">
                                                            
                                                            
                                                            <div class="valid-feedback">
                                                                        GoWater Data !
                                                                    </div>
                                                    </div>
                                                            
                                                </div>
                                                <!-- row3 -->
                                                <div class="form-row">
                                                    
                                                    
                                                            </div>
                                                         <div class="col-md-1"></div>
                                          
                                             
                                                    </div> <!-- row -->
                                                    </div> <!-- row -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div style="text-align:center;">
                                                                <input class="btn btn-info" type="submit" name="submit" value="Simpan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                    form_close();
                                                    ?>                
                            </div>
                        </div>
                    </div>
            </div> <!-- /.order -->





