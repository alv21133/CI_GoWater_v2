<div class="modal fade" id="set" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header"
                <?php
                        foreach ($member as $data) {
                            
                        
                    ?>
                              
                    <h5 class="modal-title" id="exampleModalCenterTitle">ID Customer : <?PHP echo $data->ID; ?></h5>
                    <button type="button" class="close" onclick="location.href='<?php echo base_url().'Tambah_akun/'?>'" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo  form_open('Tambah_akun/save_akun/');
                    
                    ?>
                     <input  type="text" hidden readonly name="id" value="<?php echo $data->ID;?>">
                    
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <label class="col-md-4 form-control-plaintext">Akun</label>
                                        <input  type="text" readonly class="col-md-5 form-control" id="staticEmail2" value="<?php echo $data->Nama;?>">
                               
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <label class="col-md-4 form-control-plaintext">Set Password</label>
                                    <input type="text" class="col-md-5 form-control" id="inputPassword2" name="pass" placeholder="Password" value="<?php echo $data->Password;?>" >
                                </div>
     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="location.href='<?php echo base_url().'Tambah_akun/'?>'" data-dismiss="modal">Tutup</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan" ></input>
                </div>
                </div>
                 <?php
                 
                        }
                 form_close();
                 
                 ?>
            </div>
            </div>