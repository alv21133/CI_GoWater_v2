<div class="loader"></div>
<div class="content pb-0">
            <div class="row">
            <?php 
                    foreach ($member as $data ) {
                        
                            
                             ?>
                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-7 font-weight-bold" >ID : <?php echo $data->ID ?> <h4 class="mb-7 font-weight-bold" style="text-align:center"><?php echo $data->Nama ?></h4></h4>                                    
                                    <?php
                                            
                                          echo  form_open('Data_customer/simpan_edit/');
                                            
                                            
                                            ?>                                       
                                            
                                            <div class="row"> 
                                                <div class="col-md-3">
                                                    <img   src="<?php echo base_url()?>assets/images/user.png" style=" width:200px;" ></img>
                                                    </div>
                                            

                                                 <div class="col-md-9">
                                                        <div class="form-row ">

                                                               <input hidden name="id" value="<?php echo $data->ID ?>"></input>    
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="validationServer01">Nama</label>
                                                                    <input type="text" name="nama" class="form-control is-valid" id="validationServer01"  value="<?php echo $data->Nama ?>" required>
                                                                        <div class="valid-feedback">
                                                                                GoWater Data !
                                                                    </div>
                                                                </div>
                                                                    
                                                            <div class="col-md-6 mb-3">
                                                                    <label for="validationServer02">Alamat</label>
                                                                    <input type="text" name="alamat"class="form-control is-valid" id="validationServer02" value="<?php echo $data->Alamat ?>" required>
                                                                            <div class="valid-feedback">
                                                                                GoWater Data ! 
                                                                     </div>
                                                            </div>
                                                            
                                                        </div>
                                                <!-- row2 -->
                                                <div class="form-row">
                                                  
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationServer01">No Telepon</label>
                                                        <input type="text" name="telpon" class="form-control is-valid" id="validationServer01"  value="<?php echo $data->Telp ?>" required>
                                                                <div class="valid-feedback">
                                                                     GoWater Data !
                                                                </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                            <label for="validationServer02">Status Pembayaran</label>
                                                            <!-- <input type="text" name="bayar" class="form-control is-valid" id="validationServer02" value=required> -->
                                                            <select class="form-control is-valid" name="bayar" id="validationServer02">
                                                                <option value="<?php echo $data->Pembayaran ?>"><?php echo $data->Pembayaran ?> </option>
                                                                    <?php
                                                                    if ($data->Pembayaran =='Lunas') {
                                                                        echo"<option value='Belum Lunas'>Belum Lunas</option>";
                                                                    }else{
                                                                        echo"<option value='Lunas'>Lunas</option>";
                                                                    }
                                                                    ?>
                                                                
                                                            </select>  
                                                            
                                                            
                                                            <div class="valid-feedback">
                                                                        GoWater Data !
                                                                    </div>
                                                    </div>
                                                            
                                                </div>
                                                <!-- row3 -->
                                                <div class="form-row">
                                                    
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationServer01">Paket</label>
                                                        <input type="text" name="paket" class="form-control is-valid" id="validationServer01"  value="<?php echo $data->paket ?>" required>
                                                                <div class="valid-feedback">
                                                                     GoWater Data !
                                                                </div>
                                                    </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="validationServer02">Status Customer</label>
                                                                <input type="text" name="status" class="form-control is-valid" id="validationServer02" value="<?php echo $data->Status ?>" required>
                                                                        <div class="valid-feedback">
                                                                            GoWater Data !
                                                                        </div>
                                                            </div>
                                                            
                                                              </div>
                                                            </div>
                                                         <div class="col-md-1"></div>
                                          
                                             
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div style="text-align:center;">
                                                                <input class="btn btn-info" type="submit" name="submit" value="Simpan"></input>
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
            </div>
        </div>