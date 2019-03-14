
<div class="loader"></div>
<div class="row">
	<?php 
                       foreach ($member as $data) {
                                                                       
                             ?>
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="mb-7 font-weight-bold">ID :
					<?php echo $data->Customer_ID;?>
					<h4 class="mb-7 font-weight-bold" style="text-align:center">
						<?php echo $data->nama;?>
					</h4>
				</h4>
				<form action="" method="POST">


					<div class="row">
						<div class="col-md-4">
							<img src="<?php echo base_url().'assets/images/tulis.png'?>" style=" width:150px; margin-left:7rem"></img>
						</div>


						<div class="col-md-8">
							<div class="form-row ">

								<input hidden name="id" value="<?php echo $data->Customer_ID;?>"></input>
								<div class="col-md-6 mb-3">
									<label for="validationServer01">Nama</label>
									<input type="text" name="nama" class="form-control is-valid font-weight-bold" id="validationServer01" readonly
									 value="<?php echo $data->nama;?>" required>
									<div class="valid-feedback">
										GoWater Data !
									</div>
								</div>

								<div class="col-md-6 mb-3">
									<label for="validationServer02">Tanggal Pemakaian</label>
									<input type="text" name="tanggal" class="form-control is-valid font-weight-bold" id="validationServer02"
									 readonly value="<?php  echo date('d-m-Y',strtotime($data->Tanggal)) ?>" required>
									<div class="valid-feedback">
										GoWater Data !
									</div>
								</div>

							</div>
							<!-- row2 -->
							<div class="form-row">

								<div class="col-md-6 mb-3">
									<label for="validationServer01">Jumlah Penggunaan</label>
									<input type="text" name="biaya" class="form-control is-valid font-weight-bold" id="validationServer01"
									 readonly value="<?php echo $data->Pemakaian_Bulan_Ini;?>" required>
									<div class="valid-feedback">
										GoWater Data !
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<label for="validationServer02">Jumlah Tagihan</label>
									<input type="text" name="bulan_baru" class="form-control is-valid font-weight-bold" id="tagihan" readonly
									 value="<?php $p= $data->Pemakaian_Bulan_Ini* 2000; echo " Rp " . number_format($p,2,',','.'); ?>">
									<input type="text" hidden id="get" readonly value="<?php $p= $data->Pemakaian_Bulan_Ini* 2000; echo $p ?>">


									<div class="valid-feedback">
										GoWater Data !
									</div>
								</div>

							</div>

							<div class="form-row">

								<div class="col-md-6 mb-3">
									<label for="validationServer01">Jumlah Bayar</label>
									<input type="text" name="bayar" class="form-control is-valid " id="bayar" onkeyup="total()" placeholder="Masukan Jumlah Bayar"
									 required>
									<div class="valid-feedback">
										GoWater Data !
									</div>
								</div>

								<div class="col-md-6 mb-3">
									<label for="validationServer02">Kembali</label>
									<input type="text" name="bulan_baru" class="form-control is-valid" id="kembali" placeholder="Kembalian">


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
								<input class="btn btn-info" type="submit" name="submit" value="Bayar">
							</div>
						</div>
					</div>
					<?php
                                                    }
                                                    ?>
				</form>


			</div>
		</div>
	</div>
</div>
<script>
	function total() {
		var x = document.getElementById("bayar").value;
		var y = document.getElementById("get").value;
		var jumlah_harga = x - y;

		if (jumlah_harga <= 0) {
			jumlah_harga = 0;
		};
		document.getElementById('kembali').value = jumlah_harga;

	}

</script>
